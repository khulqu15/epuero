<template>
    <Head title="Login" />
    <div id="login_page">
        <div @click="goPage('home')" class="relative md:fixed top-0 left-0 px-8 md:px-12 py-8 z-10 cursor-pointer">
            <img src="/images/logo-origin.png" class="w-16 inline-block" alt="Logo">
            <h3 class="font-bold text-xl uppercase relative top-2 inline-block">Epuero</h3>
        </div>
        <div class="grid grid-cols-3">
            <div class="hidden md:inline-block col-span-2 min-h-screen w-full bg-gray-100 relative">
                <img src="/images/decoration/plane.webp" class="w-full absolute bottom-0 left-0" alt="Plane Login">
                <img src="/images/decoration/login.webp" class="w-1/2 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" alt="Monitoring Login">
            </div>
            <div class="col-span-3 md:col-span-1 min-h-screen grid grid-cols-1 w-full items-center overflow-auto p-8">
                <div id="login_content">
                    <a href="/" class="text-gray-900 relative -top-3 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-4 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        <Icon icon="akar-icons:arrow-left" class="text-xl inline-block"/>
                        <span>Back</span>
                    </a>
                    <div id="header_login" class="mb-6 mt-3">
                        <h3 class="font-bold text-4xl text-indigo-600 mb-2">Login</h3>
                        <span class="text-sm text-gray-600">Welcome back to your account</span>
                    </div>
                    <form @submit.prevent="onSubmit()" action="#">
                        <div class="form-group">
                            <div class="relative my-4">
                                <input v-model="form.email" required type="text" id="email_field" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                <label for="email_field" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Email or username</label>
                            </div>
                            <div class="relative my-4">
                                <input v-model="form.password" required :type="show_password ? 'text' : 'password'" id="password_field" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                <label for="password_field" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Password</label>
                                <Icon :icon="show_password ? 'akar-icons:eye' : 'akar-icons:eye-closed'" @click="show_password = !show_password" :class="{'text-gray-500': !show_password, 'text-indigo-400': show_password}" class="absolute text-xl top-4 right-3 cursor-pointer"/>
                            </div>
                            <label for="remember-toggle" class="relative inline-flex items-center mb-4 cursor-pointer">
                                <input v-model="form.remember" type="checkbox" value="" id="remember-toggle" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</span>
                            </label>
                            <button type="submit" class="text-white w-full bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Login</button>
                        </div>
                    </form>
                    <div id="footer_login" class="mt-4 text-sm text-center">
                        <p class="text-gray-600 mb-2">Don't have an account ? <span @click="goPage('register')" class="cursor-pointer text-indigo-600 font-semibold">Create an account</span></p>
                        <span class="text-gray-600 mb-2">Or Login with</span>
                        <div class="flex items-center justify-center gap-4 my-4">
                            <div class="w-12 h-12 transition-all rounded-full bg-gray-200 text-gray-600 hover:bg-gray-300 hover:text-gray-800 grid grid-cols-1 items-center justify-items-center cursor-pointer">
                                <Icon icon="akar-icons:google-fill" class="text-lg"/>
                            </div>
                            <div class="w-12 h-12 transition-all rounded-full bg-gray-200 text-gray-600 hover:bg-gray-300 hover:text-gray-800 grid grid-cols-1 items-center justify-items-center cursor-pointer">
                                <Icon icon="akar-icons:facebook-fill" class="text-lg"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import { Icon } from '@iconify/vue'
export default {
    data() {
        return {
            show_password: false,
            form: this.$inertia.form({
                email: '',
                password: '',
                remember: false,
            })
        }
    },
    components: {
        Head,
        Link,
        Icon,
    },
    methods: {
        goPage(route_name) {
            window.location.href = this.route(route_name)
            // this.$inertia.get(this.route(route_name))
        },
        onSubmit() {
            this.form.post(this.route('post.login'))
        },
    }
}
</script>
