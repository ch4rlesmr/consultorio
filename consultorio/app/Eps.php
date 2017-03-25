<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;

class Eps extends Model {
    
    protected $table = 'eps';

    public function patients () {
    	return $this->hasMany('App\Patient', 'eps_id');
    }

}
