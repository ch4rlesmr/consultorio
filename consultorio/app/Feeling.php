<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feeling extends Model
{
    protected $table = "feelings";

    function inspections(){
    	return $this->hasMany('App\Inspection', 'feeling_id');
    }
}
