<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('nickname');
            $table->integer('age')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('provincial_address')->nullable();
            $table->dateTime('birth_date')->nullable();
            $table->dateTime('sabbath')->nullable();
            $table->tinyInteger('civil_status')->nullable(); // 1=single, 2=married
            $table->dateTime('date_stay_in_orphanage')->nullable();
            $table->integer('bed_no')->nullable();
            $table->string('cp_first_name')->nullable();
            $table->string('cp_middle_name')->nullable();
            $table->string('cp_surname')->nullable();
            $table->string('cp_contact_no')->nullable();
            $table->string('cp_relationship')->nullable();
            $table->string('cp_provincial_add')->nullable();
            $table->string('oi_phil_health')->nullable();
            $table->string('oi_sss_id')->nullable();
            $table->string('oi_senior_citizen_id')->nullable();
            $table->string('oi_pagibig')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('elders');
    }
}
