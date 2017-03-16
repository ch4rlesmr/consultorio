<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteVitaminsColumnTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('treatments', function (Blueprint $table) {
            $table->longText('diagnosis')->nullable();
        });
        Schema::table('treatments', function (Blueprint $table) {
            $table->dropColumn('vitamins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('treatments', function (Blueprint $table) {
            $table->longText('vitamins')->nullable();
        });
        Schema::table('treatments', function (Blueprint $table) {
            $table->dropColumn('diagnosis');
        });
    }
}
