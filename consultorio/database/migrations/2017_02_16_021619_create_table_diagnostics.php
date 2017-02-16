<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDiagnostics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostics', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('id_c')->nullable();
            $table->longText('p_ig')->nullable();
            $table->longText('h_vb')->nullable();
            $table->longText('e_v')->nullable();
            $table->longText('ra_v')->nullable();
            $table->longText('rf_tp_pc')->nullable();
            $table->enum("type_face",["RE","FA","MP"])->nullable();
            $table->enum("type_tongue",["RE","PU","OT"])->nullable();
            $table->enum("type_eyes",["ES","SYING","SYANG","SALT","PL","BI"])->nullable();
            $table->enum("type_nose",["PD","DPR"])->nullable();
            $table->enum("type_lips",["SU","SGID","SDIG","MG"])->nullable();
            $table->enum("type_nails",["TCYING","RCYANG","EVH","HTA","CPR","AATAB","PTL","GDMD"])->nullable();
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
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
        Schema::dropIfExists('diagnostics');
    }
}
