<?php

namespace App;
use App\Elder;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    //use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'guest_name',
        'contact_no',
        'address',
        'relationship_id',
        'relationship_description',
        'elder_id',
        'elder_name',
        'time_in',
        'time_out',
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

    /**
     * The guest elder visited belongs to elders
     *
     * @return belongsTo
     */
    public function getElderVisited()
    {
        return $this->belongsTo(Elder::class, 'elder_id');
    }
}
