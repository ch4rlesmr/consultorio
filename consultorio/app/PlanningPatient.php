<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanningPatient extends Model
{
    protected $table = "plannings_patients";

    public function patient(){
    	return $this->belongsTo("App\Patient","patient_id");
    }

    public function planning_method(){
    	return $this->belongsTo("App\PlanningMethod","planning_method_id");
    }
}
