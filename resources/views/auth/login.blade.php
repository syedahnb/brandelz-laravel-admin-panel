<x-guest-layout>
    <x-auth-card>
        <!-- Session Status -->
        <x-slot:logo>
            <Link href="{{route('login')}}">

            <x-application-logo />

            </Link>
        </x-slot:logo>
        <x-auth-session-status class="mb-4" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" />

        <x-splade-form action="{{ route('login') }}" class="space-y-4" reset-on-errors >


            <x-splade-input  id="email" type="email" name="email" :label="__('Email')"   />

            <x-splade-input  id="password" type="password" name="password" :label="__('Password')" autocomplete="current-password" />
            <x-splade-checkbox id="remember_me" name="remember" :label="__('Remember me')" />

            <div class="flex items-center justify-end">
                @if (Route::has('password.request'))
                    <Link class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </Link>
                @endif

                <x-splade-submit :spinner="false" class="ml-3 bg-gray-800 text-white" :label="__('Log in')" />
            </div>
        </x-splade-form>
    </x-auth-card>
</x-guest-layout>
