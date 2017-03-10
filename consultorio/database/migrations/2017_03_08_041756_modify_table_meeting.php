<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyTableMeeting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('meetings', function (Blueprint $table) {
            if ( Schema::hasColumn('date_time', 'status') ) {
                $table->dropColumn('date_time');
                $table->dropColumn('status');
            }
        });

        Schema::table('meetings', function (Blueprint $table) {
            $table->enum('meeting_status', ['ACTV', 'CANC', 'DONE'])->default('ACTV');
            $table->datetime('start_meeting');
            $table->datetime('end_meeting');
            $table->integer('patient_id')->unsigned()->nullable();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('meetings', function (Blueprint $table) {
            $table->dropColumn('meeting_status');
            $table->dropColumn('start_meeting');
            $table->dropColumn('end_meeting');
        });

        Schema::table('meetings', function (Blueprint $table) {
            $table->string('status');
            $table->datetime('date_time');
        });
    }
}
