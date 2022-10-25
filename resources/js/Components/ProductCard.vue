<script setup>
defineProps({
    products: Object,
})
</script>
<template>

    <!-- component -->
    <div class="flex justify-center" v-for="product in products" :key="product.id">
        <div class="shadow-lg bg-white hover:border hover:border-gray-800 rounded-md">
            <a href="#!" class="">
                <img class="" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" alt="" />
                <div class="p-2">
                    <p class="text-gray-700 text-sm font-bold mb-4 whitespace-nowrap overflow-hidden text-ellipsis">
                        {{ product.product_name }}
                    </p>
                </div>

                <div class="p-2 flex justify-between">
                    <div>
                        <span class="text-gray-800 price font-bold">${{ product.product_price }}</span>
                    </div>
                    <div>
                        <span class="text-gray-800 price uppercase text-sm font-normal">3.3k sold</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</template>