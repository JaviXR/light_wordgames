<script setup>
    import Modal from "@/Components/Modal.vue";

    const emit = defineEmits(['close']);

    defineProps({
        game: Object,
        show: {
            type: Boolean,
            default: true,
        },
        maxWidth: {
            type: String,
            default: 'xl',
        },
        closeable: {
            type: Boolean,
            default: true,
        },
    });

    const close = () => {
        emit('close');
    };

</script>

<template>
    <Modal :show="show"
           :max-width="maxWidth"
           :closeable="closeable"
           @close="close">
        <span>Juegazo</span>
    </Modal>
</template>

<style scoped>

</style>
