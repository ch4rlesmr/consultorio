<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Aliment;

class Patient extends Model
{
    protected $table = 'patients';


    public static function all_types_id(){
    	return ["CC"=>"C.C","TI"=>"T.I","CE"=>"C.E","P"=>"Pasaporte","NIT"=>"NIT"];
    }

    public static function genders(){
    	return ["M"=>"Masculino","F"=>"Femenino"];
    }

    public static function civil_statuses(){
    	return ["SIN"=>"Soltero","MAR"=>"Casado","DIV"=>"Divorciado","WID"=>"Viudo","FRU"=>"Unión Libre"];	
    }

    public function blood_type(){
    	return $this->belongsTo("App\BloodType","blood_type_id");
    }

    public function academic_level(){
    	return $this->belongsTo("App\AcademicLevel","academic_level_id");	
    }

    public function inspection(){
        return $this->hasOne('App\Inspection', 'patient_id');
    }

    public function aliments () {
        return $this->hasMany('App\Aliment', 'patient_id');
    }

}
