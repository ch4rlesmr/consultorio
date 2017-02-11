<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->date('birthdate')->nullable();
            $table->enum('civil_status',['SIN','MAR','DIV','WID','FRU'])->default('SIN');//Soltero, Casado, divorciado, viudo, union libre
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->integer('blood_type_id')->unsigned()->nullable();
            $table->foreign('blood_type_id')->references('id')->on('blood_types')->onDelete('cascade');
            $table->enum('gender',['M','F'])->default('M');
            $table->string('email')->nullable();
            $table->integer('number_children')->default(0);
            $table->integer('academic_level_id')->unsigned()->nullable();
            $table->foreign('academic_level_id')->references('id')->on('academic_levels')->onDelete('cascade');
            $table->integer('economic_level')->nullable();//1-6 estrato
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
        Schema::dropIfExists('patients');
    }
}
