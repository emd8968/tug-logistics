<?php

namespace App\Repositories;

use App\Models\Vehicle;

class VehicleRepository extends BaseRepository
{
    protected string $model = Vehicle::class;

    public function assignDriver($driverId, $vehicle)
    {
        $vehicle->driver_id = $driverId;
        $vehicle->save();
        return $vehicle;
    }

}
