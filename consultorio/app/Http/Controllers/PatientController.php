<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Response;
use Illuminate\Support\Facades\DB;
use App\Eps;
use App\BloodType;
use App\AcademicLevel;
use App\Feeling;
use Carbon\Carbon;
use App\Inspection;
use App\Food;
use App\Aliment;
use App\Patient;
use App\HabitPatient;
use App\MenstrualPeriod;
use App\PlanningMethod;
use App\PlanningPatient;
use App\Diagnosis;
use App\Meeting;
use App\Treatment;
use App\Tracing;
use App\Sign;

class PatientController extends Controller {

	public function index (Request $request) {

		$patients = Patient::search($request->input('document-patient'), 
							$request->input('name-patient'), $request->input('phone-patient'), 
							$request->input('type-patient'))->paginate(20);

		return view( 'cstr-su.patients', ["patients" => $patients] );
	}

	public function show ($id) {

		$patient = Patient::find($id);
		$meetings = Meeting::where('patient_id', $patient->id)->orderBy('created_at', 'DESC')->get();

		$dates = Meeting::where('patient_id', $patient->id)->where('meeting_status', 'DONE')
				->orderBy('created_at', 'ASC')->pluck('start_meeting');
		//dd(['meetings' => $meetings, 'dates' => $dates ]);
		$datesValues = array();

		foreach ($dates as $date) {
			// array_push( $datesValues, $date );
			$datePush = Carbon::createFromFormat('Y-m-d H:i:s', $date);
			array_push( $datesValues, $datePush->format('F d Y') );
		}

		$meetingTreatment = $patient->meetings->where('tracing_id', null)->where('meeting_status', '=', 'DONE')->first();
		// $treatment_id = $patient->meetings->where('tracing_id', null)->where('meeting_status', '=', 'DONE')->first()->treatment_id;

		if ( isset($meetingTreatment->treatment_id)  ) {
			$treatment = Treatment::find($meetingTreatment->treatment_id);
			
			$initialW = Sign::find($treatment->sign_id)->weight;
		
			$tracing_id = $patient->meetings->where('treatment_id', null)->pluck('tracing_id');
			$evolutions = Tracing::findMany($tracing_id)->pluck('evolution')->toArray();

			array_unshift($evolutions, $initialW);

			return view( 'cstr-su.patient_detail', 
				['patient' => $patient, 'meetings' => $meetings,
				'weightValues' => implode(',', $evolutions),
				'datesValues' => implode(',', $datesValues)] );

		} else 

		return view( 'cstr-su.patient_detail', 
				['patient' => $patient, 'meetings' => $meetings]);

	}

	public function create () {
		$epsList = Eps::all();
		$bloodTypes = BloodType::all();
		$academicLevels = AcademicLevel::all();
		$feelings = Feeling::all();
		$planningMethods = PlanningMethod::all();
		$foods = Food::orderBy('name', 'ASC')->get();
		return view('cstr-su.new_patient', ["epsList" => $epsList,"blood_types"=>$bloodTypes,
			"academic_levels"=>$academicLevels,"feelings"=>$feelings,"planning_methods"=>$planningMethods,
			"foods"=>$foods]);
	}

	public function store (Request $request) {

		// print_r($request->all());
		/*$dataArray = json_decode($request->input("data"));


		if($request->ajax()){
		    return Response::json(['data' => $dataArray[0][0]->name],201);
		 }*/

		$patient = new Patient;
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

	public function registerPatientCalendar (Request $request) {
		
	}
    
}
