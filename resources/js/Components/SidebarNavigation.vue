<template>

    <nav class="flex flex-1 flex-col">
        <ul role="list" class="flex flex-1 flex-col gap-y-7">
            <slot></slot>
        </ul>
    </nav>
</template>

<script>

export default {
    name: 'SidebarNavigation',

}
</script>
