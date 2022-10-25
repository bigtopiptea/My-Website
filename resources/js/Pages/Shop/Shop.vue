<script setup>
import ShopLayout from '../../Layouts/ShopLayout.vue';
import ProductCard from '../../Components/ProductCard.vue';
import { Head } from '@inertiajs/inertia-vue3';
defineProps({
    errors: String,
    products: Object
});
</script>
<template>
    <ShopLayout :errors="errors" :user="$page.props.user">

        <Head title="Shop" />

        <div class="p-20 grid grid-cols-5 gap-4">
            <ProductCard :products="products" />
        </div>
    </ShopLayout>
</template>