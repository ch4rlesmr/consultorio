<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Meeting;

class Medication extends Model {
    
    protected $table = "medications";

    public function meeting () {
    	return $this->belongsTo('App\Meeting', 'meeting_id');
    }

    public static function all_medications_types (){
    	return ["MDCN"=>"Medicamento","VTMN"=>"Vitamina","SYRP"=>"Jarabe","INJT"=>"Inyección","OTHER"=>"Otro"];
    	//['MDCN', 'VTMN', 'SYRP', 'INJT', 'OTHER']
    }

}
