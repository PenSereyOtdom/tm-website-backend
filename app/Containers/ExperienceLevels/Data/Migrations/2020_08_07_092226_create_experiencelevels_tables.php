<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExperiencelevelsTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('experiencelevels', function (Blueprint $table) {

            $table->increments('id');
            $table->string('experience_level')->nullable();
            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('experiencelevels');
    }
}
