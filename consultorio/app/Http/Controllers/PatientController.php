<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Response;
use App\Eps;

class PatientController extends Controller {

	public function index () {

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
