<script setup>

import AppLayout from "@/Layouts/AppLayout.vue";
import Game from "@/Components/Game.vue";

const props = defineProps({
    games: Array,
})

</script>

<template>
    <AppLayout title="Games">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ $t('Games') }}
            </h2>
        </template>

        <div class="flex flex-wrap flex-row justify-center py-5 w-full h-full overflow-x-auto">
            <Game v-for="game in games" :key="game.id" :game="game" />
            <Game v-for="game in games" :key="game.id" :game="game" />
            <Game v-for="game in games" :key="game.id" :game="game" />
        </div>
    </AppLayout>
</template>

<style scoped>

</style>
