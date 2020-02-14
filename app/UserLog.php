<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'staff_id',
        'staff_name',
        'time_in',
        'time_out',
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
