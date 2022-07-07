<template>
    <view-layout active="features">
        <template v-slot:content>
            <div id="animation-carousel" class="relative" data-carousel="static">

                <div class="overflow-hidden relative h-162 rounded-lg">
                    <div class="hidden duration-[12500ms] ease-linear" data-carousel-item="active">
                        <img src="/images/news/news1.jpg" class="block absolute top-1/2 left-1/2 w-full h-full -translate-x-1/2 -translate-y-1/2" alt="News1"/>
                        <div class="caption-header absolute left-12 bottom-7 inline-block px-6 py-4 rounded-lg bg-gray-200 w-96 sm:w-full md:w-144">
                            <h3 class="text-lg font-semibold mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas at, rem asperiores voluptatibus harum est eius!</h3>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, laborum in. Illum minus quibusdam recusandae rerum at molestias dolorem est!</p>
                        </div>
                    </div>
                    <div class="hidden duration-[12500ms] ease-linear" data-carousel-item>
                        <img src="/images/news/news2.jpg" class="block absolute top-1/2 left-1/2 w-full h-full -translate-x-1/2 -translate-y-1/2" alt="News2"/>
                        <div class="caption-header absolute left-12 bottom-7 inline-block px-6 py-4 rounded-lg bg-gray-200 w-96 sm:w-full md:w-144">
                            <h3 class="text-lg font-semibold mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas at, rem asperiores voluptatibus harum est eius!</h3>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, laborum in. Illum minus quibusdam recusandae rerum at molestias dolorem est!</p>
                        </div>
                    </div>
                    <div class="hidden duration-[12500ms] ease-linear" data-carousel-item>
                        <img src="/images/news/news3.jpg" class="block absolute top-1/2 left-1/2 w-full h-full -translate-x-1/2 -translate-y-1/2" alt="News3"/>
                        <div class="caption-header absolute left-12 bottom-7 inline-block px-6 py-4 rounded-lg bg-gray-200 w-96 sm:w-full md:w-144">
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
