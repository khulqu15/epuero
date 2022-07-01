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
        <div hidden class="fixed inset-0 w-7/12 lg:block">
            <img class="wallpp-login" src="../../Assets/wallpp-login.jpg" alt="Epuero">
        </div>
        <div hidden role="hidden" class="fixed inset-0 w-6/12 ml-auto bg-white bg-opacity-70 backdrop-blur-xl lg:block"></div>
        <div class="relative h-full ml-auto lg:w-6/12">
            <div class="m-auto py-12 px-6 sm:p-20 xl:w-10/12">
                <div class="space-y-4">
                    <h1 class="font-medium leading-tight text-4xl mt-0 mb-2 text-blue-600">Login</h1>
                    <p class="font-medium text-lg text-gray-600">Welcome back to your account</p>
                </div>

                <form action="" class="space-y-6 py-6">
                    <div>
                        <input 
                                type="email" 
                                placeholder="Email Address"
                                class="w-full py-3 px-6 ring-1 ring-gray-300 rounded-xl bg-transparent transition disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400"
                        >
                    </div>

                    <div class="flex flex-col items-end">
                        <input 
                                type="password" 
                                placeholder="Password"
                                class="w-full py-3 px-6 ring-1 ring-gray-300 rounded-xl bg-transparent transition disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400"
                        >
                    </div>

                    <div class="text-center">
                        <button class="w-full px-6 py-3 rounded-full bg-blue-600 transition active:bg-sky-800">
                            <span class="font-semibold text-white text-lg">Confirm</span>
                        </button>
                        Don't have an account ?
                        <a href="#" type="reset" class="w-max p-3 -ml-3">
                           <span class="text-sm tracking-wide text-blue-600">Create an account.</span>
                        </a>
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
    .wallpp-login{
        height: 100%;
    }
</style>