<x-admin-layout>
    <x-admin-header>
        <x-admin-header-text>
            {{ __('Edit Permission') }}
        </x-admin-header-text>
        @can('permission_access')
            <x-admin-header-link href="{{route('admin.permissions.index')}}">
                {{ __('List Permission') }}
            </x-admin-header-link>
        @endcan
    </x-admin-header>
    <x-splade-form method="put" :default="$permission" :action="route('admin.permissions.update',$permission)"
                   class="space-y-5" unguarded>
        <x-splade-input name="title" label="Title"/>
        <x-splade-submit class="bg-gold-700 hover:bg-gold-900">
            Update
        </x-splade-submit>
    </x-splade-form>
</x-admin-layout>
