<?php

namespace App\Http\Controllers;

use App\Http\Requests\DriverAssignVehicleRequest;
use App\Http\Requests\DriverStoreRequest;
use App\Http\Resources\DriverResource;
use App\Http\Resources\VehicleResource;
use App\Models\Driver;
use App\Services\DriverService;

class DriverController extends Controller
{
    public function __construct(
        private readonly DriverService $driverService
    )
    {
    }

    public function index()
    {
        $drivers = $this->driverService->getAll();

        return DriverResource::collection($drivers);
    }

    public function store(DriverStoreRequest $request)
    {
        $data = $request->validated();
        $driver = $this->driverService->create($data);
        return DriverResource::make($driver);
    }

    public function assignVehicle(Driver $driver, DriverAssignVehicleRequest $request)
    {
        $data = $request->validated();
        $vehicle = $this->driverService->assignVehicle($driver, $data['vehicle_id']);
        return VehicleResource::make($vehicle);
    }


}
