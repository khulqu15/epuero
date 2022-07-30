<template>
    <dashboard-layout active="edit" label="Edit Profile">
        <template v-slot:content>
            <div class="flex items-center justify-center mb-14">
                <div class="flex flex-col items-center w-full">
                    <div class="border border-slate-200 relative w-28 h-28 overflow-hidden bg-gray-200 rounded-full mb-3 md:mb-0 dark:bg-gray-700">
                        <img src="../../../Assets/wallpp-login.jpg" alt="">
                    </div>
                    <h1 class="mt-5 mb-1 text-2xl font-semibold">Imam Shofiuddin</h1>
                    <p class="mb-5 font-light text-center">Administrator</p>
                    <div class="px-3 py-3 grid gap-6 mb-2 md:grid-cols-2">
                        <div class="flex flex-col">
                            <p class="text-sm font-medium">Identitiy</p>
                            <input type="text" value="3121600037" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm placeholder-slate-400">
                        </div>
                        <div class="flex flex-col">
                            <p class="text-sm font-medium">Name</p>
                            <input type="text" value="Imam Shofiuddin" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm placeholder-slate-400">
                        </div>
                        <div class="flex flex-col">
                            <p class="text-sm font-medium">Role</p>
                            <input type="text" value="Administrator" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm placeholder-slate-400">
                        </div>
                        <div class="flex flex-col">
                            <p class="text-sm font-medium">Email</p>
                            <input type="text" value="imamshofiuddin00@gmail.com" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm placeholder-slate-400">
                        </div>
                        <div class="flex flex-col">
                            <p class="text-sm font-medium">Phone Number</p>
                            <input type="text" value="081559632926" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm placeholder-slate-400">
                        </div>
                        <div class="flex flex-col">
                            <p class="text-sm font-medium">Username</p>
                            <input type="text" value="imamshofiuddin_" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm placeholder-slate-400">
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
    name: "Edit",
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
