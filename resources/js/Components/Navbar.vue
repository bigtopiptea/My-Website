<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia';
import NavbarLink from './NavbarLink.vue';
import AuthModal from '../Components/AuthModal.vue';

export default {
    components: {
        Head,
        Link,
        NavbarLink,
        AuthModal
    },
    props: {
        show: Boolean
    },
    data() {
        return {
            isOpen: false,
        }
    },
    methods: {
        dropdown() {
            this.isOpen = !this.isOpen;
        },
        logout() {
            Inertia.post(route('logout'));
        },
    }
}
</script>

<template>

    <Head title="Welcome" />
    <nav class="bg-gray-800">
        <div class="mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button"
                        class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex">
                            <div class="dropdown relative inline-block">
                                <button
                                    class="dropbtn text-white flex px-3 py-2 hover:bg-gray-700 rounded-md text-sm font-medium uppercase">Shop
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1 mt-0.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                                <div class="dropdown-content hidden absolute bg-white shadow-md rounded-md">
                                    <div class="px-3 py-4">
                                        <span class="text-black uppercase text-md font-bold block px-4 mt-2">Mens</span>
                                        <div>
                                            <a class="block px-4 hover:text-gray-600 uppercase text-sm hover:rounded-md"
                                                href="#">Link
                                                1</a>
                                            <a class="block px-4 hover:text-gray-600 uppercase text-sm hover:rounded-md"
                                                href="#">Link
                                                2</a>
                                            <a class="block px-4 hover:text-gray-600 uppercase text-sm hover:rounded-md"
                                                href="#">Link
                                                3</a>
                                        </div>
                                        <span
                                            class="text-black uppercase text-md font-bold block px-4 mt-2">Children</span>
                                        <div>
                                            <a class="block px-4 hover:text-gray-600 uppercase text-sm hover:rounded-md"
                                                href="#">Link
                                                1</a>
                                            <a class="block px-4 hover:text-gray-600 uppercase text-sm hover:rounded-md"
                                                href="#">Link
                                                2</a>
                                            <a class="block px-4 hover:text-gray-600 uppercase text-sm hover:rounded-md"
                                                href="#">Link
                                                3</a>
                                        </div>
                                    </div>
                                    <div class="px-3 py-4">
                                        <span
                                            class="text-black uppercase text-md font-bold block px-4 mt-2">Womens</span>
                                        <div>
                                            <a class="block px-4 hover:text-gray-600 uppercase text-sm hover:rounded-md"
                                                href="#">Link
                                                1</a>
                                            <a class="block px-4 hover:text-gray-600 uppercase text-sm hover:rounded-md"
                                                href="#">Link
                                                2</a>
                                            <a class="block px-4 hover:text-gray-600 uppercase text-sm hover:rounded-md"
                                                href="#">Link
                                                3</a>
                                        </div>
                                        <span
                                            class="text-black uppercase text-md font-bold block px-4 mt-2">Accessories</span>
                                        <div>
                                            <a class="block px-4 hover:text-gray-600 uppercase text-sm hover:rounded-md"
                                                href="#">Link
                                                1</a>
                                            <a class="block px-4 hover:text-gray-600 uppercase text-sm hover:rounded-md"
                                                href="#">Link
                                                2</a>
                                            <a class="block px-4 hover:text-gray-600 uppercase text-sm hover:rounded-md"
                                                href="#">Link
                                                3</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- <NavbarLink :href="route('men')">Men</NavbarLink> -->
                        </div>
                    </div>
                </div>

                <div v-if="$page.props.user"
                    class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <button type="button"
                        class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="sr-only">View notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>

                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <button @click.prevent="dropdown" type="button"
                                class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </button>
                        </div>
                        <div v-if="isOpen"
                            class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white px-1 py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="#"
                                class="block px-4 py-2 text-sm hover:bg-gray-800 hover:text-white hover:rounded-md text-gray-700"
                                role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm hover:bg-gray-800 hover:text-white hover:rounded-md text-gray-700"
                                role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                            <form method="POST" @submit.prevent="logout">
                                <a class="block px-4 py-2 text-sm hover:bg-gray-800 hover:text-white hover:rounded-md text-gray-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-2">
                                    <button>Sign out</button>
                                </a>
                            </form>
                        </div>
                    </div>

                </div>
                <div v-else>
                    <AuthModal />
                    
                </div>
            </div>
        </div>
    </nav>
</template>

<style>
.dropdown:hover .dropdown-content {
    display: flex;
}
</style>
