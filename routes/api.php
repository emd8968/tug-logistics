<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DriverController;
use \App\Http\Controllers\VehicleController;

Route::resource('drivers', DriverController::class)->only('index', 'store');
Route::resource('vehicles', VehicleController::class)->only('index', 'store');
