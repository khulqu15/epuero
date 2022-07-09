<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue';
import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue';
import JetButton from '@/Jetstream/Button.vue';
import JetInput from '@/Jetstream/Input.vue';
import JetCheckbox from '@/Jetstream/Checkbox.vue';
import JetLabel from '@/Jetstream/Label.vue';
import JetValidationErrors from '@/Jetstream/ValidationErrors.vue';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Register" />

    <div class="2xl:container h-screen m-auto">
        <!-- Banner -->
        <div hidden class="fixed inset-0 w-full lg:block bg-gray-50">
            <img class="w-1/2 absolute -translate-y-52 top-1/2 left-1/2 md:w-1/5" src="../../Assets/img/epuero-dev.png" alt="">
        </div>
        
        <!-- Section Login -->
        <div class="relative h-full mr-auto lg:w-5/12 bg-white p-4">
            <img class="w-36 -mb-5" src="../../Assets/img/logo-text.png" alt="">
            <div class="m-auto py-12 px-6 sm:p-20 xl:w-10/12">
                <div class="space-y-2">
                    <h1 class="font-bold leading-tight text-3xl text-blue-600">Sign Up</h1>
                    <p class="text-sm text-gray-600">Become a unit rescue</p>
                </div>

                <JetValidationErrors class="mb-3" />

                <!-- Form Login -->
                <form @submit.prevent="submit" class="space-y-3 py-2 mt-5">
                    <div>
                        <input 
                                type="text" 
                                placeholder="Full Name"
                                class="text-sm w-full py-3 px-6 ring-gray-50 border-gray-300 rounded-lg bg-transparent transition disabled:ring-gray-50 disabled:bg-gray-50 disabled:placeholder-gray-100"
                                required
                        >
                    </div>

                    <div>
                        <input 
                                type="text" 
                                placeholder="Username"
                                class="text-sm w-full py-3 px-6 ring-gray-50 border-gray-300 rounded-lg bg-transparent transition disabled:ring-gray-50 disabled:bg-gray-50 disabled:placeholder-gray-100"
                                required
                        >
                    </div>
                    <div>
                        <input 
                                type="email" 
                                placeholder="Email"
                                class="text-sm w-full py-3 px-6 ring-gray-50 border-gray-300 rounded-lg bg-transparent transition disabled:ring-gray-50 disabled:bg-gray-50 disabled:placeholder-gray-100"
                                required
                        >
                    </div>
                    <div>
                        <input 
                                type="text" 
                                placeholder="Identity"
                                class="text-sm w-full py-3 px-6 ring-gray-50 border-gray-300 rounded-lg bg-transparent transition disabled:ring-gray-50 disabled:bg-gray-50 disabled:placeholder-gray-100"
                                required
                        >
                    </div>
                    <div>
                        <input 
                                type="password" 
                                placeholder="Password"
                                class="text-sm w-full py-3 px-6 ring-gray-50 border-gray-300 rounded-lg bg-transparent transition disabled:ring-gray-50 disabled:bg-gray-50 disabled:placeholder-gray-100"
                                required
                        >
                    </div>
                    <div class="flex flex-col items-end">
                        <input 
                                type="password" 
                                placeholder="Confirm Password"
                                class="text-sm w-full py-3 px-6 ring-gray-50 border-gray-300 rounded-lg bg-transparent transition disabled:ring-gray-50 disabled:bg-gray-50 disabled:placeholder-gray-100"
                                required
                        >
                    </div>

                    <input type="checkbox" v-model="form.remember" name="remember" id="toggle" class="hidden"> 
                    <label for="toggle">
                        <div class="flex">
                            <div class="mt-5 p-1 w-11 h-6 bg-white rounded-full inline-flex items-center border border-gray-400 cursor-pointer toggle-cover">
                                <div class="w-4 h-4 bg-gray-300 rounded-full toggle-circle"></div>
                            </div>
                            <span class="ml-4 text-sm text-slate-500 mt-[1.4rem]">Remember me</span>
                        </div>
                    </label>

                    <div class="text-center text-sm text-slate-500">
                        
                        <button class="w-full px-6 py-4 rounded-full bg-blue-600 transition active:ring-4 mb-3" :disabled="form.processing">
                            <span class="font-semibold text-md text-white">Confirm</span>
                        </button>
                        <span>Already an Account ?</span>
                        <Link :href="route('login')" class="text-sm text-blue-600">
                            Login now.
                        </Link>
                        <!-- <a href="register" type="reset" class="w-max p-3 -ml-3">
                           <span class="text-sm tracking-wide text-blue-600">Create an account.</span>
                        </a> -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- <JetAuthenticationCard>
        <template #logo>
            <JetAuthenticationCardLogo />
        </template>

        <JetValidationErrors class="mb-4" />

        <form @submit.prevent="submit">
            <div>
                <JetLabel for="name" value="Name" />
                <JetInput
                    id="name"
                    v-model="form.name"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    autocomplete="name"
                />
            </div>

            <div class="mt-4">
                <JetLabel for="email" value="Email" />
                <JetInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="mt-1 block w-full"
                    required
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
                    autocomplete="new-password"
                />
            </div>

            <div class="mt-4">
                <JetLabel for="password_confirmation" value="Confirm Password" />
                <JetInput
                    id="password_confirmation"
                    v-model="form.password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    required
                    autocomplete="new-password"
                />
            </div>

            <div v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature" class="mt-4">
                <JetLabel for="terms">
                    <div class="flex items-center">
                        <JetCheckbox id="terms" v-model:checked="form.terms" name="terms" />

                        <div class="ml-2">
                            I agree to the <a target="_blank" :href="route('terms.show')" class="underline text-sm text-gray-600 hover:text-gray-900">Terms of Service</a> and <a target="_blank" :href="route('policy.show')" class="underline text-sm text-gray-600 hover:text-gray-900">Privacy Policy</a>
                        </div>
                    </div>
                </JetLabel>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link :href="route('login')" class="underline text-sm text-gray-600 hover:text-gray-900">
                    Already registered?
                </Link>

                <JetButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
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
