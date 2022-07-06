<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue';
import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue';
import JetButton from '@/Jetstream/Button.vue';
import JetInput from '@/Jetstream/Input.vue';
import JetCheckbox from '@/Jetstream/Checkbox.vue';
import JetLabel from '@/Jetstream/Label.vue';
import JetValidationErrors from '@/Jetstream/ValidationErrors.vue';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Log in" />

    <div class="2xl:container h-screen m-auto">
        <div hidden class="fixed inset-0 w-full lg:block bg-gray-50">
            <img class="mt-4 ml-4 w-36" src="../../Assets/img/logo-text.png" alt="">
            <img class="w-1/6 absolute -translate-y-52 top-1/2 left-24 md:w-1/5" src="../../Assets/img/img-1.png" alt="">
            <img class="w-3/5 absolute bottom-0 left-0" src="../../Assets/img/plane.png" alt="plane">
            <img class="w-1/4 absolute -translate-y-40 top-1/2 left-52" src="../../Assets/img/img-2.png" alt="">
        </div>
        
        <div class="relative h-full ml-auto lg:w-5/12 bg-white">
            <div class="m-auto py-12 px-6 sm:p-20 xl:w-10/12">
                <div class="space-y-4">
                    <h1 class="font-bold leading-tight text-3xl text-blue-600">Login</h1>
                    <p class="text-sm text-gray-600">Welcome back to your account</p>
                </div>

                <form action="" class="space-y-6 py-6 mt-8">
                    <div>
                        <i class="fa-solid fa-landmark"></i>
                        <input 
                                type="email" 
                                placeholder="Email Address"
                                class="text-sm w-full py-3 px-6 ring-gray-50 border-gray-300 rounded-lg bg-transparent transition disabled:ring-gray-50 disabled:bg-gray-50 disabled:placeholder-gray-100"
                        >
                    </div>

                    <div class="flex flex-col items-end">
                        <input 
                                type="password" 
                                placeholder="Password"
                                class="text-sm w-full py-3 px-6 ring-gray-50 border-gray-300 rounded-lg bg-transparent transition disabled:ring-gray-50 disabled:bg-gray-50 disabled:placeholder-gray-100"
                        >
                    </div>
                    <input type="checkbox" name="rememberme" id="toggle" class="hidden">
                    <label for="toggle">
                        <div class="flex">
                            <div class="mt-5 p-1 w-11 h-6 bg-white rounded-full inline-flex items-center border border-gray-400 cursor-pointer toggle-cover">
                                <div class="w-4 h-4 bg-gray-300 rounded-full toggle-circle"></div>
                            </div>
                            <span class="ml-4 text-sm text-slate-500 mt-[1.4rem]">Remember me</span>
                        </div>
                    </label>

                    <div class="text-center text-sm text-slate-500">
                        <button class="w-full px-6 py-4 rounded-full bg-blue-600 transition active:ring-4">
                            <span class="font-semibold text-md text-white">Confirm</span>
                        </button>
                        Don't have an account ?
                        <a href="#" type="reset" class="w-max p-3 -ml-3">
                           <span class="text-sm tracking-wide text-blue-600">Create an account.</span>
                        </a>
                        <span class="block my-4">Or Login With</span>
                        <div class="space-x-5">
                        <a href="#">
                        <div class="w-12 h-12 bg-gray-300 rounded-full inline-flex">
                            <div class="icon mx-auto text-2xl mt-3">
                                <ion-icon name="logo-google"></ion-icon>
                            </div>
                        </div>
                        </a>
                        <a href="#">
                        <div class="w-12 h-12 bg-gray-300 rounded-full inline-flex">
                            <div class="icon mx-auto text-2xl mt-3">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </div>
                        </div>
                        </a>
                        </div>
                    </div>
                </form>
                    

            </div>
        </div>
    </div>


    <!-- <JetAuthenticationCard>
        <template #logo>
            <JetAuthenticationCardLogo/>
        </template>

        <JetValidationErrors class="mb-4" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        
        <form @submit.prevent="submit">
            <div>
                <JetLabel for="email" value="Email" />
                <JetInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="mt-1 block w-full"
                    required
                    autofocus
                />
            </div>

            <div class="mt-4">
                <JetLabel for="password" value="Password" />
                <JetInput
                    id="password"
                    v-model="form.password"
                    type="password"
                    class="mt-1 block w-full"
                    required
                    autocomplete="current-password"
                />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <JetCheckbox v-model:checked="form.remember" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900">
                    Forgot your password ? 
                </Link>

                <JetButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Login
                </JetButton>
            </div>
        </form>
    </JetAuthenticationCard> -->
</template>

<style>
    #toggle:checked ~ label div.toggle-circle {
        transform: translateX(1.2rem);
        background-color: white;
    }

    #toggle:checked ~ label div.toggle-cover {
        background-color: rgb(37 99 235 / var(--tw-bg-opacity));
        border: none;
    }

    #toggle:checked ~ label span {
        color: rgb(73, 68, 68);
    }

    .toggle-circle {
        transition: ease 0.1s;
    }
</style>