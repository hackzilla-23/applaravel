<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonneFormRequest extends FormRequest
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
            //la troisieme methode validation
            'nom' => 'required',
            'prenom' => 'required',
            'age' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm-password' => 'required|confirmed:password',
            // 'nom' => 'required',
            // 'prenom' => 'required|alpha|min:2|max:50',
            // 'age' => 'required|integer|between:18,150',
            // 'email' => 'required|email|unique:personnes,email|max:255',
            // 'password' => 'required',
            // 'confirm-password' => 'required|confirmed:password',
            // 'password' => 'required|string|min:8|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
            // 'confirm-password' => 'required|string|min:8|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/|confirmed:password',
        ];
    }
}
