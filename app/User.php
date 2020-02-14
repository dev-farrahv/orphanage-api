<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'username',
        'password',
        'nick_name',
        'gender',
        'age',
        'birth_date',
        'birth_place',
        'sabbath',
        'provincial_address',
        'civil_status',
        'nationality',
        'address',
        'date_hired',
        'oi_phil_health',
        'oi_sss',
        'oi_umid',
        'oi_pagibig',
        'role',
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
