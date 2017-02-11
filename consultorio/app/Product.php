<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    //
    protected $table = 'products';
    protected $fillable = ['id', 'name', 'warranty', 'observation', 'product_type_id', 'status', 'reference'];

    public function scopeSearch($query, $reference, $name, $type, $status) {
    	return $query
    		->where('reference','LIKE','%'.$reference.'%')
    		->where('name','LIKE','%'.$name.'%')
    		->where('product_type_id','LIKE','%'.$type.'%')
    		->where('status','LIKE','%'.$status.'%');
    }

    public function product_type() {
    	return $this->belongsTo("App\ProductType","product_type_id");
    }

    public function getStatus () {
    	switch ( $this->status ) {
    		case 'E':
    			return 'Excelente';
    			break;
    		case 'B':
    			return 'Bueno';
    			break;
    		case 'R':
    			return 'Regular';
    			break;
    		case 'M':
    			return 'Mal';
    			break;
    		case 'P':
    			return 'Pesimo';
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }

}
