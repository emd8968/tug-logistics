<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'plate_number' => [
                'required',
                'string',
                'max:255',
            ],
            'model' => [
                'required',
                'string',
                'max:255',
            ],
            'brand' => [
                'string',
                'max:255',
            ],
            'year' => [
                'string',
                'max:255',
            ],
            'driver_id' => [
                'nullable',
                'exists:drivers,id',
            ]
        ];
    }
}
