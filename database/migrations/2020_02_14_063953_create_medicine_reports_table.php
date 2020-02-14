<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicineReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('medicine_id')->nullable();
            $table->string('medicine_description')->nullable();
            $table->string('type_of_medicine')->nullable();
            $table->string('qty')->nullable();
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
        Schema::dropIfExists('medicine_reports');
    }
}
