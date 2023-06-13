<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    game: Object,
})

</script>

<template>
    <div class="flex flex-row justify-between max-w-fit max-h-fit scale-100 p-5 m-5 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent
    dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none
    motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
        <div class="w-2/5 h-full flex flex-col justify-between">
            <h2 class="h-1/6 w-full justify-self-start text-2xl font-semibold text-gray-900 dark:text-white">{{ game.name }}</h2>
            <p class="h-4/6 w-full text-lg mt-4 text-gray-500 dark:text-gray-400 leading-relaxed">
                {{ game.description }}
            </p>
        </div>
        <div class="w-2/5">
            <img src="../../assets/logo_alt.png" alt="img1" class="w-fit max-h-fit">
        </div>
    </div>
</template>

<style scoped>

</style>
