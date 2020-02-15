<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accomplishments extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date',
        'task_description',
        'problems_encountered',
        'remarks',
        'time_in',
        'time_out',
        'submitted_by',
        'archived',
        'created_by',
        'updated_by',
    ];



    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'submitted_by' => 'array',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
