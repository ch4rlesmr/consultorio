<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model {
    protected $table = "treatments";
    protected $fillable = [
        'id', 'name', 'last_name', 'birthdate', 'civil_status', 'address',
        'phone', 'blood_type_id', 'gender', 'email', 'number_children',
        'academic_level_id', 'academic_level_id', 'created_at', 'updated_at',
        'type_id_number', 'id_number', 'job'
        ];

    public function sign () {
    	$this->belongsTo('App\Sign', 'sign_id');
    }

}
