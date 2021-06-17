<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTempIdToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Add Column to Boards, TaskLists and Tasks tables

        Schema::table('boards', function (Blueprint $table) {
            $table->integer('temp_id')->nullable();
            $table->text('description', 100)->nullable(false)->change();

        });

        Schema::table('task_lists', function (Blueprint $table) {
            $table->integer('temp_id')->nullable();
            $table->text('description', 100)->nullable()->change();
        });

        Schema::table('tasks', function (Blueprint $table) {
            $table->integer('temp_id')->nullable();
            $table->text('description', 100)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('boards', function (Blueprint $table) {
            $table->dropColumn('temp_id');
            $table->text('description', 100)->nullable(false)->change();
        });

        Schema::table('task_lists', function (Blueprint $table) {
            $table->dropColumn('temp_id');
            $table->text('description', 100)->nullable(false)->change();
        });
        
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn('temp_id');
            $table->text('description', 100)->nullable(false)->change();
        });
    }
}
