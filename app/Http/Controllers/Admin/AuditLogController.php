<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AuditLog;
use App\Tables\AuditLogs;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class AuditLogController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('audit_log_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $auditLogs = AuditLogs::class;

        return view('admin.audit-log.index', ['auditLogs' => $auditLogs]);
    }

    public function show(AuditLog $auditLog)
    {
        abort_if(Gate::denies('audit_log_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.audit-log.show', compact('auditLog'));
    }
}
