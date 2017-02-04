<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    //
    protected $table = 'product_types';
    protected $fillable = ['id_product', 'name', 'warranty', 'observation', 'status'];


}
