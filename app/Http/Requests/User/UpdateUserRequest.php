<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{

    public function authorize()
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }


    public function rules()
    {
        return [
            'email' => ['required', 'email', Rule::unique('users')->ignore($this->id)],
            'password' => 'nullable',
            'name' => 'nullable|string',
            'role_id' => 'nullable|numeric',
            'status' => 'boolean',
        ];
    }
}
