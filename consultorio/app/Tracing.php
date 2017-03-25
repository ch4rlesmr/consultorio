<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Meeting;

class Tracing extends Model {

    protected $table = 'tracings';

    public function meeting () {
        return $this->hasOne('App\Meeting', 'tracing_id');
    }

}
