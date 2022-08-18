<script setup>
import { Link, useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({
    user: Object,
});

const form = useForm({
    _method: 'PUT',
    id: props.user.id,
    identity: props.user.identity,
    name: props.user.name,
    username: props.user.username,
    role: props.user.role,
    email: props.user.email,
    phone: props.user.phone_number,
});

</script>
<template>
    <dashboard-layout active="edit" label="Edit Profile">
        <template v-slot:content>
            <div class="flex items-center justify-center mb-14">
                <div class="flex flex-col items-center w-full">
                    <button v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                        <img class="h-20 w-20 rounded-full object-cover" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name">
                    </button>
                    <h1 class="mt-5 mb-1 text-2xl font-semibold">{{ form.name }}</h1>
                    <p class="mb-5 font-light text-center">{{ form.role }}</p>
                    <form action="update" method="POST">
                    <div class="px-3 py-3 grid gap-6 mb-2 md:grid-cols-2">
                        <div class="flex flex-col">
                            <p class="text-sm font-medium">Identitiy</p>
                            <input type="text" v-model="form.identity" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm placeholder-slate-400">
                        </div>
                        <div class="flex flex-col">
                            <p class="text-sm font-medium">Name</p>
                            <input type="text" v-model="form.name" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm placeholder-slate-400">
                        </div>
                        <div class="flex flex-col">
                            <p class="text-sm font-medium">Email</p>
                            <input type="text" v-model="form.email" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm placeholder-slate-400">
                        </div>
                        <div class="flex flex-col">
                            <p class="text-sm font-medium">Phone Number</p>
                            <input type="text" v-model="form.phone" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm placeholder-slate-400">
                        </div>
                        <div class="flex flex-col">
                            <p class="text-sm font-medium">Username</p>
                            <input type="text" v-model="form.username" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm placeholder-slate-400">
                        </div>
                    </div>
                    <button type="submit" class="text-white w-full bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Save</button>
                    </form>
               </div>
            </div>
        </template>
    </dashboard-layout>
</template>

<script>
import { Icon } from '@iconify/vue'
import DashboardLayout from "@/Layouts/DashboardLayout"
export default {
    name: "Edit",
    data() {
        return {
            active_vehicle: 1,
        }
    },
    methods: {
        onSubmit() {
            this.form.post(this.route('post.update'))
        },
    },
    components: {
        DashboardLayout,
        Icon,
    }
}
</script>

<style scoped>

</style>
