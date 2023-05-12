<x-guest-layout>
    <x-auth-card>
        <x-slot:logo>
            <Link href="{{route('login')}}">

            <img class="h-14 rounded-md  w-auto bg-gray-800 "
                 src="https://brandelz.com/wp-content/uploads/2022/12/Brandelz-logo.png"
                 alt="The Brandelz">
            </Link>
        </x-slot:logo>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4"/>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4"/>

        <x-splade-form action="{{ route('password.email') }}" class="space-y-4">
            <x-splade-input id="email" class="block mt-1 w-full" type="email" name="email" :label="__('Email')" required
                            autofocus/>

            <div class="flex items-center justify-end">
                <x-splade-submit class="bg-gray-800 text-white" :label="__('Email Password Reset Link')"/>
            </div>
        </x-splade-form>
    </x-auth-card>
</x-guest-layout>
