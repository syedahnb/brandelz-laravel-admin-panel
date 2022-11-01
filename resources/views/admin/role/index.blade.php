<x-admin-layout>
    <x-admin-header>
        <x-admin-header-text>
            {{ __('List Role') }}
        </x-admin-header-text>
        <x-admin-header-link href="{{route('admin.roles.create')}}">
            {{ __('Create Role') }}
        </x-admin-header-link>
    </x-admin-header>
    <x-splade-table :for="$roles" search-debounce="1000">
        <x-splade-cell actions as="$role">
            <div class="inline-flex space-x-2">
                @can('role_delete')
                    <x-action-delete-button
                        confirm="Delete Role"
                        confirm-text="Are you sure you want to delete Role: {{$role->title}}?"
                        :action="route('admin.roles.destroy',$role->id)"
                    />
                @endcan
                @can('role_show')
                    <x-action-show-button slideover href="{{route('admin.roles.show',$role->id)}}"/>
                @endcan
                @can('role_edit')
                    <x-action-edit-button href="{{route('admin.roles.edit',$role->id)}}"/>
                @endcan
            </div>
        </x-splade-cell>
    </x-splade-table>
</x-admin-layout>
