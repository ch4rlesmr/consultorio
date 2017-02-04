<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habit_patients', function (Blueprint $table) {
            // $table->increments('id');
            $table->string('habit_frecuency');
            $table->float('habit_lot', 7, 3);
            $table->string('units');
            $table->integer('habit_id')->unsigned();
            $table->foreign('habit_id')->references('id')->on('habits');
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
        Schema::dropIfExists('habit_patients');
    }
}
