<x-guest-layout>
    <x-auth-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" />
        <x-slot:logo>
            <Link href="{{route('login')}}">

            <img class="h-14 rounded-md  w-auto bg-gray-800 "
                 src="https://brandelz.com/wp-content/uploads/2022/12/Brandelz-logo.png"
                 alt="The Brandelz">
            </Link>
        </x-slot:logo>
        <x-splade-form :default="['email' => $request->email, 'token' => $request->route('token')]" action="{{ route('password.update') }}" class="space-y-4">
            <x-splade-input id="email" type="email" name="email" :label="__('Email')" required autofocus />
            <x-splade-input id="password" type="password" name="password" :label="__('Password')" required />
            <x-splade-input id="password_confirmation" type="password" name="password_confirmation" :label="__('Confirm Password')" required />

            <div class="flex items-center justify-end">
                <x-splade-submit class="bg-gray-800 text-white" :label="__('Reset Password')" />
            </div>
        </x-splade-form>
    </x-auth-card>
</x-guest-layout>
