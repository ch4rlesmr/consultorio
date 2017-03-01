<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropTableHabitsAndForeignColumnHabitPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('habit_patients', function (Blueprint $table) {
            $table->dropForeign('habit_patients_habit_id_foreign');
            $table->dropColumn('habit_id');
        });

        Schema::dropIfExists('habits');

        Schema::table('habit_patients', function (Blueprint $table) {
            $table->string('habit_name')->after('id');
            $table->string('habit_description')->after('units')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::create('habits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('habit_name');
            $table->timestamps();
        });

        Schema::table('habit_patients', function (Blueprint $table) {
            $table->dropColumn('habit_name');
            $table->dropColumn('habit_description');
        });
        
        Schema::create('habit_patients', function (Blueprint $table) {
            $table->integer('habit_id')->unsigned();
            $table->foreign('habit_id')->references('id')->on('habits')->onDelete('cascade');
        });
    }
}
