<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddJobColumnPatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) { //agregar a la tabla de pacientes el campo de trabajo u ocupacion
            $table->string("job");
        });
        Schema::table('inspections', function (Blueprint $table) { //Cambio en el enum de actitude, no es YING la correccion es YIN
            $table->dropColumn("attitude");
        });
        Schema::table('inspections', function (Blueprint $table) {
            $table->enum("attitude", ['YIN', 'YANG']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn('job');
        });
        Schema::table('inspections', function (Blueprint $table) {
            $table->dropColumn("attitude");
        });
        Schema::table('inspections', function (Blueprint $table) {
            $table->enum("attitude", ['YING', 'YANG']);
        });
    }
}
