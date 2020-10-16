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
            $table->unsignedInteger('applies_id');
            $table->dateTime('date');
            $table->string('hour_spent');
            $table->string('title');
            $table->string('description');
            $table->string('status');
            $table->timestamps();
            $table->foreign('applies_id')->references('id')->on('applies')->onDelete('cascade');
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