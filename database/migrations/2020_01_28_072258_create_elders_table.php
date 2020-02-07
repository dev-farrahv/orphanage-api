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
            $table->string('nickname')->nullable();
            $table->integer('age')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('provincial_address')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('sabbath')->nullable();
            $table->string('civil_status')->nullable(); // 1=single, 2=married, 3=widowed
            $table->string('gender')->nullable(); // 1=male, 2=female
            $table->string('date_stay_in_orphanage')->nullable();
            $table->string('bed_no')->nullable();
            $table->string('references')->nullable();
            $table->string('cp_nationality')->nullable();
            $table->string('cp_first_name')->nullable();
            $table->string('cp_middle_name')->nullable();
            $table->string('cp_surname')->nullable();
            $table->string('cp_contact_no')->nullable();
            $table->string('cp_relationship')->nullable();
            $table->string('cp_provincial_add')->nullable();
            $table->string('cp_work')->nullable();
            $table->string('oi_phil_health')->nullable();
            $table->string('oi_sss_id')->nullable();
            $table->string('oi_senior_citizen_id')->nullable();
            $table->string('oi_pagibig')->nullable();
            $table->string('status')->nullable();
            $table->boolean('archived')->default(false);
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
