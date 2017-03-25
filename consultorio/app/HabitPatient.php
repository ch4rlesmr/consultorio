<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;

class HabitPatient extends Model
{
    protected $table = "habit_patients";

    public static function frecuencies(){
    	return ['DAY'=>'Diario','HALFDAY'=>'Media de por medio','WEEK'=>'Semanal','MONTH'=>'Mensual','YEAR'=>'Anual'];
    }

    public static function units(){
    	return ['MINUTE'=>'Minutos','HOUR'=>'Horas'];
    }

    public function patient() {
    	return $this->belongsTo('App\Patient', 'patient_id');
    }

    public function getFrecuency() {
    	switch ( $this->habit_frecuency ) {
    		case 'DAY':
    			return 'Diario';
    			break;
    		case 'HALFDAY':
    			return 'Día de por medio';
    			break;
    		case 'WEEK':
    			return 'Semanal';
    			break;
    		case 'MONTH':
    			return 'Mensual';
    			break;
    		case 'YEAR':
    			return 'Anual';
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }

    public function getUnit() {
    	switch ( $this->units ) {
    		case 'MINUTE':
    			return 'Minutos';
    			break;
    		case 'HOUR':
    			return 'Horas';
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }

}
