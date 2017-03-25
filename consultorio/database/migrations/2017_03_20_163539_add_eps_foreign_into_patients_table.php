<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEpsForeignIntoPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('patients', function (Blueprint $table) {
            $table->integer('eps_id')->unsigned()->nullable();
            $table->foreign('eps_id')->references('id')->on('eps')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropForeign('eps_eps_id_foreign');
            $table->dropColumn('eps_id');
        });
    }
}
