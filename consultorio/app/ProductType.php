<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model {
    //
    protected $table = 'product_types';
    protected $fillable = ['id', 'name_type'];

    public function products () {
    	return $this->hasMany('App\Product', 'product_type_id');
    }

}
