<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrederRequest extends FormRequest
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
            'nameproduct' => ['required', 'string'],
            'selectcolor' => ['required', 'string'],
            'num' => ['required', 'integer'],
            'paymenttype' => ['required', 'string'],
            'location' => ['required', 'string'],
            'codeposti' => ['required', 'integer'],
            'transferee' => ['required', 'string'],
            'customername' => ['required', 'string'],
            'mobile' => ['required', 'string'],
            'homephonenumber' => ['required', 'string'],
        ];
    }
}
