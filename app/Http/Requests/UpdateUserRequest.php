<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => [
                'required', 'string',
            ],
            'email' => [
                'required', 'string',
            ],
            'role' => [
                'required', 'string',
            ],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
