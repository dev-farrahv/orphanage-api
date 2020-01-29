<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ElderTakenMed extends Model
{
    //use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'elder_id',
        'medicine_id',
        'medicine_desc',
        'qty',
        'assigned_staff_id',
        'assigned_staff_name',
        'status',
        'created_by',
        'updated_by',
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
