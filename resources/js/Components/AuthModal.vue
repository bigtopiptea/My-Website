<template>
    <div class="py-12 transition duration-150 ease-in-out z-10 absolute hidden top-0 right-0 bottom-0 left-0"
        id="modal">
        <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
            <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                <h1 class="text-gray-800 text-xl font-bold tracking-normal leading-tight mb-8 uppercase text-center">
                    Sign In
                </h1>

                <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                    {{ status }}
                </div>

                <div v-if="form.errors.email"
                    class="bg-red-100 rounded-lg py-5 px-6 mb-3 text-base text-red-700 inline-flex items-center w-full"
                    role="alert">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle"
                        class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
                        </path>
                    </svg>
                    {{form.errors.email}}
                </div>

                <form @submit.prevent="submit">
                    <label for="name"
                        class="text-gray-800 text-sm font-bold leading-tight tracking-normal uppercase">Username |
                        Email</label>
                    <input required v-model="form.email" type="text" id="name"
                        class="mb-1 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" />
                    <label for="password"
                        class="text-gray-800 text-sm font-bold leading-tight tracking-normal uppercase">Password</label>
                    <input required v-model="form.password" type="password" id="password"
                        class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" />
                    <div class="flex items-center justify-center w-full">
                        <button @click="modalHandler"
                            class="focus:outline-none transition uppercase font-medium duration-150 ease-in-out hover:bg-gray-700 bg-gray-800 rounded text-white px-8 py-2 text-sm">Submit</button>
                    </div>
                </form>
                <div class="flex items-center justify-center w-full mt-4">
                    <a class="block font-medium underline" href="#">Forgot Password?</a>
                </div>
                <div class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out"
                    @click="modalHandler()">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-label="Close" class="icon icon-tabler icon-tabler-x"
                        width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                </div>
                <h1
                    class="text-gray-800 text-xl font-bold tracking-normal leading-tight mb-6 mt-14 uppercase text-center">
                    create account
                </h1>
                <div class="flex items-center justify-center w-full">
                    <a :href="route('register')"
                        class="focus:outline-none transition uppercase font-medium duration-150 ease-in-out hover:bg-gray-700 bg-gray-800 rounded text-white px-8 py-2 text-sm">Register</a>
                </div>
            </div>
        </div>
    </div>

    <button @click="modalHandler(true)"
        class="hover:bg-gray-700 text-white py-2 px-3 rounded-md text-sm uppercase font-medium">
        Sign in / Register
    </button>
</template>

<script>
export default {
    props: {
        canResetPassword: Boolean,
        status: String,
    },
    data() {
        return {
            form: this.$inertia.form({
                email: '',
                password: '',
                remember: false,
            }),
        }
    },
    methods: {
        submit() {
            this.form.post(this.route('login'), {
                onFinish: () => this.form.reset('password'),

            })
        },
        modalHandler(val) {
            let modal = document.getElementById("modal");
            if (val) {
                this.fadeIn(modal);
            } else {
                this.fadeOut(modal);
            }
        },
        fadeOut(el) {
            el.style.opacity = 1;
            (function fade() {
                if ((el.style.opacity -= 0.1) < 0) {
                    el.style.display = "none";
                } else {
                    requestAnimationFrame(fade);
                }
            })();
        },
        fadeIn(el, display) {
            el.style.opacity = 0;
            el.style.display = display || "flex";
            (function fade() {
                let val = parseFloat(el.style.opacity);
                if (!((val += 0.2) > 1)) {
                    el.style.opacity = val;
                    requestAnimationFrame(fade);
                }
            })();
        },
    },
};
</script>