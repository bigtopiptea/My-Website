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
            this.isOpen = !this.isOpen;
        },
    }
}
</script>

<template>

    <nav class="bg-gray-800 dark:bg-gray-700">
        <div class="py-3 flex justify-between mx-auto max-w-screen-xl">
            <div class="items-center">

            </div>
            <div class="items-center">
                <!-- Profile dropdown -->
                <div v-if="$page.props.user"
                    class="absolute inset-y-0 right-3 flex items-center sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <button type="button"
                        class="rounded-full bg-gray-800 p-1 text-white hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="sr-only">View notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>
                    <div class="relative ml-3">
                        <div>
                            <button @click.prevent="dropdown" type="button"
                                class="flex rounded-full items-center bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-6 w-6 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                                <span class="text-white ml-2 font-medium text-sm">{{ $page.props.user.name }}</span>
                            </button>
                        </div>
                        <div v-if="isOpen"
                            class="absolute test right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white px-1 py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="#"
                                class="block px-4 py-2 text-sm hover:bg-gray-800 hover:text-white hover:rounded-md text-gray-700"
                                role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm hover:bg-gray-800 hover:text-white hover:rounded-md text-gray-700"
                                role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                            <a href="#" @click="logout" class="block px-4 py-2 text-sm hover:bg-gray-800 hover:text-white hover:rounded-md text-gray-700"
                                role="menuitem" tabindex="-1" id="user-menu-item-2">
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
                <div v-else>
                    <AuthModal />
                </div>
            </div>

        </div>
    </nav>

    <nav class="bg-gray-800">
        <div class="mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex">
                            <div class="dropdown relative inline-block ">
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
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <button
                        class="text-white float-right flex px-3 py-2 hover:bg-gray-700 rounded-md text-sm font-medium uppercase">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>

                    </button>
                    <span
                        class="absolute right-1 top-0 rounded-full bg-red-600 w-4 h-4 top right p-0 m-0 text-white font-mono text-sm  leading-tight text-center">
                        0
                    </span>
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
