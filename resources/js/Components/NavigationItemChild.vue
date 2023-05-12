<template>
    <li>
        <a :href="href" :class="[current ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800', 'block rounded-md py-2 pr-2 pl-9 text-sm leading-6']">
            {{ name }}
        </a>
    </li>
</template>

<script>
export default {
    props: {
        name: {
            type: String,
            required: true,
        },
        href: {
            type: String,
            required: true,
        },
        current: {
            type: Boolean,
            default: false,
        },
    },
};
</script>
