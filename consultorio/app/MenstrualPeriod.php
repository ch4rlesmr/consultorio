<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenstrualPeriod extends Model
{
    public static function types(){
    	return ['RE'=>'Regular','IRR'=>'Irregular'];
    }
}
