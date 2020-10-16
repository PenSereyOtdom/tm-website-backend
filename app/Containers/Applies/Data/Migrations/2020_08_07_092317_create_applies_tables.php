<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAppliesTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('applies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('seeker_id');
            $table->unsignedInteger('company_id');
            $table->unsignedInteger('jobpost_id');
            $table->string('confirmed');
            $table->timestamps();
            $table->foreign('seeker_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('company_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('jobpost_id')->references('id')->on('jobposts')->onDelete('cascade');
            // $table->softDeletes();

        });
    }
     
    
    public function down()
    {
        Schema::dropIfExists('applies');
        
    }
}
