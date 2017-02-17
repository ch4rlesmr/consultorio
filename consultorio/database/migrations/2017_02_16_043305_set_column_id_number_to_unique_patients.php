<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetColumnIdNumberToUniquePatients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn("id_number");
            
        });
        Schema::table('patients', function (Blueprint $table) {
            $table->string("id_number")->unique();
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
            $table->dropColumn("id_number");
        });
        Schema::table('patients', function (Blueprint $table) {
            $table->string("id_number");
        });
    }
}
