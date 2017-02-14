<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMeetings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date_time');
            $table->longText('status')->nullable();
            $table->integer('treatment_id')->nullable()->unsigned();
            $table->foreign('treatment_id')->references('id')->on('treatments')->onDelete('set null');
            $table->integer('tracing_id')->nullable()->unsigned();
            $table->foreign('tracing_id')->references('id')->on('tracings')->onDelete('set null');
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
        Schema::dropIfExists('meetings');
    }
}
