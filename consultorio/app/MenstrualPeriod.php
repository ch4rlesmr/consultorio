<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;

class MenstrualPeriod extends Model
{
    public static function types(){
    	return ['RE'=>'Regular','IRR'=>'Irregular'];
    }

    public function patient() {
    	return $this->belongsTo('App\Patient', 'patient_id');
    }

    public function getType() {
    	switch ( $this->type ) {
    		case 'RE':
    			return 'Regular';
    			break;
    		case 'IRR':
    			return 'Irregular';
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }

}
