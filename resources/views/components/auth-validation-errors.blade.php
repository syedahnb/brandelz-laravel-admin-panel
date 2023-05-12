<x-splade-errors>
    <div v-if="Object.keys(errors.all).length" {{ $attributes->class('font-medium text-red-600') }}>
        <div v-for="(errors, key) in errors.all">
            <p v-for="error in errors" v-text="error" class="text-red-600"></p>
        </div>
    </div>
</x-splade-errors>
