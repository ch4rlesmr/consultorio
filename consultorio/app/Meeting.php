<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;

class Meeting extends Model {
    
    protected $table = "meetings";

    public function patient () {
    	return $this->belongsTo('App\Patient', 'patient_id');
    }

    public function meetingType() {
    	
    	if ( $this->treatment_id != null ) {
    		return 'Tratamiento';
    	} else if ( $this->tracing_id != null ) {
    		return 'Seguimiento';
    	}

    	return 'SIN ASIGNAR';

    }

}