<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSigns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signs', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('weight',8,2);
            $table->decimal('size',8,2);
            $table->decimal('imc',8,2);
            $table->string('contexture')->nullable();
            $table->decimal('blood_presure',8,2);
            $table->decimal('heart_rate',8,2);
            $table->decimal('breathing_rate',8,2);
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
        Schema::dropIfExists('signs');
    }
}
