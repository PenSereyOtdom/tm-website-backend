<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDailyreportTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('dailyreports', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('date');
            $table->string('hour_spent');
            $table->string('title');
            $table->string('description');
            $table->string('task_name');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('dailyreports');
    }
}
