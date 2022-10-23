<script setup>
import Navbar from '../Components/Navbar.vue';
import AuthModal from '../Components/AuthModal.vue';
import { Head } from '@inertiajs/inertia-vue3';

defineProps({
    errors: String,
    title: String,
});
</script>
<template>

    <Head :title="title" />
    <Navbar />
    
    <main>
        <slot />
    </main>

</template>