<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyTypeTongueColumnDiagnosticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('diagnostics', function (Blueprint $table) {
            $table->dropColumn('type_tongue');
        });

        Schema::table('diagnostics', function (Blueprint $table) {
            $table->text('type_tongue');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('diagnostics', function (Blueprint $table) {
            $table->dropColumn('type_tongue');
        });

        Schema::table('diagnostics', function (Blueprint $table) {
            $table->enum('type_tongue', ['RE', 'PU', 'OT']);
        });
    }
}
