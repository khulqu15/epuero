<template>
    <dashboard-layout active="profile" label="View Profile">
        <template v-slot:content>
            <div class="flex items-center justify-center mb-14">
                <div class="flex flex-col items-center w-full">
                    <div class="border border-slate-200 relative w-28 h-28 overflow-hidden bg-gray-200 rounded-full mb-3 md:mb-0 dark:bg-gray-700">
                        <img src="../../../Assets/wallpp-login.jpg" alt="">
                    </div>
                    <h1 class="mt-5 mb-1 text-2xl font-semibold">Imam Shofiuddin</h1>
                    <p class="mb-5 font-light text-center">Lorem ipsum dolor sit amet. Necessitatibus assumenda vel</p>
                    <div class="flex flex-col items-center menus w-full lg:flex-row md:w-3/4">
                        <div class="rounded bg-white border border-slate-200 p-5 w-full">
                            <div class="flex flex-row text-lg font-semibold py-2 pl-3">
                                <h3 class="text-lg font-semibold">About Me</h3>
                                <button class="ml-3">
                                    <Icon icon="akar-icons:pencil" class="text-blue-500 flex-shrink-0 w-5 h-5 duratishrink-0 duration-75 dark:text-gray-400 group-hover:text-white group-hover:w-20 group-hover:h-20 dark:group-hover:text-white"/>
                                </button> 
                            </div>
                            <div class="py-2 px-3 text-sm border-b pb-5 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In elit sem, facilisis non metus ut, euismod finibus urna. Nam id elementum libero. Morbi semper ornare viverra. Vivamus consequat tristique ante eu malesuada. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</div>
                            <div class="flex flex-row text-lg font-semibold py-2 pl-3">
                                <h3 class="text-lg font-semibold">My Profile</h3>
                                <a href="/app/edit" class="ml-3">
                                    <Icon icon="akar-icons:pencil" class="text-blue-500 flex-shrink-0 w-5 h-5 duratishrink-0 duration-75 dark:text-gray-400 group-hover:text-white group-hover:w-20 group-hover:h-20 dark:group-hover:text-white"/>
                                </a> 
                            </div>
                            <div class="px-3 py-3 grid gap-6 mb-2 md:grid-cols-2">
                                <div class="flex flex-col">
                                    <p class="text-sm font-medium">Identitiy</p>
                                    <input disabled type="text" value="3121600037" class="mt-1 block w-full px-3 py-2 bg-gray-50 border border-gray-300 rounded-md text-sm placeholder-slate-400">
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-medium">Name</p>
                                    <input disabled type="text" value="Imam Shofiuddin" class="mt-1 block w-full px-3 py-2 bg-gray-50 border border-slate-300 rounded-md text-sm placeholder-slate-400">
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-medium">Role</p>
                                    <input disabled type="text" value="Administrator" class="mt-1 block w-full px-3 py-2 bg-gray-50 border border-slate-300 rounded-md text-sm placeholder-slate-400">
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-medium">Email</p>
                                    <input disabled type="text" value="imamshofiuddin00@gmail.com" class="mt-1 block w-full px-3 py-2 bg-gray-50 border border-slate-300 rounded-md text-sm placeholder-slate-400">
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-medium">Phone Number</p>
                                    <input disabled type="text" value="081559632926" class="mt-1 block w-full px-3 py-2 bg-gray-50 border border-slate-300 rounded-md text-sm placeholder-slate-400">
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-medium">Username</p>
                                    <input disabled type="text" value="imamshofiuddin_" class="mt-1 block w-full px-3 py-2 bg-gray-50 border border-slate-300 rounded-md text-sm placeholder-slate-400">
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
