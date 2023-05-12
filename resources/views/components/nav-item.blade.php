<li>
    <Link href="{{$href}}"
          class="{{ $isActive ? 'bg-gray-800 text-white' : 'text-gray-400' }}  hover:text-white hover:bg-gray-800 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">


    {{ $slot }}
    </Link>
</li>
