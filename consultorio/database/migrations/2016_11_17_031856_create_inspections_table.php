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
            $table->enum('hlar_time',['D','M','Y'])->default('D');
            $table->float('hlar_weight', 7, 3);
            $table->enum('integrity',['COMPLETE','INCOMPLETE'])->nullable();
            $table->enum('movement',['NORMAL','ANORMAL'])->nullable();
            $table->enum('attitude', ['YING', 'YANG'])->nullable();
            $table->string('planning');
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->integer('feeling_id')->unsigned()->nullable();
            $table->foreign('feeling_id')->references('id')->on('feelings')->onDelete('cascade');
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
