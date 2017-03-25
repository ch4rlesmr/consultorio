<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PlanningPatient;

class PlanningMethod extends Model {

    protected $table = "planning_methods";

    public function planing_patients () {
    	return $this->belongsTo("App\PlanningPatient","planning_method_id");
    }

}
