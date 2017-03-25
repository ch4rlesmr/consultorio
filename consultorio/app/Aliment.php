<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
use App\Food;

class Aliment extends Model
{
    protected $table = "aliments";

    public static function details(){
    	return ['BREAKFAST'=>'Desayuno','MIDMORNING'=>'Media mañana','LUNCH'=>'Almuerzo','MIDAFTERNOON'=>'Media tarde','BREAK'=>'Break','DINNER'=>'Cena'];
    }

    public static function placesFood(){
    	return ['HOME'=>'Casa','OFFICE'=>'Oficina','STREET'=>'Calle','OTHER'=>'Otro'];
    }

    public function patient () {
    	return $this->belongsTo('App\Patient', 'patient_id');
    }

    public function food () {
        return $this->belongsTo('App\Food', 'food_id');
    }

    public function getPlace() {
        switch ( $this->place_food ) {
            case 'HOME':
                return 'Casa';
                break;
            case 'OFFICE':
                return 'Oficina';
                break;
            case 'STREET':
                return 'Calle';
                break;
            case 'OTHER':
                return 'Otro';
                break;
            
            default:
                # code...
                break;
        }
    }
//return ['BREAKFAST'=>'Desayuno','MIDMORNING'=>'Media mañana','LUNCH'=>'Almuerzo','MIDAFTERNOON'=>'Media tarde','BREAK'=>'Break','DINNER'=>'Cena'];
    public function getDetail() {
        switch ( $this->detail ) {
            case 'BREAKFAST':
                return 'Desayuno';
                break;
            case 'MIDMORNING':
                return 'Media mañana';
                break;
            case 'LUNCH':
                return 'Almuerzo';
                break;
            case 'MIDAFTERNOON':
                return 'Media tarde';
                break;
            case 'BREAK':
                return 'Break';
                break;
            case 'DINNER':
                return 'Cena';
                break;
            
            default:
                # code...
                break;
        }
    }
}
