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
                Games
            </h2>
        </template>

        <div class="flex flex-wrap flex-row justify-items-center m-10 space-x-10 space-y-10">
            <Game v-for="game in games" :key="game.id" :game="game" />
        </div>
    </AppLayout>
</template>

<style scoped>

</style>
