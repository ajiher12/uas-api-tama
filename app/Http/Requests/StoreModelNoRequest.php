<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreModelNoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'id' => 'required|integer',
            'product_id' => 'required|integer',
            'serial_no' => 'required|string',
            'warranty_date' => 'required|string',
            'warranty_duration' => 'required|string',
            'used' => 'required|boolean',
        ];

        // ['id', 'product_id', 'serial_no', 'prod_date', 'warranty_date', 'warranty_duration', 'used']
    }
}
