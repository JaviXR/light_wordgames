<script setup>
    import { createApp, onMounted } from 'vue'
    import {Head, usePage} from "@inertiajs/vue3";
    import AppLayout from "@/Layouts/AppLayout.vue";

    const emit = defineEmits(['close']);
    const props = defineProps({
        game: Object,
        show: {
            type: Boolean,
            default: true,
        },
        maxWidth: {
            type: String,
            default: '2xl',
        },
        closeable: {
            type: Boolean,
            default: true,
        },
    });

    const close = () => {
        emit('close');
    };

    // const bgimage = () => {
    //     return "url('/images/games/bg' + usePage().props.game.id + '.png')";
    // };


</script>

<template>
    <AppLayout>
        <Head :title='game.name' />
        <div class="grid-cols-1 inline-grid justify-center w-screen h-screen" style="url('/images/games/bg1.png')">
            <div>
                <iframe v-if="game.id === 1" src="https://splode.github.io/trivia/" class="w-full h-full scale-90"></iframe>
                <iframe v-if="game.id === 2" src="https://egarbarino.github.io/vuejs-hangman/" class="w-full h-full scale-90"></iframe>
                <iframe v-if="game.id === 3" src="https://millionaires-c4191.web.app/" class="w-full h-full scale-90"></iframe>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>

</style>
