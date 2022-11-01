<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Permission\StorePermissionRequest;
use App\Http\Requests\Permission\UpdatePermissionRequest;
use App\Models\Permission;
use App\Tables\Permissions;
use Illuminate\Http\Response;
use ProtoneMedia\Splade\Facades\Splade;
use ProtoneMedia\Splade\Facades\Toast;

class PermissionController extends Controller
{

    public function index()
    {

        abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.permission.index', [
            'permissions' => Permissions::class,
        ]);
    }

    public function create()
    {
        abort_if(Gate::denies('permission_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.permission.create');
    }

    public function store(StorePermissionRequest $request)
    {

        $permission = $request->safe()->only(['title']);


        Permission::create($permission)->save();
        Splade::toast('Permission Created!')->autoDismiss(5);
        return redirect()->route('admin.permissions.index');
    }


    public function show(Permission $permission)
    {

        abort_if(Gate::denies('permission_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.permission.show', [
            'permission' => $permission
        ]);
    }


    public function edit(Permission $permission)
    {
        abort_if(Gate::denies('permission_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.permission.edit', [
            'permission' => $permission
        ]);
    }

    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        $request->validated();

        $data = $request->safe()->only([
            'title'
        ]);

        $permission->fill($data)->update();
        Splade::toast('Permission Updated!')->autoDismiss(5);
        return redirect()->route('admin.permissions.index');

    }

    public function destroy(Permission $permission)
    {
        abort_if(Gate::denies('permission_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $permission->delete();
        Toast::title('Deleted')
            ->message('Permission Deleted !' . $permission->name)
            ->danger()
            ->autoDismiss(5);
        return redirect()->route('admin.permissions.index');
    }
}
