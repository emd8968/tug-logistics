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
        $users = $this->vehicleService->getAll();

        return VehicleResource::collection($users);
    }

    public function store(VehicleStoreRequest $request)
    {
        $data = $request->validated();
        $user = $this->vehicleService->create($data);
        return VehicleResource::make($user);
    }


}
