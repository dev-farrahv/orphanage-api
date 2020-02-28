<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElderMedicalHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elder_medical_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('elder_id');
            $table->string('type');
            $table->string('description')->nullable();
            $table->string('illness')->nullable();
            $table->integer('assigned_doctor_id')->nullable();
            $table->string('assigned_doctor_name')->nullable();
            $table->string('duration_from')->nullable();
            $table->string('duration_to')->nullable();
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
        Schema::dropIfExists('elder_medical_histories');
    }
}
