<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyBloodPressureSingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('signs', function (Blueprint $table) {
            $table->dropColumn('blood_presure');
        });

        Schema::table('signs', function (Blueprint $table) {
            $table->text('blood_presure')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('signs', function (Blueprint $table) {
            $table->dropColumn('blood_presure');
        });

        Schema::table('signs', function (Blueprint $table) {
            $table->double('blood_presure', 8,2)->nullable();
        });
    }
}
