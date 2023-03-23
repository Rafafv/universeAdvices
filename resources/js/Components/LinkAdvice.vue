<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    href: {
        type: String,
        required: true,
    },
});

</script>

<template>
    <Link
        :href="href"
        class="rounded-full block w-full px-4 py-2 text-center text-sm leading-7 bg-cyan-500 hover:bg-cyan-600 text-white focus:outline-none transition duration-150 ease-in-out"
    >
        <slot />
    </Link>
</template>
