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

		return view('cstr-su.new_patient', ["epsList" => $epsList,"blood_types"=>$bloodTypes,
			"academic_levels"=>$academicLevels,"feelings"=>$feelings]);
	}

	public function store (Request $request) {

		// print_r($request->all());
		/*$dataArray = json_decode($request->input("data"));


		if($request->ajax()){
		    return Response::json(['data' => $dataArray[0][0]->name],201);
		 }*/
		$name = $request->input("name-patient");
		$surname = $request->input("lastname-patient");
		$dateBirth = Carbon::parse($request->input("dob-patient"));
		$age = $request->input("age-patient");
		$typeDocument = $request->input("type-document");
		$numberDocument = $request->input("number-document");
		$address = $request->input("address-patient");
		$phone = $request->input("phone-patient");
		$email = $request->input("email-patient");
		$idEps = $request->input("eps-patient");
		$idBloodType = $request->input("blood-type");
		$gender = $request->input("genre-patient");
		$numberSons = $request->input("sons-number");
		$civilStatus = $request->input("civil-status");
		$idLevelAcdemic = $request->input("education-level");


		$initialSize = $request->input("initial-size");
		$goalWeight = $request->input("goal");
		$minHeight = $request->input("min-weight");
		$maxWeight = $request->input("max-weight");
		$timeAgo = $request->input("time-ago");
		$timeUnits = $request->input("time-ago-units");
		$weightUp = $request->input("how-weight");
		$idFeeling = $request->input("feeling");
		$treatmentsStarted = $request->input("started-treatment");
		$motivation = $request->input("motivation");
		$obvervations = $request->input("observation");
		$attitude = $request->input("position-attitude");
		$integrity = $request->input("integrity");
		$movement = $request->input("movements");
		$others = $request->input("other-inspection");


		$aliments = $request->input("input_aliments");
		$aliments = json_decode($aliments);
		foreach($aliments as $aliment){
			$dayMoment = $aliment->day_moment;
			$place = $aliment->place;
			$food = $aliment->food;
		}

		$habits = $request->input("input_habits");
		$habits = json_decode($habits);
		foreach($habits as $habit){
			$name = $habit->name;
			$frecuency = $habit->frecuency;
			$time = $habit->time;
			$units = $habit->units;
			$description = $habit->description;
		}


		dd($request);

	}
    
}
