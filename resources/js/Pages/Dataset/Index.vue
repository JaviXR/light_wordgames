<script setup>

import AppLayout from "@/Layouts/AppLayout.vue";
import Dataset from "@/Components/Dataset.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import form from "@/Pages/Dataset/Create.vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    datasets: Array,
})

</script>

<template>
    <AppLayout title="Datasets">
        <template #header>
            <div class="flex flex-row justify-between">
                <div class="justify-self-start">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ $t('Word Sets') }}
                    </h2>
                </div>
                <div class="justify-self-end">
                    <PrimaryButton class="ml-4">
                        <Link :href="route('datasets.create')" >
                            {{ $t('Create') }}
                        </Link>
                    </PrimaryButton>
                </div>
            </div>
        </template>

        <div class="grid grid-cols-4 w-full h-full p-5 overflow-x-auto justify-center">
            <Dataset v-for="dataset in datasets" :key="dataset.id" :dataset="dataset" />
        </div>
    </AppLayout>
</template>
