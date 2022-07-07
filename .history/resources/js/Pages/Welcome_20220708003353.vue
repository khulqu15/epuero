<template>
    <view-layout active="features">
        <template v-slot:content>
            <div id="animation-carousel" class="relative" data-carousel="static">
                <div class="overflow-hidden relative h-162 rounded-lg">
                    <div class="hidden duration-[12500ms] ease-linear" data-carousel-item="active">
                        <img src="/images/news/news1.jpg" class="block absolute top-1/2 left-1/2 w-full h-full object-cover	object-center -translate-x-1/2 -translate-y-1/2" alt="News1"/>
                        <div class="caption-header absolute z-40 left-12 bottom-7 inline-block px-6 py-4 rounded-lg bg-gray-200 w-96 sm:w-full md:w-144">
                            <h3 class="text-lg font-semibold mb-3">EPUERO (Eepis Plane Unit Operational Rescue Forest)</h3>
                            <p class="text-sm">Semangat walaupun semuanya yang ada hanyalah rintangan.</p>
                        </div>
                    </div>
                    <div class="hidden duration-[12500ms] ease-linear" data-carousel-item>
                        <img src="/images/news/news2.jpg" class="block absolute top-1/2 left-1/2 w-full h-full object-cover	object-center -translate-x-1/2 -translate-y-1/2" alt="News2"/>
                        <div class="caption-header absolute z-40 left-12 bottom-7 inline-block px-6 py-4 rounded-lg bg-gray-200 w-96 sm:w-full md:w-144">
                            <h3 class="text-lg font-semibold mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas at, rem asperiores voluptatibus harum est eius!</h3>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, laborum in. Illum minus quibusdam recusandae rerum at molestias dolorem est!</p>
                        </div>
                    </div>
                    <div class="hidden duration-[12500ms] ease-linear" data-carousel-item>
                        <img src="/images/news/news3.jpg" class="block absolute top-1/2 left-1/2 w-full h-full object-cover	object-center -translate-x-1/2 -translate-y-1/2" alt="News3"/>
                        <div class="caption-header absolute z-40 left-12 bottom-7 inline-block px-6 py-4 rounded-lg bg-gray-200 w-96 sm:w-full md:w-144">
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
            <div class="relative pt-4 pb-8">
                <img src="/images/decoration/home1.webp" class="w-36 sm:w-24 md:w-40 absolute z-30 -top-36 right-0" alt="Decoration1">
                <div class="text-center py-4">
                    <h3 class="text-2xl font-semibold mb-2">Amazing Features</h3>
                    <p class="text-sm">All you need know our features  is there.</p>
                </div>
                <div class="md:container mx-auto relative z-40 px-2 md:px-12">
                    <div class="bg-white shadow-lg rounded-lg p-8 grid grid-cols-4 gap-4">
                        <div class="xs:col-span-2 md:col-span-1 lg:col-span-1">Lorem ipsum dolor sit amet.</div>
                        <div class="xs:col-span-2 md:col-span-1 lg:col-span-1">Lorem ipsum dolor sit amet.</div>
                        <div class="xs:col-span-2 md:col-span-1 lg:col-span-1">Lorem ipsum dolor sit amet.</div>
                        <div class="xs:col-span-2 md:col-span-1 lg:col-span-1">Lorem ipsum dolor sit amet.</div>
                    </div>
                </div>
            </div>
        </template>
    </view-layout>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3'
import ViewLayout from '@/Layouts/ViewLayout.vue'

export default {
    data() {
        return {

        }
    },
    components: {
        Link,
        Head,
        ViewLayout,
    }
}
</script>

<style>
@import "../../css/customize.css";
</style>
