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

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index() {
        $meetings = Meeting::whereDate('start_meeting', '>=', Carbon::now()->format('Y-m-d'))->orderBy('start_meeting', 'DESC')->get();
        // return view('cstr-su.appointment', ['meetings' => $meetings]);
        return view('cstr-su.appointment', ['meetings' => Meeting::all()]);
    }

    public function listEvents (Request $request) {

        if ($request->ajax()) {
            return Response::json( ['meetings' => $meetings = Meeting::all(), 'status' => 'success'] );
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
        $startMeeting = Carbon::createFromFormat( 'Y-m-d H:i', $request->input('date-agenda') );
        $endMeeting = new Carbon();
        
        if ( $patientOld->count() > 0 ) {
            if ( ($patientOld->first()->id_number === $request->input('number-document') ) && ( $patientOld->first()->type_id_number === $request->input('type-document') ) ) {
                echo "<h1>Usuario ya registrado</h1>";
            }
        } else if ( $request->has('old-patient-id') ) {
            $patient = Patient::find($request->input('old-patient-id'));
            $endMeeting = $startMeeting->addMinutes(20);

        } else {

            $patient->name = $request->input('name-patient');
            $patient->last_name = $request->input('lastname-patient');
            $patient->type_id_number = $request->input('type-document');
            $patient->id_number = $request->input('number-document');
            $patient->phone = $request->input('phone-patient');
            $patient->email = $request->input('email-patient');
            $patient->address = $request->input('address-patient');

            $saved = $patient->save();
            $endMeeting = $startMeeting->addMinutes(40);

        }

        $meeting = new Meeting();
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

        $patients = Patient::select(DB::raw('id, id_number, name, last_name'))->where(DB::raw('CONCAT(name, " ", last_name)'), 'LIKE', '%' . $request->input('name_patient') .'%')
                            ->where('id_number', 'LIKE', '%'. $request->input('numer_document') .'%')
                            ->get();

        if ( $request->ajax() ) {
            return Response::json(['patients' => $patients, 'status' => 'success'],201);
        }
    }

    public function listMeetings() {
        return view('cstr-su.calendar');
    }

    public function createTracingMeeting () {
        return view('cstr-su.new_tracing');
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
        $patient->patient_status = 'OLD';

        $saved = $patient->save();


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

            $habitPatient->save();

        }

        $planningPatient = new PlanningPatient();
        $planningPatient->planning_method_id = $request->input("planify-method");
        $planningPatient->description = $request->input("method-description");
        $planningPatient->patient_id = $patient->id;
        $planningPatient->save();

        if( ($request->input("menstruation-frecuency") !== null) && ($request->input("menstruation-duration"))  ) {
            $menstruationPatient = new MenstrualPeriod();
            $menstruationPatient->type = $request->input("menstruation-type");
            $menstruationPatient->frecuency = $request->input("menstruation-frecuency");
            $menstruationPatient->duration = $request->input("menstruation-duration");
            $menstruationPatient->patient_id = $patient->id;
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

        $patientDiagnosis->save();

        return redirect()->route('paciente.index');
    }

    public function editTreatment ($meetingId) {
        
    }

    public function updateTreatment (Request $request) {
        
    }

    public function createTracing ($meetingId) {

    }

    public function storeTracing (Request $request) {
        
    }

    public function editTracing ($meetingId) {
        
    }

    public function updateTracing(Request $request) {
        
    }

}
