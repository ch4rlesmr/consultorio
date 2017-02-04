<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableEps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::table('eps', function (Blueprint $table) {
            $table->string('eps_abbreviation');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        Schema::table('eps', function (Blueprint $table) {
            $table->dropColumn('eps_abbreviation');
        });
    }
}
