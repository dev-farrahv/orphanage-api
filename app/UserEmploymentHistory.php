<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEmploymentHistory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company',
        'position',
        'duties',
        'date_from',
        'date_to',
        'reference', 
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
