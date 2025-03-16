<?php

namespace App\Services;

use App\Models\Driver;
use App\Repositories\DriverRepository;
use App\Repositories\VehicleRepository;

class DriverService
{

    public function __construct(
        private DriverRepository  $driverRepository,
        private VehicleRepository $vehicleRepository,
    )
    {

    }

    public function getAll()
    {
        return $this->driverRepository->all();
    }

    public function create(array $data)
    {
        return $this->driverRepository->create($data);
    }

    public function assignVehicle(Driver $driver, $vehicleId)
    {
        $vehicle = $this->vehicleRepository->find($vehicleId);
        return $this->vehicleRepository->assignDriver($driver->id, $vehicle);
    }

}
