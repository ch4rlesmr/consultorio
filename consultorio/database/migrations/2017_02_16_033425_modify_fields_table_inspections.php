<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyFieldsTableInspections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inspections', function (Blueprint $table) {
            $table->dropColumn('planning');
            $table->float('size', 7, 3);
            $table->longText('observation')->nullable();
            $table->longText('others')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inspections', function (Blueprint $table) {
            $table->string('planning');
            $table->dropColumn('size');
            $table->dropColumn('observation');
            $table->dropColumn('others');
        });
    }
}
