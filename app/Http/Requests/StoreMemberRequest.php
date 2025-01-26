<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
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
        'name' => 'required|string|max:150',
        'position' => 'required|string|max:150',
                'description' => 'required|string|max:400',

        'image' => 'required|mimes:jpeg,jpg,png,gif|max:4000',
         'facebook' => 'required|string|max:400',
         'twitter' => 'nullable|string|max:400',
         'whatsapp' => 'required|string|max:400',
         'linkedin' => 'nullable|string|max:400',
 
        ];
    }
    public function attributes(): array
    {
        return [
            'name' => __('keywords.name'),
            'linkedin' => __('keywords.linkedin'),
            'whatsapp' => __('keywords.whatsapp'),
            'facebook' => __('keywords.facebook'),
            'description' => __('keywords.description'),
            'image' => __('keywords.image'),
            'position' => __('keywords.position'),
               
        ];
    }
}
