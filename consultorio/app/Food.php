<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Aliment;

class Food extends Model {
    
    protected $table = 'foods';

    public function aliments () {
    	return $this->hasMany('App\Aliment', 'food_id');
    }

}
