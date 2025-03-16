<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Driver extends Model
{
    protected $fillable = [
        'name',
        'license_number',
        'phone_number'
    ];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
