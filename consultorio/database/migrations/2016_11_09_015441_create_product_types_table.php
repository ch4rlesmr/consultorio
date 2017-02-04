<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up() {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id_product');
            $table->string('name');
            $table->string('warranty');
            $table->text('observation');
            $table->string('status');
            $table->integer('product_type_id')->unsigned();
            $table->foreign('product_type_id')->references('id_type')->on('product_types');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('products');
    }
    
}
