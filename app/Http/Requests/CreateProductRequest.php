<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'brandname' => ['required', 'string'],
            'productsname' => ['required', 'string'],
            'company' => ['required', 'string'],
            'price' => ['required', 'integer'],
            'memory' => ['required', 'string'],
            'operatingsystem' => ['required', 'string'],
            'color' => ['required', 'string'],
            'inventorystatus' => ['required', 'string'],
            'description' => ['required', 'string'],
        ];
    }
}
