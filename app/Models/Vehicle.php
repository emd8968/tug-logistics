<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Vehicle extends Model
{
    protected $fillable = [
        'plate_number',
        'model',
        'brand',
        'year',
        'driver_id'
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
