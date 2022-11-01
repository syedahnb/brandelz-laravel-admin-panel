<?php

namespace App\Http\Requests\Permission;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdatePermissionRequest extends FormRequest
{

    public function authorize()
    {
        abort_if(Gate::denies('permission_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'title' => [
                'required',
                Rule::unique('permissions','title')->ignore($this->id)

            ],
        ];
    }

    public function messages()
    {
        return [
            'title' => 'The Permission Rule is already created or assigned.',

        ];
    }
}
