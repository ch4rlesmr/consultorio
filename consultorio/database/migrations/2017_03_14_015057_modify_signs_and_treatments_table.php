<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifySignsAndTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('treatments', function (Blueprint $table) {
            $table->integer('sign_id')->unsigned()->nullable();
            $table->foreign('sign_id')->references('id')->on('signs')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('treatments', function (Blueprint $table) {
            $table->dropForeign('signs_sign_id_foreign');
            $table->dropColumn('sign_id');
        });
    }
}
