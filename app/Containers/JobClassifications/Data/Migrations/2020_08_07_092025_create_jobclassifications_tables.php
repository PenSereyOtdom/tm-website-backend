<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobclassificationsTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('jobclassifications', function (Blueprint $table) {

            $table->increments('id');
            $table->string('project_classification')->nullable();
            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('jobclassifications');
    }
}
