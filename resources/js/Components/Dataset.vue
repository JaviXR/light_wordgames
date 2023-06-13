<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    dataset: Object,
})

</script>

<template>
    <div class="flex flex-row justify-between max-w-fit max-h-fit scale-100 p-5 m-5 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent
    dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none
    motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
        <div class="p-4">
            <h2 class="text-2xl font-bold">{{ dataset.name }}</h2>
            <span class="text-lg font-semibold">{{ dataset.type.name }}</span>
        </div>
    </div>
</template>

<style scoped>

</style>
