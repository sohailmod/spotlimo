<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VehicleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                Rule::unique('vehicle_types')->ignore($this->id),
            ],
            'image' => 'file|mimes:jpeg,png,jpg,avif,webp|max:2048',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vehicle type name filed is required',
            'name.unique' => 'Vehicle type name already exists',

        ];
    }
}
