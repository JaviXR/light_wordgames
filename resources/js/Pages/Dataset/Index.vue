<script setup>

import AppLayout from "@/Layouts/AppLayout.vue";
import Dataset from "@/Components/Dataset.vue";

const props = defineProps({
    datasets: Array,
})

</script>

<template>
    <AppLayout title="Datasets">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Word Sets
            </h2>
        </template>

        <div class="list-item list-none justify-items-center mr-10 ml-10 mt-5 mb-10 space-x-5 space-y-5">
            <Dataset v-for="dataset in datasets" :key="dataset.id" :dataset="dataset" />
        </div>
    </AppLayout>
</template>
