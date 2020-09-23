<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSetinterviewTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('setinterviews', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('pick_date');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('meeting_url');
            $table->string('note');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('setinterviews');
    }
}
