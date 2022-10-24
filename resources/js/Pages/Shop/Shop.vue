<script setup>
import ShopLayout from '../../Layouts/ShopLayout.vue';
import ProductCard from '../../Components/ProductCard.vue';
defineProps({
    errors: String
});
</script>
<template>
    <ShopLayout :errors="errors" :user="$page.props.user">
        <div class="p-20 grid grid-cols-4 ">
            <ProductCard />
            <ProductCard />
            <ProductCard />
            <ProductCard />
            <ProductCard />
            <ProductCard />
        </div>
    </ShopLayout>
</template>