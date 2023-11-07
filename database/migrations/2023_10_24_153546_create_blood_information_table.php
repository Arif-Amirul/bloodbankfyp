<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('donor_id');
            $table->string('blood_id');
            $table->string('date');
            $table->string('white_blood_cells');
            $table->string('neutrophils');
            $table->string('red_blood_cells');
            $table->string('haemoglobin');
            $table->string('hematrocrit');
            $table->string('mcv');
            $table->string('platelets');
            $table->string('cd4_cd8');
            $table->string('hiv_test');
            $table->string('glicaemia');
            $table->string('transferrin');
            $table->string('ferritim');
            $table->string('sodium');
            $table->string('potassium');
            $table->string('calcium');
            $table->string('plasma_proteins');
            $table->string('albumin');
            $table->string('prealbumin');
            $table->string('gamma_globulins');
            $table->string('alt');
            $table->string('gamma_gt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_information');
    }
};
