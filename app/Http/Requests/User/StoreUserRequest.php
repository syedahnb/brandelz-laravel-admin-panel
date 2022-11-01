<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rules;

class StoreUserRequest extends FormRequest
{

    public function authorize()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }


    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'unique:users,email',
            'password' => ['nullable', Rules\Password::defaults()],
            'role_id' => 'nullable|integer',
        ];
    }
}
