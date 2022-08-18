<template>
    <dashboard-layout active="home" label="Dashboard">
        <template v-slot:content>

            <div class="py-4 grid grid-cols-5 items-center">
                <div class="col-span-5 md:col-span-3 inline-block md:flex items-center gap-3">
                    <button v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                        <img class="h-16 w-16 rounded-full object-cover" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name">
                    </button>
                    <div>
                        <h1 class="text-xl font-semibold">{{ $page.props.user.name }}</h1>
                        <span class="text-gray-700 text-sm">We're very happy to see you again on your personal dashboard.</span>
                    </div>
                </div>
                <div class="my-4 md:my-0 col-span-5 md:col-span-2 text-end">
                    <button type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">View Analytic</button>
                    <button type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Manage Data</button>
                </div>
            </div>

            <div class="my-3 rounded-lg bg-white grid grid-cols-5 hover:shadow-lg transition-all gap-x-4" v-for="(item, index) in 2" :key="index">
                <div @click="active_vehicle = item" class="col-span-5 p-4 border-gray-200 relative" :class="{'border-b': active_vehicle == item}">
                    <Icon icon="akar-icons:plane" class="text-indigo-600 text-2xl inline-block"/>
                    <h4 class="text-lg font-semibold inline-block mx-3">
                        Epuero Aircraft {{ item }}
                        <span class="bg-green-100 text-green-800 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">Flight</span>
                    </h4>
                    <Icon :icon="active_vehicle == item ? 'akar-icons:chevron-down' : 'akar-icons:chevron-up'" class="absolute right-0 bottom-0 m-4 text-xl"/>
                </div>
                <div class="col-span-5 transition-all" :class="{'opacity-0 invisible h-0 hidden': active_vehicle != item}">
                    <div class="grid grid-cols-5">
                        <div class="p-4 border-b md:border-b-0 border-r-0 md:border-r border-gray-200 col-span-5 md:col-span-2">
                            <div class="w-full h-52 rounded-lg bg-gradient-to-tr cursor-pointer relative from-cyan-400 to-indigo-600 overflow-hidden">
                                <img src="/images/live/fire_dummy.webp" class="hover:scale-110 transition-all hover:opacity-50 object-cover object-center" alt="Fire live dummy">
                                <button type="button" class="absolute top-0 right-0 m-3 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                                    Share
                                </button>
                            </div>
                        </div>
                        <div class="p-4 bg-gray-100 border-r rounded-b-lg md:rounded-br-none md:rounded-br-lg border-gray-200 col-span-5 md:col-span-3 space-y-3 h-60 overflow-auto">
                            <h4 class="text-lg font-semibold">History Fires</h4>
                            <div data-modal-toggle="informationModal" class="cursor-pointer p-4 rounded-lg w-full relative bg-white flex items-center justify-between" v-for="(item, index) in 4" :key="index">
                                <div class="flex items-center gap-2">
                                    <Icon icon="bx:bxs-map-pin" class="text-2xl text-indigo-600 inline-block"/>
                                    <div class="inline-block leading-none">
                                        <h6 class="text-sm font-semibold">Hutan prigen</h6>
                                        <span class="text-xs text-gray-600">7°42'50.8"S 112°36'38.7"E</span>
                                    </div>
                                </div>
                                <div class="inline-block leading-none">
                                    <h6 class="text-sm font-semibold">Selasa, 15 April 2021</h6>
                                    <span class="text-xs text-gray-600">20:30 WIB</span>
                                </div>
                                <div class="inline-block">
                                    <Icon icon="clarity:times-circle-line" class="text-xl text-gray-500 hover:text-gray-700 cursor-pointer"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-6 bg-white rounded-lg grid grid-cols-5 gap-4">
                <div class="col-span-5 md:col-span-2 inline-block">
                    <div class="flex gap-2 items-center">
                        <h4 class="font-semibold">Analytics Data Report</h4>
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-auto p-2.5 pr-8 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Weekly</option>
                            <option value="month">Monthly</option>
                            <option value="year">Yearly</option>
                        </select>
                    </div>
                    <div class="w-full rounded-lg p-4 bg-indigo-700 mt-3 text-white relative">
                        <span class="text-sm">
                            Total forest fires in last 1 month, In indonesia as report Epuero
                        </span>
                        <h1 class="text-6xl font-semibold mt-8">05 <span class="text-sm font-normal">Fires</span></h1>
                        <Icon icon="akar-icons:fire" class="text-7xl absolute bottom-0 right-0 m-6 opacity-50"/>
                    </div>
                </div>
                <div class="col-span-5 md:col-span-3">
                    <example-chart/>
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
    name: "Welcome.vue",
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
