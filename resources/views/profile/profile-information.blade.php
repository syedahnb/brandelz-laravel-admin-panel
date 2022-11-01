<x-splade-form :default="Auth::user()" :action="route('profile.update',auth()->user()->id)">
    <div class="shadow sm:overflow-hidden sm:rounded-md">
        <div class="bg-white py-6 px-4 sm:p-6">
            <div>
                <h2 id="payment-details-heading"
                    class="text-lg font-medium leading-6 text-gray-900">Profile</h2>
                <p class="mt-1 text-sm text-gray-500">Update your Profile information.</p>
            </div>

            <div class="mt-6 grid grid-cols-4 gap-6">
                <div class="col-span-4 sm:col-span-2">
                    <x-splade-input name="name" label="Full Name"/>
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <x-splade-input name="email" label="Email"/>
                </div>

            </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
            <x-splade-submit class="inline-flex justify-center rounded-md border border-transparent bg-gray-800 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2">
                Update
            </x-splade-submit>
        </div>
    </div>
</x-splade-form>
