<template>
    <view-layout active="features">
        <template v-slot:content>
            <div id="animation-carousel" class="relative" data-carousel="static">

                <div class="overflow-hidden relative h-162 rounded-lg">
                    <div class="hidden duration-[12500ms] ease-linear" data-carousel-item="active">
                        <img src="/images/news/news1.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="News1"/>
                    </div>
                    <div class="hidden duration-[12500ms] ease-linear" data-carousel-item>
                        <img src="/images/news/news2.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="News2"/>
                    </div>
                    <div class="hidden duration-[12500ms] ease-linear" data-carousel-item>
                        <img src="/images/news/news3.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="News3"/>
                    </div>
                </div>

                <div class="absolute bottom-5 z-30 mx-4">
                    <button type="button" class="w-1 scale-110 h-4 rounded-lg bg-indigo-700 block my-2" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-1 scale-100 h-4 rounded-lg bg-gray-500 block my-2" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-1 scale-100 h-4 rounded-lg bg-gray-500 block my-2" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
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
