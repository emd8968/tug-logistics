<?php

namespace App\Services;

use App\Repositories\VehicleRepository;

class VehicleService
{
    public function __construct(
        private readonly VehicleRepository $vehicleRepository
    )
    {

    }

    public function getAll()
    {
        return $this->vehicleRepository->all();
    }

    public function create(array $data)
    {
        return $this->vehicleRepository->create($data);
    }
}
