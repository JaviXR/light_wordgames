<script setup>
import {Link, useForm} from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";

defineProps({
    types: Array,
})
const form = useForm(
    {
        name: '',
        content: '',
        type_id: null,
    }
)

const submit = () => {
    form.post(route('datasets.store'), {
        onFinish: () => form.reset('name', 'content', 'type_id'),
    });
};

</script>

<template>
    <AppLayout :title="$t('Create Dataset')">
        <template #header>
            <div class="flex flex-row justify-between">
                <div class="justify-self-start">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ $t('Word Sets') }}
                    </h2>
                </div>
                <div class="justify-self-end">
                    <SecondaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        <Link :href="route('datasets.index')" >
                            {{ $t('Cancel') }}
                        </Link>
                    </SecondaryButton>
                </div>
            </div>
        </template>

        <div class="grid place-items-center w-full h-full m-auto">
            <form @submit.prevent="submit">
                <div class="grid grid-cols-1 w-fit place-items-end scale-100 border-blue-700 border-2 mt-10 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none">
                    <div class="py-2">
                        <label for="type_id" class="pr-16 text-center">{{ $t('Type') }}:</label>
                        <select id="type_id" size="4" class="w-60" v-model="form.type_id">
                            <option v-for="(type, index) in types" :key="index" :value="type.id">{{ type.name }}</option>
                        </select>
                    </div>
                    <div class="py-2">
                        <label for="name" class="pr-6">{{ $t('Name') }}:</label>
                        <input type="text" id="name" class="w-80" v-model="form.name">
                    </div>

                    <div class="py-2">
                        <label for="data" class="pr-2">{{ $t('Content') }}:</label>
                        <input type="text" id="data" class="w-80 h-fit" v-model="form.content">
                    </div>

                    <PrimaryButton type="submit" class="py-2">{{ $t('Submit') }}</PrimaryButton>
                </div>
            </form>
        </div>
    </AppLayout>
</template>
