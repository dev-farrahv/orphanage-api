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
        'type',
        'illness',
        'description',
        'assigned_doctor_id',
        'assigned_doctor_name',
        'duration_from',
        'duration_to',
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
