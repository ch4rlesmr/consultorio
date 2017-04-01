<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyTypeColumnMenstrualPeriods extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('menstrual_periods', function (Blueprint $table) {
            $table->dropColumn('type');
        });

        Schema::table('menstrual_periods', function (Blueprint $table) {
            $table->enum('type', ['RE', 'IRR', 'NA'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('menstrual_periods', function (Blueprint $table) {
            $table->dropColumn('type');
        });

        Schema::table('menstrual_periods', function (Blueprint $table) {
            $table->enum('type', ['RE', 'IRR'])->nullable();
        });
    }
}
