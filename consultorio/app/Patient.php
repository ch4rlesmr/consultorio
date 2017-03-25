<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Aliment;
use App\Meeting;
use App\Eps;
use App\HabitPatient;
use App\PlanningPatient;
use App\MenstrualPeriod;
use App\Diagnosis;

//SELECT CONCAT(`name`, ' ', `last_name`) as `fullname` FROM `patients` HAVING `fullname` LIKE '%karen%'

class Patient extends Model
{
    protected $table = 'patients';
    protected $fillable = [
        'id', 'name', 'last_name', 'birthdate', 'civil_status', 'address',
        'phone', 'blood_type_id', 'gender', 'email', 'number_children',
        'academic_level_id', 'academic_level_id', 'created_at', 'updated_at',
        'type_id_number', 'id_number', 'job'
    ];

    public function scopeSearch($query, $document, $name, $phone, $type) {
        
        $query = $query->where('id_number', 'LIKE', '%' . $document .'%');
        $query = $query->select(DB::raw('*'))->where(DB::raw('CONCAT(name, " ", last_name)'), 'LIKE', '%' . $name .'%');
        $query = $query->where('phone', 'LIKE', '%' . $phone . '%');
        $query = $query->where('patient_status', 'LIKE', $type);
        
        return $query;
    }

    public static function all_types_id(){
    	return ["CC"=>"C.C","TI"=>"T.I","CE"=>"C.E","P"=>"Pasaporte","NIT"=>"NIT"];
    }

    public static function genders(){
    	return ["M"=>"Masculino","F"=>"Femenino"];
    }

    public static function civil_statuses(){
    	return ["SIN"=>"Soltero","MAR"=>"Casado","DIV"=>"Divorciado","WID"=>"Viudo","FRU"=>"Unión Libre"];	
    }

    public function blood_type(){
    	return $this->belongsTo("App\BloodType","blood_type_id");
    }

    public function academic_level(){
    	return $this->belongsTo("App\AcademicLevel","academic_level_id");	
    }

    public function inspection(){
        return $this->hasOne('App\Inspection', 'patient_id');
    }

    public function aliments () {
        return $this->hasMany('App\Aliment', 'patient_id');
    }

    public function meetings () {
        return $this->hasMany('App\Meeting', 'patient_id');
    }

    public function eps () {
        return $this->belongsTo('App\Eps', 'eps_id');
    }

    public function habits() {
        return $this->hasMany('App\HabitPatient', 'patient_id');
    }

    public function plannings_patient () {
        return $this->hasOne("App\PlanningPatient","patient_id");
    }

    public function menstrual_period() {
        return $this->hasOne('App\MenstrualPeriod', 'patient_id');
    }

    public function diagnostic () {
        return $this->hasOne('App\Diagnosis', 'patient_id');
    }

    public function getCivilStatus () {
        switch ( $this->civil_status ) {
            case 'SIN':
                return 'Soltero';
                break;
            case 'MAR':
                return 'Casado';
                break;
            case 'DIV':
                return 'Divorciado';
                break;
            case 'WID':
                return 'Viudo';
                break;
            case 'FRU':
                return 'Unión Libre';
                break;
            
            default:
                # code...
                break;
        }
    }

    public function getGender () {
        switch ( $this->gender ) {
            case 'F':
                return 'Femenino';
                break;
            case 'M':
                return 'Masculino';
                break;
            
            default:
                # code...
                break;
        }
    }

    public function getStatus () {
        switch ( $this->patient_status ) {
            case 'NEW':
                return 'Tratamiento';
                break;
            case 'OLD':
                return 'Seguimiento';
            
            default:
                # code...
                break;
        }
    }

    public function getImagePatient() {
        switch ( $this->gender ) {
            case 'F':
                return 'patient_f.png';
                break;
            case 'M':
                return 'patient_m.png';
                break;
            
            default:
                # code...
                break;
        }
    }

}
