<script setup>
import { Link } from '@inertiajs/vue3';
import Dataset from "@/Components/Dataset.vue";

const props = defineProps({
    dataset: Object,
})

</script>

<template>
    <div class="flex">
        <div class="bg-white rounded-lg shadow-lg">
            <div class="p-4">
                <h2 class="text-lg font-semibold">{{ dataset.name }}</h2>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
