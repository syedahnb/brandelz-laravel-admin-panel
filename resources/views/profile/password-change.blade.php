<x-splade-form :default="Auth::user()" :action="route('profile.password-change',auth()->user()->id)" class="space-y-4">
    <div class="shadow sm:overflow-hidden sm:rounded-md">
        <div class="bg-white py-6 px-4 sm:p-6">
            <div>
                <h2 id="payment-details-heading"
                    class="text-lg font-medium leading-6 text-gray-900">Password Change</h2>
                <p class="mt-1 text-sm text-gray-500">Update your Password.</p>
            </div>

            <div class="mt-6 grid grid-cols-4 gap-6">
                <div class="col-span-4 sm:col-span-4">
                    <x-splade-input type="password" name="current_password" label="Current Password"/>
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <x-splade-input  type="password" name="new_password" :label="__('Password')" required/>
                </div>
                <div class="col-span-4 sm:col-span-2">
                    <x-splade-input  type="password" name="new_password_confirmation"
                                    :label="__('Confirm Password')" required/>
                </div>

            </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
            <x-splade-submit
                class="inline-flex justify-center rounded-md border border-transparent bg-gray-800 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2">
                Update
            </x-splade-submit>
        </div>
    </div>
</x-splade-form>

