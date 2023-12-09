<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLostItem extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'max:12|required',
            'what' => 'max:500|unique:lost_item',
            'when' => 'max:500|unique:lost_item',
            'where' => 'max:500|unique:lost_item',
            'additional' => 'max:500|unique:lost_item',
            'image' => 'max:500',
            
        ];
    }
}
