<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;

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
}
