<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class StoreRoleRequest extends FormRequest
{

    public function authorize()
    {
        abort_if(
            Gate::denies('role_create'),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden'
        );

        return true;
    }


    public function rules()
    {
        return [
            'title' => 'required|unique:roles,title',
            'permissions' => 'required',
        ];
    }
}
