<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyFoodIdColumnAlimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('aliments', function (Blueprint $table) {
            $table->dropForeign('aliments_food_id_foreign');
            $table->dropColumn('food_id');
        });

        Schema::table('aliments', function (Blueprint $table) {
            $table->text('food_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('aliments', function (Blueprint $table) {
            $table->dropColumn('food_description')->nullable();
        });

        Schema::table('aliments', function (Blueprint $table) {
            $table->integer('food_id')->unsigned();
            $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade');
        });

    }
}
