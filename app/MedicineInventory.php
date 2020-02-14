<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicineInventory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'medicine_name',
        'type_of_medicine',
        'medicine_restock',
        'medicine_dispense',
        'remaining_stock',
        'created_by',
        'updated_by' 
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
