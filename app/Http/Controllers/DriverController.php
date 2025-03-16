<?php

namespace App\Http\Controllers;

use App\Http\Requests\DriverStoreRequest;
use App\Http\Resources\DriverResource;
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
        $users = $this->driverService->getAll();

        return DriverResource::collection($users);
    }

    public function store(DriverStoreRequest $request)
    {
        $data = $request->validated();
        $user = $this->driverService->create($data);
        return DriverResource::make($user);
    }


}
