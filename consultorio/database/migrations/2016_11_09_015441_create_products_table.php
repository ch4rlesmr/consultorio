<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up() {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('warranty');
            $table->text('observation');
            $table->integer('product_type_id')->unsigned();
            $table->foreign('product_type_id')->references('id')->on('product_types')->onDelete('cascade');
            $table->enum('status',['E','B', 'R', 'M', 'P'])->default('M');
            $table->string('reference');
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
