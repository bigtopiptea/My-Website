<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Inertia } from '@inertiajs/inertia';

defineProps({
    products: Object
});

const deleteProduct = (product_id) => {
    Inertia.delete(`/admin/product/${product_id}`);
}
</script>

<template>
    <AppLayout title="Products">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Products
            </h2>
        </template>

        <div class="mt-8">
            <div class="justify-between items-center flex">
                <div class="relative w-full ml-3">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="simple-search"
                        class="border h-10 border-gray-300 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-2/5 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search" required>

                </div>
                <a href="#"
                    class="bg-blue-500 hover:bg-blue-600 rounded-sm p-2 whitespace-nowrap text-sm uppercase text-white font-bold mr-3">
                    Create Product
                </a>
            </div>
            <div class="mx-auto p-3">
                <div class="flex flex-col">
                    <div class="overflow-x-auto shadow-md">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden ">
                                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                                    <thead class="bg-blue-500 dark:bg-gray-700">
                                        <tr>
                                            <th scope="col" class="p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-all" type="checkbox"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-all" class="sr-only">checkbox</label>
                                                </div>
                                            </th>
                                            <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-white uppercase dark:text-gray-400">
                                                Product Name
                                            </th>
                                            <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-white uppercase dark:text-gray-400">
                                                Category
                                            </th>
                                            <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-white uppercase dark:text-gray-400">
                                                Price
                                            </th>
                                            <th scope="col" class="p-4">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                        <tr v-for="product in products" :key="product.id"
                                            class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                            <td class="p-4 w-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-table-1" type="checkbox"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-table-1" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ product.product_name }}</td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Desktop PC</td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                ${{ product.product_price }}</td>
                                            <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                <a href="#"
                                                    class="text-blue-600 dark:text-blue-500 uppercase font-bold hover:underline">Edit</a>
                                                <button @click="deleteProduct(product.id)"
                                                    class="text-red-600 dark:text-red-500 ml-5 uppercase font-bold hover:underline">Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
