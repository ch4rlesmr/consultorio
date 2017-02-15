<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aliment extends Model
{
    protected $table = "aliments";

    public static function details(){
    	return ['BREAKFAST'=>'Desayuno','MIDMORNING'=>'Media mañana','LUNCH'=>'Almuerzo','MIDAFTERNOON'=>'Media tarde','BREAK'=>'Break','DINNER'=>'Cena'];
    }

    public static function placesFood(){
    	return ['HOME'=>'Casa','OFFICE'=>'Oficina','STREET'=>'Calle','OTHER'=>'Otro'];
    }
}
