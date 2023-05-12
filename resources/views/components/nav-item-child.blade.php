<li>
    <div>
        <button @click.prevent="toggle('{!! $toggler !!}')" class="{{ $isActive ? 'bg-gray-800 text-white' : 'text-gray-400' }} hover:text-white hover:bg-gray-800 flex items-center w-full text-left rounded-md p-2 gap-x-3 text-sm leading-6 font-semibold" aria-controls="sub-menu-user" aria-expanded="false">
            {!! $svg !!}
                {{ $title }}
            <svg  class="{{ $isActive  ? 'rotate-90 text-white' : 'text-gray-400' }} ml-auto h-5 w-5 shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd"/>
            </svg>
        </button>

        <div v-if="{{$toggler}}">
            <div v-show="{{$isActive}}">
                <ul class="mt-1 px-2" id="sub-menu-user">
                    {{ $slot }}
                </ul>
            </div>
        </div>
    </div>
</li>
