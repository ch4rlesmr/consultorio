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

    public function getMedicationType () {
    	switch ( $this->medicine_type ) {
    		case 'MDCN':
    			return 'Medicamento';
    			break;
    		case 'VTMN':
    			return 'Vitamina';
    			break;
    		case 'SYRP':
    			return 'Jarabe';
    			break;
    		case 'INJT':
    			return 'Inyección';
    			break;
    		case 'OTHER':
    			return 'Otro';
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }

}
