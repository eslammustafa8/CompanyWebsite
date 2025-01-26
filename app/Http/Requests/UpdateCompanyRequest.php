<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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
        'image' => 'required|mimes:jpg,jpeg,png|max:2048',
          'name' => 'nullable|string|max:255',
        ];
    }
    public function attributes(): array
    {
        return [
            'image' => __('keywords.image'),
            'Company_name' => __('keywords.Company_name'),
    
        ];
    }
}
