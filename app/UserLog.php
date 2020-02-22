<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'time',
        'action',
        'archived',
        'role',
        'name',
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
