<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Patient;
use App\Meeting;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        return view('cstr-su.calendar');
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
        //if($request->ajax()){

            /*name_patient: $('#name-patient').val(),
            lastname_patient: $('#lastname-patient').val(),
            document_type: $('#type-document').val(),
            number_document: $('#number-document').val(),
            phone_patient: $('#phone-patient').val(),
            email_patient: $('#email-patient').val(),
            address_patient: $('#address-patient').val(),
            start: started,
            end: ended
            42061418*/

            $patient = Patient::where( 'id_number', $request->input('number-document') );
            
            if ( $patient->count() > 0 ) {
                if ( ($patient->first()->id_number === $request->input('number-document') ) && ( $patient->first()->type_id_number === $request->input('type-document') ) ) {
                    echo "<h1>Usuario ya registrado</h1>";
                }
            }

            $patient = new Patient();
            $patient->name = $request->input('name-patient');
            $patient->last_name = $request->input('lastname-patient');
            $patient->type_id_number = $request->input('type-document');
            $patient->id_number = $request->input('number-document');
            $patient->phone = $request->input('phone-patient');
            $patient->email = $request->input('email-patient');
            $patient->address = $request->input('address-patient');

            $saved = $patient->save();
            echo "<h1>$saved</h1>";

            dd($request);

            //return Response::json(['data' => $request->all(), "patient" => $patient],201);
        //}
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
}
