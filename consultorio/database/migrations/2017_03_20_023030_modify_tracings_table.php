<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyTracingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('tracings', function (Blueprint $table) {
            $table->dropColumn('evolution');
        });
        Schema::table('tracings', function (Blueprint $table) {
            $table->string('evolution')->nullable();
            $table->longText('diagnosis')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('tracings', function (Blueprint $table) {
            $table->dropColumn('evolution');
            $table->dropColumn('diagnosis');
        });
        Schema::table('tracings', function (Blueprint $table) {
            $table->string('evolution')->nullable();
        });
    }
}
