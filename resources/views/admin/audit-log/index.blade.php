<x-admin-layout>
    <x-admin-header>
        <x-admin-header-text>
            {{ __('List Audit Log') }}
        </x-admin-header-text>
    </x-admin-header>

    <x-splade-table :for="$auditLogs" search-debounce="1000" striped>
        <x-splade-cell actions as="$auditLog">
            <div class="inline-flex space-x-6">
                @can('audit_log_show')
                    <x-action-show-button
                        slideover
                        href="{{route('admin.audit-logs.show',$auditLog->id)}}"
                    />
                @endcan
            </div>
        </x-splade-cell>

    </x-splade-table>
</x-admin-layout>
