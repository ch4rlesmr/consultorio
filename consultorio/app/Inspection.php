<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    protected $table = "inspections";

    public static function timeUnits(){
    	return ["D"=>"Días","M"=>"Meses","Y"=>"Años"];
    }

    public static function attitudes(){
    	return ["YIN"=>"Yin","YANG"=>"Yang"];
    }

    public static function integrities(){
    	return ["COMPLETE"=>"Completo","INCOMPLETE"=>"Incompleto"];
    }

    public static function movements(){
    	return ["NORMAL"=>"Normal","ANORMAL"=>"Anormal"];
    }

    public function patient(){
        return $this->belongsTo("App\Patient","patient_id");
    }

    public function feeling(){
        return $this->belongsTo("App\Feeling","feeling_id");
    }

    public function getTimeUnit() {
        switch ( $this->hlar_time ) {
            case 'D':
                return 'Días';
                break;
            case 'M':
                return 'Meses';
                break;
            case 'Y':
                return 'Años';
                break;
            
            default:
                # code...
                break;
        }
    }

    public function getIntegrity() {
        switch ( $this->integrity ) {
            case 'COMPLETE':
                return 'Completo';
                break;
            case 'INCOMPLETE':
                return 'Incompleto';
                break;
            
            default:
                # code...
                break;
        }
    }

}
