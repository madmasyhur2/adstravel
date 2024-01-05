<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoretransactionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'user_id' => ['required', 'numeric'],
                'travel_id' => ['required', 'numeric'],
                'total_price' => ['required', 'numeric'],
                'name' => 'required|string|max:255',
                'phone_number' => 'required|string|max:15',
                'pax' => 'required|numeric',
                'city' => 'required|string|max:100'
        ];
    }
}
