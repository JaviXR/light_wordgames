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
    <AppLayout title="Create Dataset">
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

        <form @submit.prevent="submit">
            <div>
                <label for="name">{{ $t('Name') }}:</label>
                <input type="text" id="name" v-model="form.name">
            </div>

            <div>
                <label for="type_id">{{ $t('Type') }}:</label>
                <select id="type_id" v-model="form.type_id">
                    <option v-for="(type, index) in types" :key="index" :value="type.id">{{ type.name }}</option>
                </select>
            </div>

            <div>
                <label for="data">{{ $t('Content') }}:</label>
                <input type="text" id="data" v-model="form.content">
            </div>

            <PrimaryButton type="submit">{{ $t('Submit') }}</PrimaryButton>
        </form>
    </AppLayout>
</template>
