<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'elder_id',
        'elder_name',
        'medicine_id',
        'medicine_description',
        'qty',
        'time',
        'date',
        'status',
        'task_description',
        'task_owner_id',
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
