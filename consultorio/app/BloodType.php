<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    protected $table="blood_types";


    function patients(){
    	return $this->hasMany('App\Patients', 'blood_type_id');
    }
}
