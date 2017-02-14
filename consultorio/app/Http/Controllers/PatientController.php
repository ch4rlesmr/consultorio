<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Response;
use App\Eps;
use App\BloodType;
use App\AcademicLevel;
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

		return view('cstr-su.new_patient', ["epsList" => $epsList,"blood_types"=>$bloodTypes,"academic_levels"=>$academicLevels]);
	}

	public function store (Request $request) {

		// print_r($request->all());
		$dataArray = json_decode($request->input("data"));


		if($request->ajax()){
		    return Response::json(['data' => $dataArray[0][0]->name],201);
		 }

	}
    
}
