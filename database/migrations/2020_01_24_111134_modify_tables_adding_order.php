<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyTablesAddingOrder extends Migration
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
            $table->integer('order');
        });

        Schema::table('task_lists', function (Blueprint $table) {
            $table->integer('order');
        });

        Schema::table('tasks', function (Blueprint $table) {
            $table->integer('order');
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
            $table->dropColumn('order');
        });

        Schema::table('task_lists', function (Blueprint $table) {
            $table->dropColumn('order');
        });
        
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn('order');
        });
    }
}
