<script setup>
    import ApplicationLogo from '@/Components/ApplicationLogo.vue';

    function random() {
        const $random = Math.floor((Math.random() * 9) + 1);
        return $random.toString();
    }

</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
            <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
                {{ $t("I don't know what to put here, so I'll just put a bunch of text") }}
            </h1>

            <p class="mt-6 text-gray-500 dark:text-gray-400 leading-relaxed">
                {{ $t('Here you have a random gag to(maybe) make you laugh') }}:
            </p>
        </div>

        <div class="flex flex-row justify-around bg-gray-200 dark:bg-gray-800 bg-opacity-25 gap-6 lg:gap-8 p-6 lg:p-8">
            <div class="w-2/5 border-8 border-blue-700 p2">
                <img :src="'/images/jokes/' + random() + '.png'" alt="joke1.img">
            </div>

            <div class="w-2/5 border-8 border-blue-700 p2">
                <img :src="'/images/jokes/' + random() + '.png'" alt="joke2.img">
            </div>
        </div>
    </div>
</template>
