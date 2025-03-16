<?php

namespace App\Services;

use App\Repositories\DriverRepository;

class DriverService
{

    public function __construct(
        private DriverRepository $driverRepository
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

}
