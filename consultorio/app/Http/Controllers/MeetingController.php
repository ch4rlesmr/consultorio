<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\DB;
use App\Patient;
use App\Meeting;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index() {
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
        echo "<h3>paciente: $saved</h3>";

        $meeting = new Meeting();
        $meeting->start_meeting = $request->input('date-agenda');
        $meeting->end_meeting = $request->input('date-agenda');
        $meeting->patient_id = $patient->id;
        $saved = $meeting->save();

        echo "<h3>cita: $saved</h3>";            

        dd($request);

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

        $patients = Patient::select(DB::raw('id_number, name, last_name'))->where(DB::raw('CONCAT(name, " ", last_name)'), 'LIKE', '%' . $request->input('name_patient') .'%')
                            ->where('id_number', 'LIKE', '%'. $request->input('numer_document') .'%')
                            ->get();

        if ( $request->ajax() ) {
            return Response::json(['patients' => $patients, 'status' => 'success'],201);
        }
    }

    public function listMeetings() {
        return view('cstr-su.appointment', ['meetings' => Meeting::all()]);
    }
}
