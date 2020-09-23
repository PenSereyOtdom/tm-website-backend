<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContractformTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('contractforms', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('overview');
            $table->string('management_of_person_info');
            $table->string('purpose_of_use');
            $table->string('prohibition');
            $table->string('personal_info');
            $table->string('inquiry');
            $table->string('compliance');
            $table->string('contact_us');
            $table->string('status_agree');
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
        Schema::dropIfExists('contractforms');
    }
}
