<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Treatment;

class Sign extends Model {
    protected $table = "signs";
    protected $fillable = ['weight', 'size', 'imc', 'contexture',
    						'blood_presure', 'heart_rate', 'breathing_rate'];


    public function treatment () {
    	return $this->hasOne('App\Treatment', 'sign_id');
    }

}
