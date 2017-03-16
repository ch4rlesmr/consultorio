<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyMedicationsTableDeleteMedicines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('medications', function (Blueprint $table) {
            $table->dropForeign('medications_medicine_id_foreign');
            $table->dropColumn('medicine_id');
        });

        Schema::dropIfExists('medicines');

        Schema::table('medications', function (Blueprint $table) {
            $table->string('medicine_name')->after('id');
            $table->enum('medicine_type', ['MDCN', 'VTMN', 'SYRP', 'INJT', 'OTHER']);
            //MDCN -> medicine VTMN -> vitamine, SYRP -> syrup, INJT -> injection, OTHER -> otro
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::create('medicines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('medications', function (Blueprint $table) {
            $table->integer('medicine_id')->unsigned();
            $table->foreign('medicine_id')->references('id')->on('medicines')->onDelete('cascade');
        });

        Schema::table('medications', function (Blueprint $table) {
            $table->dropColumn('medicine_name');
            $table->dropColumn('medicine_type');
        });
    }
}
