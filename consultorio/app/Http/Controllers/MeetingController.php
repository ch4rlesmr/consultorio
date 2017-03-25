<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Redirect;
use Response;
use Illuminate\Support\Facades\DB;
use App\Patient;
use App\Meeting;
use Carbon\Carbon;
use App\Eps;
use App\BloodType;
use App\AcademicLevel;
use App\Feeling;
use App\Inspection;
use App\Food;
use App\Aliment;
use App\HabitPatient;
use App\MenstrualPeriod;
use App\PlanningMethod;
use App\PlanningPatient;
use App\Diagnosis;
use App\Sign;
use App\Medication;
use App\Treatment;
use App\Tracing;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index() {
        // $meetings = Meeting::whereDate('start_meeting', '>=', Carbon::now()->format('Y-m-d'))->orderBy('start_meeting', 'DESC')->get();
        // return view('cstr-su.appointment', ['meetings' => $meetings]);
        $meetings = Meeting::orderBy('start_meeting', 'DESC')->get();
        return view('cstr-su.appointment', ['meetings' => $meetings]);
    }

    public function listEvents (Request $request) {

        $query = DB::table('meetings')->join('patients', 'meetings.patient_id', '=', 'patients.id')->select('meetings.*', 'patients.name', 'patients.last_name')->get();

        if ($request->ajax()) {
            //return Response::json( ['meetings' => $meetings = Meeting::all(), 'status' => 'success'] );
            return Response::json( ['meetings' => $query, 'status' => 'success'] );

        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {


        $patientOld = Patient::where( 'id_number', $request->input('number-document') );
        $patient = new Patient();

        if ( $request->has('date-agenda') ) {
            $startMeeting = Carbon::createFromFormat( 'Y-m-d H:i', $request->input('date-agenda') );
        } else if ( $request->has('date-meeting-old-patient') ) {
            $startMeeting = Carbon::createFromFormat( 'Y-m-d H:i', $request->input('date-meeting-old-patient') );
        }

        // $startMeeting = Carbon::createFromFormat( 'Y-m-d H:i', $request->input('date-agenda') );
        $endMeeting = clone $startMeeting;
        $meeting = new Meeting();
        
        if ( $patientOld->count() > 0 ) {
            if ( ($patientOld->first()->id_number === $request->input('number-document') ) && ( $patientOld->first()->type_id_number === $request->input('type-document') ) ) {
                echo "<h1>Usuario ya registrado</h1>";
            }
        } else if ( $request->has('old-patient-id') ) {
            $patient = Patient::find($request->input('old-patient-id'));
            $endMeeting->addMinutes(20);

            $tracing = new Tracing();
            $tracing->save();
            $meeting->tracing_id = $tracing->id;

        } else {

            $patient->name = $request->input('name-patient');
            $patient->last_name = $request->input('lastname-patient');
            $patient->type_id_number = $request->input('type-document');
            $patient->id_number = $request->input('number-document');
            $patient->phone = $request->input('phone-patient');
            $patient->email = $request->input('email-patient');
            $patient->address = $request->input('address-patient');

            $saved = $patient->save();
            $endMeeting->addMinutes(40);

            $treatment = new Treatment();
            $treatment->description = "";
            $treatment->save();
            $meeting->treatment_id = $treatment->id;

        }

        
        // Carbon::createFromFormat('Y-m-d H:i', '2017-03-13 09:40');
        $meeting->start_meeting = $startMeeting->toDateTimeString();
        $meeting->end_meeting = $endMeeting->toDateTimeString();
        $meeting->patient_id = $patient->id;
        $saved = $meeting->save();

        return redirect()->route('agenda.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $meeting = Meeting::find($id);

        if ( $meeting->treatment_id !== NULL ) {

            $treatment = Treatment::find( $meeting->treatment_id );
            $sign = Sign::find( $treatment->sign_id );

            return view( 'cstr-su.meeting_detail', 
                ['meeting' => $meeting, 'treatment' => $treatment, 'sign' => $sign] );

        } else if ( $meeting->tracing_id !== NULL ) {

            $tracing = Tracing::find( $meeting->tracing_id );

            return view( 'cstr-su.meeting_detail', 
                ['meeting' => $meeting, 'tracing' => $tracing] );

        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $meeting = Meeting::find($id);
        return view( 'cstr-su.edit_appointment', 
                ['meeting' => $meeting] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function searchPatients (Request $request) {

        $patientsAvailableIds = Meeting::select('patient_id')
                                ->where('meeting_status', '<>', 'ACTV')
                                ->get();

        $patients = Patient::select(DB::raw('id, id_number, name, last_name'))->where(DB::raw('CONCAT(name, " ", last_name)'), 'LIKE', '%' . $request->input('name_patient') .'%')
                            ->where('id_number', 'LIKE', '%'. $request->input('numer_document') .'%')
                            ->where('patient_status', '=', 'OLD')
                            ->whereIn('id', $patientsAvailableIds)
                            ->get();

        if ( $request->ajax() ) {
            return Response::json(['patients' => $patients, 'status' => 'success'],201);
        }
    }

    public function validateMeeting (Request $request) {
        if ( $request->ajax() ) {
            return Response::json(['Validar cita' => 'success'],201);
        }
    }

    public function listMeetings() {
        return view('cstr-su.calendar');
    }

    public function createTracingMeeting ($meetingId) {
        return view( 'cstr-su.new_tracing', ['meeting' => Meeting::find($meetingId)] );
    }

    public function createTreatment ($meetingId) {
        $epsList = Eps::all();
        $bloodTypes = BloodType::all();

        $academicLevels = AcademicLevel::all();
        $feelings = Feeling::all();

        $planningMethods = PlanningMethod::all();
        $foods = Food::orderBy('name', 'ASC')->get();

        $meeting = Meeting::find($meetingId);
        $patient = $meeting->patient;

        return view('cstr-su.new_patient', 
            ["epsList" => $epsList, "blood_types"=>$bloodTypes,
            "academic_levels"=>$academicLevels,"feelings"=>$feelings, 
            "planning_methods"=>$planningMethods, "foods"=>$foods,
            'meeting' => $meeting, 'patient' => $patient]);
    }

    public function storeTreatment (Request $request, $patientId, $meetingId) {
        
        $meeting = Meeting::find($meetingId);
        $allInfo = array();
        $patient = Patient::find($patientId);
        //STEP 1
        $name = $request->input("name-patient");
        $surname = $request->input("lastname-patient");
        $dateBirth = Carbon::createFromFormat('d/m/Y',$request->input("dob-patient"))->toDateTimeString();
        $age = $request->input("age-patient");
        $typeDocument = $request->input("type-document");
        $numberDocument = $request->input("number-document");
        $address = $request->input("address-patient");
        $phone = $request->input("phone-patient");
        $job = $request->input('job-patient');
        $email = $request->input("email-patient");
        $idEps = $request->input("eps-patient");
        $idBloodType = $request->input("blood-type");
        $gender = $request->input("genre-patient");
        $numberSons = $request->input("sons-number");
        $civilStatus = $request->input("civil-status");
        $idLevelAcdemic = $request->input("education-level");
        $economicLevel = $request->input("economic_level");

        $patient->name = $name;
        $patient->last_name = $surname;
        $patient->birthdate = $dateBirth;
        $patient->id_number = $numberDocument;
        $patient->type_id_number = $typeDocument;
        $patient->address = $address;
        $patient->phone = $phone;
        $patient->email = $email;
        $patient->blood_type_id = $idBloodType;
        $patient->gender = $gender;
        $patient->number_children = $numberSons;
        $patient->civil_status = $civilStatus;
        $patient->academic_level_id = $idLevelAcdemic;
        $patient->economic_level = $economicLevel;
        $patient->job = $job;
        $patient->eps_id = $idEps;
        $patient->patient_status = 'OLD';

        $saved = $patient->save();
        array_push($allInfo, $patient);


        //STEP 2
        $initialSize = $request->input("initial-size");//--
        $goalWeight = $request->input("goal");
        $minWeight = $request->input("min-weight");
        $maxWeight = $request->input("max-weight");
        $timeAgo = $request->input("time-ago");
        $timeUnits = $request->input("time-ago-units");
        $weightUp = $request->input("how-weight");
        $idFeeling = $request->input("feeling");
        $treatmentsStarted = $request->input("started-treatment");
        $motivation = $request->input("motivation");
        $obvervations = $request->input("observation");//--
        $attitude = $request->input("position-attitude");
        $integrity = $request->input("integrity");
        $movement = $request->input("movements");
        $others = $request->input("other-inspection");//--

        $inspection = $patient->inspection;
        if($inspection == null){
            $inspection = new Inspection;
        }
        $inspection->size = $initialSize == null ? 0 : $initialSize;
        $inspection->goal = $goalWeight;
        $inspection->min_weight = $minWeight;
        $inspection->max_weight = $maxWeight;
        $inspection->motivation = $motivation;
        $inspection->treatment_initiated = $treatmentsStarted;
        $inspection->hlar_num = $timeAgo;
        $inspection->hlar_time = $timeUnits;
        $inspection->hlar_weight = $weightUp;
        $inspection->integrity = $integrity;
        $inspection->movement = $movement;
        $inspection->attitude = $attitude;
        $inspection->patient_id = $patient->id;
        $inspection->feeling_id = $idFeeling;
        $inspection->observation = $obvervations;
        $inspection->others = $others;
        $inspection->patient_id = $patient->id;

        array_push($allInfo, $inspection);
        $inspection->save();

        //STEP 3
        $aliments = $request->input("input_aliments");
        $aliments = json_decode($aliments);

        foreach($aliments as $aliment){

            $alimentObject = new Aliment();

            $moment = $aliment->day_moment;
            $place = $aliment->place;
            $foodId = $aliment->food_id;

            $alimentObject->detail = $moment;
            $alimentObject->place_food = $place;
            $alimentObject->food_id = $foodId;
            $alimentObject->patient_id = $patient->id;

            array_push($allInfo, $alimentObject);
            $alimentObject->save();

        }

        //STEP 4
        $habits = $request->input("input_habits");
        $habits = json_decode($habits);
        print_r( $habits );

        foreach($habits as $habit){
            $habitPatient = new HabitPatient();

            $habitPatient->habit_name = $habit->name;
            $habitPatient->habit_frecuency = $habit->frecuency;
            $habitPatient->habit_lot = $habit->time;
            $habitPatient->units = $habit->units;
            $habitPatient->habit_description = $habit->description;
            $habitPatient->patient_id = $patient->id;

            array_push($allInfo, $habitPatient);
            $habitPatient->save();

        }

        $planningPatient = new PlanningPatient();
        $planningPatient->planning_method_id = $request->input("planify-method");
        $planningPatient->description = $request->input("method-description");
        $planningPatient->patient_id = $patient->id;

        array_push($allInfo, $planningPatient);
        $planningPatient->save();

        if( ($request->input("menstruation-frecuency") !== null) && ($request->input("menstruation-duration"))  ) {
            $menstruationPatient = new MenstrualPeriod();
            $menstruationPatient->type = $request->input("menstruation-type");
            $menstruationPatient->frecuency = $request->input("menstruation-frecuency");
            $menstruationPatient->duration = $request->input("menstruation-duration");
            $menstruationPatient->patient_id = $patient->id;

            array_push($allInfo, $menstruationPatient);
            $menstruationPatient->save();
        }

        //STEP 5
        $patientDiagnosis = new Diagnosis();
        $patientDiagnosis->id_c = $request->input("intestiny-heart");
        $patientDiagnosis->p_ig = $request->input("intestiny-lung");
        $patientDiagnosis->h_vb = $request->input("liver-vesicle");
        $patientDiagnosis->e_v = $request->input("stomach-vessel");
        $patientDiagnosis->ra_v = $request->input("kidney-bladder");
        $patientDiagnosis->rf_tp_pc = $request->input("kidney-pericardium");

        $patientDiagnosis->type_face = $request->input("face-type");
        $patientDiagnosis->type_tongue = $request->input("tongue-type");
        $patientDiagnosis->type_eyes = $request->input("eyes-type");
        $patientDiagnosis->type_nose = $request->input("nose-type");
        $patientDiagnosis->type_lips = $request->input("lips-type");
        $patientDiagnosis->type_nails = $request->input("nails-type");
        $patientDiagnosis->patient_id = $patient->id;

        array_push($allInfo, $patientDiagnosis);
        $patientDiagnosis->save();

        //STEP 6
        $treatmentSign = new Sign();
        $treatmentSign->weight = $request->input('weight-patient');
        $treatmentSign->size = $request->input('size-patient');
        $treatmentSign->imc = $request->input('imc-patient');
        $treatmentSign->contexture = $request->input('contexture-sign');
        $treatmentSign->blood_presure = $request->input('blood-pressure');
        $treatmentSign->heart_rate = $request->input('heart-rate');
        $treatmentSign->breathing_rate = $request->input('breathing-frequency');
        $treatmentSign->save();

        array_push($allInfo, $treatmentSign);

        $treatmentPatient = $meeting->treatment;
        $treatmentPatient->diagnosis = $request->input('patient-diagnostic');
        $treatmentPatient->description = $request->input('treatment-description');
        $treatmentPatient->sign_id = $treatmentSign->id;
        $treatmentPatient->save();

        $medicines = $request->input("input_medicines");
        $medicines = json_decode($medicines);
        print_r($medicines);

        foreach($medicines as $medicine){
            $medicinePatient = new Medication();

            $medicinePatient->medicine_name = $medicine->name;
            $medicinePatient->dose = $medicine->doses;
            $medicinePatient->medicine_type = $medicine->type;
            $medicinePatient->meeting_id = $meeting->id;
            $medicinePatient->save();

            array_push($allInfo, $medicine);
            // $habitPatient->save();

        }

        $meeting->treatment_id = $treatmentPatient->id;
        $meeting->meeting_status = 'DONE';
        $meeting->save();

        // $patientDiagnosis->save();

        return redirect()->route('paciente.index');
    }

    public function editTreatment ($meetingId) {
        
    }

    public function updateTreatment (Request $request) {
        
    }

    public function createTracing ($meetingId) {

    }

    public function storeTracing (Request $request, $patientId, $meetingId) {

        $tracing = Meeting::find($meetingId)->tracing;
        $tracing->evolution = $request->input('tracing-weight');
        $tracing->diagnosis = $request->input('diagnoses-tracing');
        $tracing->considerations = $request->input('tracing-description');
        $tracing->qualification = $request->input('rating-tracing');
        $tracing->save();

        $medicines = $request->input("input_medicines");
        $medicines = json_decode($medicines);
        
        foreach($medicines as $medicine){
            $medicinePatient = new Medication();

            $medicinePatient->medicine_name = $medicine->name;
            $medicinePatient->dose = $medicine->doses;
            $medicinePatient->medicine_type = $medicine->type;
            $medicinePatient->meeting_id = $meetingId;
            
            $medicinePatient->save();

        }

        $meeting = Meeting::find($meetingId);
        $meeting->meeting_status = 'DONE';
        $meeting->save();

        return redirect()->route('agenda.index');
    }

    public function editTracing ($meetingId) {
        
    }

    public function updateTracing(Request $request) {
        
    }

}
