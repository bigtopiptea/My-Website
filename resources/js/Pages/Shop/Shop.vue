<script setup>
import ShopLayout from '../../Layouts/ShopLayout.vue';
defineProps({
    errors: String
});
</script>
<template>
    <ShopLayout :errors="errors" :user="$page.props.user">
        <h1>Test</h1>
    </ShopLayout>
</template>