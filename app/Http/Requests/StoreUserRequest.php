<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreUserRequest extends FormRequest
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
            'password' => [
                'required', 'string',
            ],
            'role' => [
                'required', 'string',
            ],
        ];
    }

    // 目前設計是只要能登入後台就能新增/修改/刪除task，所以並沒有針對task定義Gate驗證規則，一律登入(true)即可操作
    public function authorize()
    {
        return true;
    }
}
