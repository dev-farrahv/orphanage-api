<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    //use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'file_name',
        'directtory',
        'date_uploaded',
        'document_type',
        'file_type',
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
