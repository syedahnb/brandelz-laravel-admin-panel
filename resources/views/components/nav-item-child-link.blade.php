<li>
    <a href="{{$href}}"
       class="{{ request()->routeIs('admin.users.*') ? 'bg-gray-800 text-white' : 'text-gray-400' }} hover:text-white hover:bg-gray-800 block rounded-md py-2 pr-2 pl-9 text-sm leading-6">{{$title}}</a>
</li>
