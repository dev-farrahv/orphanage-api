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
            $table->string('medicine_name')->nullable();
            $table->string('medicine_type')->nullable();
            $table->string('action')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('remaining_stock')->nullable();
            $table->json('staff')->nullable();
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
