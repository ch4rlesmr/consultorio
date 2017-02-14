<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicLevel extends Model
{
    protected $table = "academic_levels";

    function patients(){
    	return $this->hasMany('App\Patient', 'academic_level_id');
    }
}
