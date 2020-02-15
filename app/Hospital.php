<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hospital_name',
        'address',
        'hospital_contact_no',
        'contact_doctors',
        'about',
        'service_offer',
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
        'contact_doctors' => 'array',
        'service_offer' => 'array',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
