<x-admin-layout>


    <main class="mx-auto max-w-7xl pb-10 lg:py-12 lg:px-8">
        <div class="container mx-auto">

            <div class="space-y-6 sm:px-6 lg:col-span-9 lg:px-0">
                <section aria-labelledby="profile-details-heading">
                    @include('profile.profile-information')
                </section>


                <section aria-labelledby="password-change-heading">
                    @include('profile.password-change')
                </section>
            </div>
        </div>
    </main>


</x-admin-layout>
