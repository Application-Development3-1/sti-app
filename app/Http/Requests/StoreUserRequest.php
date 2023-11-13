<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'studentID' => 'required|unique:users',
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name'=>'required',
            'course'=>'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ];
    }
}
