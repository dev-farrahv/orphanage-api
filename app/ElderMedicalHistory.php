<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ElderMedicalHistory extends Model
{
    //use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'elder_id',
        'present_illness_id',
        'present_illness_description',
        'past_illness_id',
        'past_illness_description',
        'family_history_illness_id',
        'family_history_description',
        'assigned_doctor_id',
        'assigned_doctor_name',
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
