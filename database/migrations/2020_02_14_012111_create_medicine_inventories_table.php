<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicineInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_inventories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('medicine_name')->nullable();
            $table->string('type_of_medicine')->nullable();
            $table->string('medicine_restock')->nullable();
            $table->string('medicine_dispense')->nullable();
            $table->string('remaining_stock')->nullable();
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
        Schema::dropIfExists('medicine_inventories');
    }
}
