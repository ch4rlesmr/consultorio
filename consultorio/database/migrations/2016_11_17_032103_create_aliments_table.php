<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aliments', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('detail',['BREAKFAST','MIDMORNING','LUNCH','MIDAFTERNOON','BREAK','DINNER'])->nullable();
            $table->enum('place_food',['HOME','OFFICE','STREET','OTHER'])->nullable();
            $table->integer('food_id')->unsigned();
            $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aliments');
    }
}
