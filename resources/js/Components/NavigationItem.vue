<template>
    <li>
        <a v-if="!hasChildren"
           :href="href"
           :class="[current ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800', 'group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold']">
            <component :is="icon" class="h-6 w-6 shrink-0" aria-hidden="true" />
            {{ name }}
        </a>
        <Disclosure v-else v-slot="{ open }" :defaultOpen="current">
            <DisclosureButton :class="[open ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800', 'flex items-center w-full text-left rounded-md p-2 gap-x-3 text-sm leading-6 font-semibold']">
                <component :is="icon" class="h-6 w-6 shrink-0" aria-hidden="true" />
                {{ name }}

                <ChevronRightIcon :class="[open ? 'rotate-90 bg-gray-800 text-white' : 'text-gray-400', 'ml-auto h-5 w-5 shrink-0']" aria-hidden="true" />
            </DisclosureButton>
            <DisclosurePanel as="ul" class="mt-1 px-2" :open="current">
                <slot />
            </DisclosurePanel>
        </Disclosure>
    </li>
</template>

<script >
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { ChevronRightIcon } from '@heroicons/vue/20/solid'
import {
    CalendarIcon,
    ChartPieIcon,
    DocumentDuplicateIcon,
    FolderIcon,
    HomeIcon,
    UsersIcon,
} from '@heroicons/vue/24/outline'
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
        icon: {
            type: Object,
            required: true,
        },
        current: {
            type: Boolean,
            required: true,
        },
        hasChildren: {
            type: Boolean,
            required: true,
        },
        children: {
            type: Array,
            default: () => [],
        },
    },
    data() {
        return {
            open: this.current,
        }
    },
    methods: {
        toggleOpen() {

            this.open = !this.open;
        },
    },
    components: {
        Disclosure,
        DisclosureButton,
        DisclosurePanel,
        ChevronRightIcon,
        HomeIcon,
        UsersIcon
    },
}
</script>
