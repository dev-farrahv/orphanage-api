<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicineReport extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'medicine_id',
        'medicine_description',
        'type_of_medicine',
        'qty',
        'status',
        'archived',
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
