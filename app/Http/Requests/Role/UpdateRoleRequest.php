<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateRoleRequest extends FormRequest
{

    public function authorize()
    {
        abort_if(Gate::denies('role_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }


    public function rules()
    {
        return [
            'title' => ['required', Rule::unique('roles', 'title')->ignore($this->id)],
            'permissions' => 'required',
        ];
    }
}
