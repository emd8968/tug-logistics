<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleStoreRequest;
use App\Http\Resources\VehicleResource;
use App\Services\VehicleService;

class VehicleController extends Controller
{
    public function __construct(
        private readonly VehicleService $vehicleService
    )
    {
    }

    public function index()
    {
        $vehicles = $this->vehicleService->getAll();

        return VehicleResource::collection($vehicles);
    }

    public function store(VehicleStoreRequest $request)
    {
        $data = $request->validated();
        $vehicle = $this->vehicleService->create($data);
        return VehicleResource::make($vehicle);
    }


}
