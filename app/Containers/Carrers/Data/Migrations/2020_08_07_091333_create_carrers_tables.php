<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarrersTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('carrers', function (Blueprint $table) {
            
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('title')->nullable();
            $table->longtext('content')->nullable();
            $table->string('path')->nullable();
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
        Schema::dropIfExists('carrers');
    }
}
