<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginValidationRequest extends FormRequest
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
            'email' => 'required|string|email',
            'password' => 'required|min:4'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Please enter a email address',
            'email.string' => 'Please enter a valid email address',
            'email.email' => 'Please enter a valid email address',
            'password.required' => 'Please enter a password',
            'password.min' => 'Password must be at least 4 characters',
        ];
    }
}
