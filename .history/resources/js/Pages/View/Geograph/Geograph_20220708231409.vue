<template>
    <Head>
        <title>Geograph - Epuero</title>
        <meta name="description" content="Geograph - Eepis Plane Unit Operational Rescue Forest">
    </Head>
    <view-layout active="geograph">
        <template v-slot:content>
            <div class="pt-36">
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
