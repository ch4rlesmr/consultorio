<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Response;
use App\Eps;
use App\BloodType;
use App\AcademicLevel;
use App\Feeling;
use Carbon\Carbon;
use App\PlanningMethod;
use App\Inspection;
use App\Food;
use App\Aliment;
use App\Patient;

class PatientController extends Controller {

	public function index () {
		return view('cstr-su.patients');
	}

	public function show ($id) {
		return view('cstr-su.patient_detail');
	}

	public function create () {
		$epsList = Eps::all();
		$bloodTypes = BloodType::all();
		$academicLevels = AcademicLevel::all();
		$feelings = Feeling::all();
		$planningMethods = PlanningMethod::all();
		$foods = Food::all();
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
		$patient->save();

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
		$inspection->save();
		//STEP 3
		$aliments = $request->input("input_aliments");
		$aliments = json_decode($aliments);
		foreach($aliments as $aliment){
			$dayMoment = $aliment->day_moment;
			$place = $aliment->place;
			$foodId = $aliment->food_id;
		}

		//STEP 4
		$habits = $request->input("input_habits");
		$habits = json_decode($habits);
		if(is_array($habits) && false){
			foreach($habits as $habit){
				$name = $habit->name;
				$frecuency = $habit->frecuency;
				$time = $habit->time;
				$units = $habit->units;
				$description = $habit->description;
			}
		}
		$idPlanningMethod = $request->input("planify-method");
		$descriptionMethod = $request->input("method-description");
		$typePeriod = $request->input("menstruation-type");
		$frecuencyDays = $request->input("menstruation-frecuency");
		$durationDays = $request->input("menstruation-duration");

		//STEP 5
		$id_c = $request->input("intestiny-heart");
		$p_ig = $request->input("intestiny-lung");
		$h_vb = $request->input("liver-vesicle");
		$e_v = $request->input("stomach-vessel");
		$ra_v = $request->input("kidney-bladder");
		$rf_tp_pc = $request->input("kidney-pericardium");

		$typeFace = $request->input("face-type");
		$typeTongue = $request->input("tongue-type");
		$typeEyes = $request->input("eyes-type");
		$typeNose = $request->input("nose-type");
		$typeLips = $request->input("lips-type");
		$typeNail = $request->input("nails-type");

		dd($request);

	}
    
}
