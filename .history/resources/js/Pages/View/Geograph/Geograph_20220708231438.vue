<template>
    <Head>
        <title>Geograph - Epuero</title>
        <meta name="description" content="Geograph - Eepis Plane Unit Operational Rescue Forest">
    </Head>
    <view-layout active="geograph">
        <template v-slot:content>
            <div class="relative pt-36 pb-12" id="geograph">
                <img src="/images/decoration/home2.webp" class="w-24 md:w-40 absolute z-20 -top-36 left-0" alt="Decoration2">
                <div class="md:container mx-auto relative z-20 px-2 md:px-12">
                    <div class="text-center py-4">
                        <h3 class="text-2xl font-semibold mb-2">Geograph Sample</h3>
                        <span class="text-sm">All you need to see geograp is there.</span>
                    </div>
                    <div class="bg-white rounded-lg p-4 shadow grid grid-cols-3 gap-4">
                        <div class="col-span-3 md:col-span-1">
                            <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Forest or Mountain Name">
                        </div>
                        <div class="col-span-3 md:col-span-1">
                            <input type="text" id="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Location">
                        </div>
                        <div class="col-span-3 md:col-span-1">
                            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose category</option>
                                <option value="mountain">Mountain</option>
                                <option value="forest">Forest</option>
                                <option value="jungle">Jungle</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="my-8 grid grid-cols-2">
                            <div class="col-span-2 md:col-span-1">
                                <div class="inline-block bg-white shadow pt-4 px-4 rounded-lg">
                                    <Icon icon="jam:mountain" class="text-5xl relative -top-3 text-indigo-700 inline-block"/>
                                    <div class="relative ml-4 inline-block">
                                        <h4 class="text-lg font-semibold">Gunung Arjuna</h4>
                                        <span class="text-sm -top-4 text-gray-600">Jawatimur</span>
                                    </div>
                                    <div class="relative -top-4 ml-12 inline-block">
                                        <div class="bg-indigo-100 py-2 px-4 rounded">
                                            <span class="text-indigo-600 font-semibold">12 Item</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-2 md:col-span-1 text-right py-4">
                                <button data-modal-toggle="mappingModal" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                        More detail
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="grid grid-cols-4 gap-6">
                            <div v-for="(item, index) in 4" class="w-full card-mapping h-72 relative rounded-lg overflow-hidden col-span-2 md:col-span-1" @mouseover="onShowMapping(item)">
                                <img :src="`/images/mapping/map${item}.png`" class="block absolute top-1/2 left-1/2 w-full h-full object-cover object-center -translate-x-1/2 -translate-y-1/2" :alt="`Map${item}`"/>
                                <div class="hoverable relative w-full h-full flex text-center bg-gradient-to-b from-indigo-600 to-cyan-400">
                                    <button @click="onShowMapping(item)" data-modal-toggle="mappingModal" type="button" class="inline-block w-full align-middle text-white bg-gradient-to-b from-indigo-600 to-cyan-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-lg px-5 py-2.5 text-center mr-2 mb-2">See Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="my-8 grid grid-cols-2">
                            <div class="col-span-2 md:col-span-1">
                                <div class="inline-block bg-white shadow pt-4 px-4 rounded-lg">
                                    <Icon icon="jam:mountain" class="text-5xl relative -top-3 text-indigo-700 inline-block"/>
                                    <div class="relative ml-4 inline-block">
                                        <h4 class="text-lg font-semibold">Hutan Trawas</h4>
                                        <span class="text-sm -top-4 text-gray-600">Jawatimur</span>
                                    </div>
                                    <div class="relative -top-4 ml-12 inline-block">
                                        <div class="bg-indigo-100 py-2 px-4 rounded">
                                            <span class="text-indigo-600 font-semibold">12 Item</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-2 md:col-span-1 text-right py-4">
                                <button data-modal-toggle="mappingModal" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                        More detail
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="grid grid-cols-4 gap-6">
                            <div v-for="(item, index) in 4" class="w-full card-mapping h-72 relative rounded-lg overflow-hidden col-span-2 md:col-span-1" @mouseover="onShowMapping(item)">
                                <img :src="`/images/mapping/map${item}.png`" class="block absolute top-1/2 left-1/2 w-full h-full object-cover object-center -translate-x-1/2 -translate-y-1/2" :alt="`Map${item}`"/>
                                <div class="hoverable relative w-full h-full flex text-center bg-gradient-to-b from-indigo-600 to-cyan-400">
                                    <button @click="onShowMapping(item)" data-modal-toggle="mappingModal" type="button" class="inline-block w-full align-middle text-white bg-gradient-to-b from-indigo-600 to-cyan-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-lg px-5 py-2.5 text-center mr-2 mb-2">See Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-8 grid grid-cols-3 gap-6">
                        <div>
                            <div class="w-full h-1 my-6 bg-gray-300"></div>
                        </div>
                        <div>
                            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg px-8 py-4 w-full text-center mr-2 mb-2">Load More</button>
                        </div>
                        <div>
                            <div class="w-full h-1 my-6 bg-gray-300"></div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </view-layout>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3'
import ViewLayout from '@/Layouts/ViewLayout.vue'
import { Icon } from '@iconify/vue'

export default {
    components: {
        Head,
        Link,
        ViewLayout,
        Icon,
    }
}

</script>

<style>
@import "../../../../css/customize.css";
</style>
