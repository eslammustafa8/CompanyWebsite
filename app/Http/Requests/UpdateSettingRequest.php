<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
        'email' => 'required|email|max:150',
        'facebook' => 'nullable|url|max:150',
        'youtube' => 'nullable|url|max:150',
        'linkedin' => 'nullable|url|max:150',
        'whatsapp' => 'nullable|URL|max:150',
            
        ];
    }
    public function attributes(): array
    {
        return [
    'name' =>__('keywords.name'),
   'email' =>__('keywords.email'),

'facebook' =>__('keywords.facebook'),
 'youtube' =>__('keywords.youtube'),
'linkedin' =>__('keywords.linkedin'),
'whatsapp' =>__('keywords.whatsapp'),            
    
        ];
    }
}
