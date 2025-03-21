<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
{

    public static $wrap = null;

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'plate_number' => $this->plate_number,
            'model' => $this->model,
            'brand' => $this->brand,
            'year' => $this->year,
            'driver' => $this->driver ? DriverResource::make($this->driver) : $this->driver
        ];
    }
}
