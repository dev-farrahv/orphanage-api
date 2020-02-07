<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elder extends Model
{
    //use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'nickname',
        'age',
        'birth_place',
        'provincial_address',
        'birth_date',
        'sabbath',
        'civil_status',
        'date_stay_in_orphanage',
        'bed_no',
        'cp_first_name',
        'cp_middle_name',
        'cp_surname',
        'cp_contact_no',
        'cp_relationship',
        'cp_provincial_add',
        'oi_phil_health',
        'oi_sss_id',
        'oi_senior_citizen_id',
        'oi_pagibig',
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
