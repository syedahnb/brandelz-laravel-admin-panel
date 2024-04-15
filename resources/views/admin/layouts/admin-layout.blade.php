<x-splade-toggle data="isSidebar, isProfile">
    <x-splade-transition show="isSidebar">
        <div class="relative z-50 lg:hidden" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-900/80"></div>
            <div class="fixed inset-0 flex">
                <div class="relative mr-16 flex w-full max-w-xs flex-1">
                    <div class="absolute left-full top-0 flex w-16 justify-center pt-5">
                        <button @click.prevent="toggle('isSidebar',false)" class="-m-2.5 p-2.5">
                            <span class="sr-only">Close sidebar</span>
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                    <div
                        class="flex grow flex-col gap-y-5 overflow-y-auto bg-gray-900 px-6 pb-4 ring-1 ring-white/10">
                        <div class="flex h-16 shrink-0 items-center">
                            <img class="h-8 w-auto"
                                 src="https://brandelz.com/wp-content/uploads/2022/12/Brandelz-logo.png"
                                 alt="Your Company">
                        </div>
                        @include('admin.layouts.sidebar-navigation')
                    </div>
                </div>
            </div>
        </div>
    </x-splade-transition>
    <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
        <div class="flex grow flex-col gap-y-5  overflow-y-auto bg-gray-900 px-6 pb-4">
            <div class="flex h-16 shrink-0 items-center">
                <x-application-logo />

            </div>
            @include('admin.layouts.sidebar-navigation')
        </div>
    </div>
    <div class="lg:pl-72">
        <div
            class="sticky top-0 z-40 flex h-16 lg:justify-end  justify-between gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
            <button @click.prevent="toggle('isSidebar',true)" class="-m-2.5 p-2.5 text-gray-800 lg:hidden">
                <span class="sr-only">Open sidebar</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                     aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                </svg>
            </button>
            <div class="flex justify-end  items-center gap-x-4 lg:gap-x-6">
                <div class="relative">
                    <button @click.prevent="toggle('isProfile')"
                            class="-m-1.5 flex items-center p-1.5"
                            id="user-menu-button"
                            aria-expanded="false" aria-haspopup="true">
                        <span class="sr-only">Open user menu</span>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="h-8 w-8 rounded-full bg-gray-50">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                        </svg>
                        <span class="hidden lg:flex lg:items-center">
                                    <span class="ml-4 text-sm font-semibold leading-6 text-gray-900"
                                          aria-hidden="true">{{auth()->user()->name ?? ''}}</span>
                            <svg class="ml-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                              clip-rule="evenodd"/>
                            </svg>
                        </span>
                    </button>
                    <x-splade-transition show="isProfile">

                        <div
                            class="absolute right-0 z-10 mt-2.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                            tabindex="-1">
                            <a href="{{route('profile.show')}}" class="block px-3 py-1 text-sm leading-6 text-gray-900"
                               role="menuitem"
                               tabindex="-1" id="user-menu-item-0">Your profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-responsive-nav-link as="a" :href="route('logout')"
                                                       class="block px-3 py-1 text-sm leading-6 text-gray-900"
                                                       onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>

                            </form>
                        </div>
                    </x-splade-transition>
                </div>
            </div>
        </div>
        <main class="py-10">
            <div class="px-4 sm:px-6 lg:px-8">
                {{$slot}}
            </div>
        </main>
    </div>
</x-splade-toggle>
