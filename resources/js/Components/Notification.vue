<template>
    <div>
        <div id="filter-notification" class="grid gap-3 grid-cols-6 px-6 bg-white">
            <div class="col-span-4">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="search" id="default-search" class="block p-3 text-sm pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
                </div>
            </div>
            <div class="col-span-2 relative">
                <button type="button" data-dropdown-toggle="sort-notification-dropdown" class="text-gray-900 bg-gray-50 w-full text-center border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-3 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    <Icon icon="bi:sort-down-alt" class="text-xl inline-block"/>
                    <span class="inline-block mx-2">Sorting</span>
                </button>
                <div id="sort-notification-dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-full dark:bg-gray-700">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Newest</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Oldest</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full relative h-fit">
            <div id="list-notification" class="absolute inline-block pb-32 w-full p-4 top-0 bottom-0 rounded-t-lg mt-3 h-fit bg-gradient-to-b from-gray-100 to-white overflow-auto space-y-3 p-6">
                <div v-for="(item, index) in 12" data-modal-toggle="informationModal" class="cursor-pointer bg-white w-full transition-all p-3 rounded-lg shadow hover:shadow-lg flex gap-2">
                    <div class="bg-red-100 rounded h-8 w-8 p-1 text-center self-center">
                        <Icon icon="akar-icons:fire" class="inline-block mx-auto text-red-600"/>
                    </div>
                    <div>
                        <h6 class="font-semibold">Kebakaran hutan arjuna</h6>
                        <span class="text-sm mt-2 text-gray-500">-7.553281, 112.700241</span>
                    </div>
                    <div class="self-end">
                        <span class="text-sm mt-2 text-gray-500">-1 jam yang lalu</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Icon } from '@iconify/vue'
export default {
    name: "Notification.vue",
    components: {
        Icon,
    }
}
</script>

<style scoped>

</style>
