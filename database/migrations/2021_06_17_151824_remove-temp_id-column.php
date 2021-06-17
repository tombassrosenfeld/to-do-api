<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveTempIdColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('boards', function (Blueprint $table) {
            $table->dropColumn('temp_id');
        });

        Schema::table('task_lists', function (Blueprint $table) {
            $table->dropColumn('temp_id');
        });
        
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn('temp_id');
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
            $table->integer('temp_id')->nullable();

        });

        Schema::table('task_lists', function (Blueprint $table) {
            $table->integer('temp_id')->nullable();
        });

        Schema::table('tasks', function (Blueprint $table) {
            $table->integer('temp_id')->nullable();
        });
    }
}
