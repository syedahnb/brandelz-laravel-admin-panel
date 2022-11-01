<x-splade-toggle data="isSidebar, isProfile">
    <div>
        <x-splade-transition show="isSidebar">
            <div class="relative z-40 md:hidden" role="dialog" aria-modal="true">

                <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

                <div class="fixed inset-0 z-40 flex">

                    <div class="relative flex w-full max-w-xs flex-1 flex-col bg-gold-700 pt-5 pb-4">

                        <div class="absolute top-0 right-0 -mr-12 pt-2">
                            <button
                                @click.prevent="toggle('isSidebar',false)"
                                type="button"
                                class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                                <span class="sr-only">Close sidebar</span>
                                <!-- Heroicon name: outline/x-mark -->
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>

                        <div class="flex flex-shrink-0 items-center px-4">
                            <x-application-logo class="h-8 w-auto" alt="Company Name"/>

                        </div>
                        <div class="mt-5 h-0 flex-1 overflow-y-auto">
                            @include('admin.layouts.sidebar-navigation')

                        </div>

                    </div>

                    <div class="w-14 flex-shrink-0" aria-hidden="true">
                        <!-- Dummy element to force sidebar to shrink to fit close icon -->
                    </div>

                </div>
            </div>
        </x-splade-transition>
        <div class="hidden md:fixed md:inset-y-0 md:flex md:w-64 md:flex-col">

            <div class="flex min-h-0 flex-1 flex-col bg-gold-800">
                <div class="flex h-16 flex-shrink-0 items-center bg-gold-900 px-4">
                    {{--                    <x-application-logo class="h-8 w-auto" alt="Company Name"/>--}}
                    <h4 class="font-semibold text-white h-8 w-auto">Brandelz</h4>
                </div>
                <div class=" flex flex-1 flex-col overflow-y-auto">
                    @include('admin.layouts.sidebar-navigation')
                </div>
            </div>
        </div>
        <div class="flex flex-1 flex-col md:pl-64">
            <div class="sticky top-0 z-10 flex h-16 flex-shrink-0 bg-white shadow">
                <button
                    @click.prevent="toggle('isSidebar',true)"
                    type="button"
                    class="border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gold-500 md:hidden">
                    <span class="sr-only">Open sidebar</span>
                    <!-- Heroicon name: outline/bars-3-bottom-left -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12"/>
                    </svg>
                </button>
                @include('admin.layouts.top-navigation')
            </div>
            <main>
                <div class="py-6">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                        {{$slot}}
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-splade-toggle>
