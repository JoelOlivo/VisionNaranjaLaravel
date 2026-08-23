<?php

namespace App\Http\Requests\Users;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserEntrepreneurRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // User
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8'],

            // Entrepreneur
            'fullName' => ['required', 'string', 'max:255'],
            'nationalId' => ['nullable', 'string', 'max:20'],
            'cellPhoneNumber' => ['required', 'string', 'max:20'],
            'profilePhotoKey' => ['nullable', 'string', 'max:255']
        ];
    }
}
