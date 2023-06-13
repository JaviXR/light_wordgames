<script setup>
    import Dropdown from '@/Components/Dropdown.vue';
    import SecondaryButton from '@/Components/SecondaryButton.vue';
    import { Link } from "@inertiajs/vue3";

</script>

<template>
    <Dropdown width="24" align="left">
        <template #trigger>
            <SecondaryButton class="w-16"><img :src="'/images/locales/' + $page.props.selectedLocale + '.svg'" alt="flag.svg" class="h-full w-full"></SecondaryButton>
        </template>

        <template #content>
            <div class="py-1">
                <template v-for="(locale, index) in $page.props.locales" :key="index">
                    <div class="w-14">
                        <Link :href="route('locale', locale)" class="block px-4 py-2 text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out">
                            <div>
                                <img :src="'/images/locales/' + locale + '.svg'" alt="flag.svg" class="h-full w-full">
                            </div>
                        </Link>
                    </div>
                </template>
            </div>
        </template>
    </Dropdown>
</template>

<style scoped>

</style>
