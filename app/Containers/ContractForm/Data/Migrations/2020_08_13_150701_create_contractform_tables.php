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
            $table->unsignedInteger('applies_id');
            $table->longText('overview');
            $table->longText('management_of_person_info');
            $table->longText('purpose_of_use');
            $table->longText('prohibition');
            $table->longText('personal_info');
            $table->longText('inquiry');
            $table->longText('compliance');
            $table->longText('contact_us');
            $table->longText('status_agree');
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
        Schema::dropIfExists('contractforms');
    }
}
