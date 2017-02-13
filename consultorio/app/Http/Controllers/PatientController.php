<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Response;
use App\Eps;

class PatientController extends Controller {

	public function index () {
		return view('cstr-su.patients');
	}

	public function show ($id) {
		return view('cstr-su.patient_detail');
	}

	public function create () {
		$epsList = Eps::all();

		return view('cstr-su.new_patient', ["epsList" => $epsList]);
	}

	public function store (Request $request) {

		// print_r($request->all());
		$dataArray = json_decode($request->input("data"));


		if($request->ajax()){
		    return Response::json(['data' => $dataArray[0][0]->name],201);
		 }

	}
    
}
