<?php

namespace App\Tables;

use App\Models\AuditLog;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Maatwebsite\Excel\Excel;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;

class AuditLogs extends AbstractTable
{
    public function authorize(Request $request)
    {
        abort_if(Gate::denies('audit_log_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function for()
    {
        return AuditLog::query();
    }


    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['id','description','subject_type','host','created_at'])
            ->column('id', sortable: true)
            ->column('description', label: 'Description', sortable: true)
 //           ->column('subject_id', label: 'Subject Id', sortable: true)
            ->column('subject_type', label: 'Subject Type', sortable: true)
  //          ->column('user_id', label: 'User ID', sortable: true)
//            ->column('properties', label: 'Attributes', sortable: true)
            ->column('host', label: 'IP')
            ->column('created_at', 'Event Time', sortable: true)
            ->column('actions', 'Actions')

            ->export(  label: 'PDF xml',
                filename: 'projects.xml',
                type: Excel::XML)

            ->paginate(15);
    }
}



