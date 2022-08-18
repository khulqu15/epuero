<script setup>
import { Link, useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({
    user: Object,
});

const form = useForm({
    _method: 'PUT',
    identity: props.user.identity,
    name: props.user.name,
    username: props.user.username,
    role: props.user.role,
    email: props.user.email,
    phone: props.user.phone_number,
});
</script>

<template>
    <dashboard-layout active="profile" label="Lihat Profile">
        <template v-slot:content>
            <div class="flex items-center justify-center mb-14">
                <div class="flex flex-col items-center w-full">
                <button v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                    <img class="h-20 w-20 rounded-full object-cover" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name">
                </button>
                    <h1 class="mt-5 mb-1 text-2xl font-semibold">{{ form.name }}</h1>
                    <p class="mb-5 font-light text-center">{{ form.role }}</p>
                    <div class="flex flex-col items-center menus w-full lg:flex-row md:w-3/4">
                        <div class="rounded bg-white border border-slate-200 p-5 w-full">
                            <div class="flex flex-row text-lg font-semibold py-2 pl-3">
                                <h3 class="text-lg font-semibold">My Profile</h3>
                                <a href="{{ url('profile/edit') }}" class="ml-3">
                                    <Icon icon="akar-icons:pencil" class="text-blue-500 flex-shrink-0 w-5 h-5 duratishrink-0 duration-75 dark:text-gray-400 group-hover:text-white group-hover:w-20 group-hover:h-20 dark:group-hover:text-white"/>
                                </a> 
                            </div>
                            <div class="px-3 py-3 grid gap-6 mb-2 md:grid-cols-2">
                                <div class="flex flex-col">
                                    <p class="text-sm font-medium">Identitiy</p>
                                    <input disabled type="text" v-model="form.identity" class="mt-1 block w-full px-3 py-2 bg-gray-50 border border-gray-300 rounded-md text-sm placeholder-slate-400">
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-medium">Name</p>
                                    <input disabled type="text" v-model="form.name" class="mt-1 block w-full px-3 py-2 bg-gray-50 border border-slate-300 rounded-md text-sm placeholder-slate-400">
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-medium">Email</p>
                                    <input disabled type="text" v-model="form.email" class="mt-1 block w-full px-3 py-2 bg-gray-50 border border-slate-300 rounded-md text-sm placeholder-slate-400">
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-medium">Phone Number</p>
                                    <input disabled type="text" v-model="form.phone" class="mt-1 block w-full px-3 py-2 bg-gray-50 border border-slate-300 rounded-md text-sm placeholder-slate-400">
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-medium">Username</p>
                                    <input disabled type="text" v-model="form.username" class="mt-1 block w-full px-3 py-2 bg-gray-50 border border-slate-300 rounded-md text-sm placeholder-slate-400">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </dashboard-layout>
</template>

<script>
import { Icon } from '@iconify/vue'
import DashboardLayout from "@/Layouts/DashboardLayout"
import ExampleChart from "@/Components/ExampleChart";
import UnderConstruction from "@/Components/UnderConstruction";


export default {
    name: "Index.vue",
    data() {
        return {
            active_vehicle: 1,
        }
    },
    components: {
        DashboardLayout,
        ExampleChart,
        Icon,
        UnderConstruction,
    }
}

</script>

<style scoped>

</style>
