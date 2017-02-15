<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HabitPatient extends Model
{
    protected $table = "habit_patients";

    public static function frecuencies(){
    	return ['DAY'=>'Diario','HALFDAY'=>'Media de por medio','WEEK'=>'Semanal','MONTH'=>'Mensual','YEAR'=>'Anual'];
    }

    public static function units(){
    	return ['MINUTE'=>'Minutos','HOUR'=>'Horas'];
    }
}
