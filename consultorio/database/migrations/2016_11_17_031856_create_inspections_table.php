<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspections', function (Blueprint $table) {
            $table->increments('id');
            $table->float('goal', 7, 3);
            $table->float('min_weight', 7, 3);
            $table->float('max_weight', 7, 3);
            $table->text('motivation');
            $table->text('treatment_initiated'); // --> el paciente puede tener varios tratamientos ya iniciados ??? esto requiere nueva tabla
            $table->integer('hlar_num'); // hlar --> How long ago did rise (Cuanto hace que subio)
            $table->string('hlar_time');
            $table->float('hlar_weight', 7, 3);
            $table->string('feeling'); // --> Pueden ser varios sentimientos del paciente requiere de nueva tabla ??
            $table->string('integrity');
            $table->string('movements');
            $table->enum('attitude', ['YING', 'YANG']);
            $table->string('planning');
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
        Schema::dropIfExists('inspections');
    }
}
