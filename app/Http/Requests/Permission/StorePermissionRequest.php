<?php

namespace App\Http\Requests\Permission;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class StorePermissionRequest extends FormRequest
{

    public function authorize()
    {
        abort_if(Gate::denies('permission_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }


    public function rules()
    {
        return [
            'title'=>'required'
        ];
    }
}
