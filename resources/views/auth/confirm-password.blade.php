<x-guest-layout>
    <x-auth-card>
        <x-slot:logo>
            <Link href="{{route('login')}}">

            <x-application-logo />
            </Link>
        </x-slot:logo>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" />

        <x-splade-form action="{{ route('password.confirm') }}" class="space-y-4">
            <x-splade-input id="password" type="password" name="password" required autocomplete="current-password" :label="__('Password')" />

            <div class="flex justify-end">
                <x-splade-submit class="bg-gray-800 text-white" :label="__('Confirm')" />
            </div>
        </x-splade-form>
    </x-auth-card>
</x-guest-layout>
