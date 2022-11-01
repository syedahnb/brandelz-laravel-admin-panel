<?php

namespace App\Tables;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;

class Users extends AbstractTable
{


    public function authorize(Request $request)
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function for()
    {
        return User::with('roles')->latest();
    }


    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['id'])
            ->column('id', sortable: true)
            ->column('name', sortable: true)
            ->column('email', label: 'Email', sortable: true)
            ->column('roles.title', 'Role', sortable: true)
            ->column('status', 'Status', sortable: true)
            ->column(label: 'Actions')
            ->withGlobalSearch()
            ->bulkAction(
                'Bulk Delete',
                confirm: true,
                confirmText: 'Are You Sure',
                confirmButton: 'Delete!',
                cancelButton: 'Cancel',
                each: function (User $user) {
                    $user->delete();
                }
            )
            ->export();
    }
}
