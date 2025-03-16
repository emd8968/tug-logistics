<?php

use \Tests\TestCase;

class CompleteTest extends TestCase
{
    protected static $driver = null;
    protected static $vehicle = null;

    public static function setUpBeforeClass(): void
    {
        echo shell_exec('php artisan migrate:fresh');
    }

    public function test_store_driver(): void
    {
        $driverService = app()->make(\App\Services\DriverService::class);

        self::$driver = $driverService->create([
            'name' => 'emad.asgari',
            'license_number' => 'ab-123',
            'phone_number' => '+989120194750'
        ]);

        $this->assertDatabaseHas('drivers', [
            'name' => 'emad.asgari',
            'license_number' => 'ab-123',
            'phone_number' => '+989120194750'
        ]);
    }

    public function test_store_vehicle(): void
    {
        $vehicleService = app()->make(\App\Services\VehicleService::class);

        self::$vehicle = $vehicleService->create([
            'plate_number' => 'IR-11',
            'model' => 'FH-12',
            'brand' => 'VOLVO',
            'year' => '2010'
        ]);

        $this->assertDatabaseHas('vehicles', [
            'plate_number' => 'IR-11',
            'model' => 'FH-12',
            'brand' => 'VOLVO',
            'year' => '2010'
        ]);
    }

    public function test_assign_vehicle(): void
    {
        $driverService = app()->make(\App\Services\DriverService::class);

        $driverService->assignVehicle(self::$driver, self::$vehicle->id);

        $this->assertDatabaseHas('vehicles', [
            'id' => self::$vehicle->id,
            'driver_id' => self::$driver->id
        ]);
    }
}
