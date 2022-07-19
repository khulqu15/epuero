<template>
    <dashboard-layout active="setting" label="Setting">
        <template v-slot:content>
            <div class="flex items-center justify-center mb-14">
                <div class="flex flex-col items-center">
                    <div class="border border-slate-200 relative w-28 h-28 overflow-hidden bg-gray-200 rounded-full mb-3 md:mb-0 dark:bg-gray-700">
                        <img src="../../Assets/wallpp-login.jpg" alt="">
                    </div>
                    <h1 class="mt-5 mb-1 text-2xl font-semibold">Imam Shofiuddin</h1>
                    <p class="mb-5 font-light text-center">Lorem ipsum dolor sit amet. Necessitatibus assumenda vel</p>
                    <div class="flex flex-col items-center menus md:flex-row">
                        <button class="flex flex-col justify-center items-center btn w-60 h-44 border-slate-200 shadow-sm border bg-white rounded m-2">
                            <Icon icon="akar-icons:fire" class="flex-shrink-0 w-14 h-14 transition duratishrink-0 w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"/>
                            <p class="mt-3">Setting - Fire Detection</p>
                        </button> 
                        <button class="flex flex-col justify-center items-center btn w-60 h-44 border-slate-200 shadow-sm border bg-white rounded m-2">
                            <Icon icon="gis:contour-map" class="flex-shrink-0 w-14 h-14 transition duratishrink-0 w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"/>
                            <p class="mt-3">Setting - Geomapping</p>
                        </button>
                        <button class="flex flex-col justify-center items-center btn w-60 h-44 border-slate-200 shadow-sm border bg-white rounded m-2">
                            <Icon icon="akar-icons:person" class="flex-shrink-0 w-14 h-14 transition duratishrink-0 w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"/>
                            <p class="mt-3">Setting - User Account</p>
                        </button> 
                        <button class="flex flex-col justify-center items-center btn w-60 h-44 border-slate-200 shadow-sm border bg-white rounded m-2">
                            <Icon icon="akar-icons:clipboard" class="flex-shrink-0 w-14 h-14 transition duratishrink-0 w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"/>
                            <p class="mt-3">Setting - Log</p>
                        </button>
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
export default {
    name: "Setting.vue",
    data() {
        return {
            active_vehicle: 1,
        }
    },
    components: {
        DashboardLayout,
        ExampleChart,
        Icon,
    }
}
</script>

<style scoped>

</style>
