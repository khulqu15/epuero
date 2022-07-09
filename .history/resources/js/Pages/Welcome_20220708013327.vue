<template>
    <view-layout>
        <template v-slot:content>

            <div id="animation-carousel" class="relative" data-carousel="static">
                <div class="overflow-hidden relative h-162 rounded-lg">
                    <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                        <img src="/images/news/news1.jpg" class="block absolute top-1/2 left-1/2 w-full h-full object-cover	object-center -translate-x-1/2 -translate-y-1/2" alt="News1"/>
                        <div class="caption-header absolute z-40 left-12 bottom-7 inline-block px-6 py-4 rounded-lg bg-gray-200 w-96 sm:w-144">
                            <h3 class="text-lg font-semibold mb-3">EPUERO (Eepis Plane Unit Operational Rescue Forest)</h3>
                            <p class="text-sm">Semangat walaupun semuanya yang ada hanyalah rintangan.</p>
                        </div>
                    </div>
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="/images/news/news2.jpg" class="block absolute top-1/2 left-1/2 w-full h-full object-cover	object-center -translate-x-1/2 -translate-y-1/2" alt="News2"/>
                        <div class="caption-header absolute z-40 left-12 bottom-7 inline-block px-6 py-4 rounded-lg bg-gray-200 w-96 sm:w-144">
                            <h3 class="text-lg font-semibold mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas at, rem asperiores voluptatibus harum est eius!</h3>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, laborum in. Illum minus quibusdam recusandae rerum at molestias dolorem est!</p>
                        </div>
                    </div>
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="/images/news/news3.jpg" class="block absolute top-1/2 left-1/2 w-full h-full object-cover	object-center -translate-x-1/2 -translate-y-1/2" alt="News3"/>
                        <div class="caption-header absolute z-40 left-12 bottom-7 inline-block px-6 py-4 rounded-lg bg-gray-200 w-96 sm:w-144">
                            <h3 class="text-lg font-semibold mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas at, rem asperiores voluptatibus harum est eius!</h3>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, laborum in. Illum minus quibusdam recusandae rerum at molestias dolorem est!</p>
                        </div>
                    </div>
                </div>
                <div class="absolute bottom-5 z-30 mx-4">
                    <button type="button" class="dots-header w-1 h-4 rounded-lg" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="dots-header w-1 h-4 rounded-lg" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="dots-header w-1 h-4 rounded-lg" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                </div>
            </div>

            <div class="relative pt-4 pb-12">
                <img src="/images/decoration/home1.webp" class="w-24 md:w-40 absolute z-30 -top-36 right-0" alt="Decoration1">
                <div class="md:container mx-auto relative z-40 px-2 md:px-12">
                    <div class="text-center py-4">
                        <h3 class="text-2xl font-semibold mb-2">Amazing Features</h3>
                        <span class="text-sm">All you need know our features is there.</span>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-12 grid grid-cols-4 gap-4">
                        <div class="col-span-4 md:col-span-1 lg:col-span-1 text-center">
                            <Icon icon="akar-icons:fire" class="text-5xl inline-block text-indigo-600"/>
                            <h3 class="text-xl mb-2 mt-1 font-semibold">Auto Detect Fire</h3>
                            <span class="text-sm text-gray-500">An incredible set of building blocks with dark mode support.</span>
                        </div>
                        <div class="col-span-4 md:col-span-1 lg:col-span-1 text-center">
                            <Icon icon="gis:contour-map" class="text-5xl inline-block text-indigo-600"/>
                            <h3 class="text-xl mb-2 mt-1 font-semibold">Geolocation Capture</h3>
                            <span class="text-sm text-gray-500">An incredible set of building blocks with dark mode support.</span>
                        </div>
                        <div class="col-span-4 md:col-span-1 lg:col-span-1 text-center">
                            <Icon icon="fluent:top-speed-20-regular" class="text-5xl inline-block text-indigo-600"/>
                            <h3 class="text-xl mb-2 mt-1 font-semibold">Realtime Data</h3>
                            <span class="text-sm text-gray-500">An incredible set of building blocks with dark mode support.</span>
                        </div>
                        <div class="col-span-4 md:col-span-1 lg:col-span-1 text-center">
                            <Icon icon="bi:phone" class="text-5xl inline-block text-indigo-600"/>
                            <h3 class="text-xl mb-2 mt-1 font-semibold">Responsive App</h3>
                            <span class="text-sm text-gray-500">An incredible set of building blocks with dark mode support.</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative pt-4 pb-12">
                <img src="/images/decoration/home2.webp" class="w-24 md:w-40 absolute z-30 -top-36 left-0" alt="Decoration2">
                <div class="md:container mx-auto relative z-40 px-2 md:px-12">
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
                    <div class="my-8 grid grid-cols-2">
                        <div class="col-span-2 md:col-span-1">
                            <div class="inline-block bg-white shadow pt-4 px-4 rounded-lg">
                                <Icon icon="jam:mountain" class="text-5xl relative -top-3 text-indigo-700 inline-block"/>
                                <div class="relative ml-4 inline-block">
                                    <h4 class="text-lg font-semibold">Gunung Arjuno</h4>
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
                            <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    More detail
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-6">
                        <div v-for="(item, index) in 4" class="w-full h-64 relative rounded-lg">
                            <div cla></div>
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
    data() {
        return {

        }
    },
    components: {
        Link,
        Icon,
        Head,
        ViewLayout,
    }
}
</script>

<style>
@import "../../css/customize.css";
</style>
