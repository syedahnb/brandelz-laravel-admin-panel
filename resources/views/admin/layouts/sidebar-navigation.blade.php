<SidebarNavigation>
    <NavigationItem
        name="Dashboard"
        href="{{route('admin.dashboard')}}"
        :current="{{ request()->routeIs('admin.dashboard') ? "true" : "false" }}"
        icon=HomeIcon
        :has-children="false"/>
    @can('user_management_access')
        <NavigationItem
            icon="UsersIcon"
            name="User Management"
            href="#"
            :current="{{ request()->routeIs('admin.users.*') || request()->routeIs('admin.roles.*') || request()->routeIs('admin.permissions.*') || request()->routeIs('admin.audit-logs.*') ? "true" : "false" }}"
            :has-children="true">
            @can('user_access')
                <NavigationItemChild name="Users"
                                     href="{{route('admin.users.index')}}"
                                     :current="{{request()->routeIs('admin.users.*') ? "true":"false"}}"/>
            @endcan
            @can('role_access')

                <NavigationItemChild name="Roles"
                                     href="{{route('admin.roles.index')}}"
                                     :current="{{request()->routeIs('admin.roles.*') ?"true":"false"}}"/>
            @endcan
            @can('permission_access')
                <NavigationItemChild name="Permissions"
                                     href="{{route('admin.permissions.index')}}"
                                     :current="{{request()->routeIs('admin.permissions.*') ?"true":"false"}}"/>
            @endcan
            @can('audit_log_access')

                <NavigationItemChild name="Audit Logs"
                                     href="{{route('admin.audit-logs.index')}}"
                                     :current="{{request()->routeIs('admin.audit-logs.*') ?"true":"false"}}"/>
            @endcan
        </NavigationItem>
    @endcan
</SidebarNavigation>
