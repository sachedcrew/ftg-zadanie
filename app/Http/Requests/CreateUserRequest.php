<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:15',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'role' => 'in:user,Redaktor,Admin', 
        ];
    }
}
