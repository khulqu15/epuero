<template>
    <view-layout active="features">
        <template #content>
            <div id="animation-carousel" class="relative" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="overflow-hidden relative h-48 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quos tempore nihil facere quibusdam possimus, in nisi velit numquam consectetur asperiores! Possimus veniam nulla soluta ad minima laborum debitis sapiente, accusantium ducimus magnam inventore beatae magni laudantium consequatur perferendis aut amet vel hic distinctio quia ullam officia! Totam laboriosam doloremque ratione iusto blanditiis vitae, aut dolore! Blanditiis, ab quisquam facilis fugit natus porro, odit numquam culpa perferendis perspiciatis, nihil obcaecati veniam. Quibusdam accusamus et ipsum? Reprehenderit laborum commodi, libero consectetur est nam doloremque velit magni repellendus temporibus hic sapiente quasi ut quos quam tempora neque dolores voluptate tempore qui? Architecto.
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quos tempore nihil facere quibusdam possimus, in nisi velit numquam consectetur asperiores! Possimus veniam nulla soluta ad minima laborum debitis sapiente, accusantium ducimus magnam inventore beatae magni laudantium consequatur perferendis aut amet vel hic distinctio quia ullam officia! Totam laboriosam doloremque ratione iusto blanditiis vitae, aut dolore! Blanditiis, ab quisquam facilis fugit natus porro, odit numquam culpa perferendis perspiciatis, nihil obcaecati veniam. Quibusdam accusamus et ipsum? Reprehenderit laborum commodi, libero consectetur est nam doloremque velit magni repellendus temporibus hic sapiente quasi ut quos quam tempora neque dolores voluptate tempore qui? Architecto.
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quos tempore nihil facere quibusdam possimus, in nisi velit numquam consectetur asperiores! Possimus veniam nulla soluta ad minima laborum debitis sapiente, accusantium ducimus magnam inventore beatae magni laudantium consequatur perferendis aut amet vel hic distinctio quia ullam officia! Totam laboriosam doloremque ratione iusto blanditiis vitae, aut dolore! Blanditiis, ab quisquam facilis fugit natus porro, odit numquam culpa perferendis perspiciatis, nihil obcaecati veniam. Quibusdam accusamus et ipsum? Reprehenderit laborum commodi, libero consectetur est nam doloremque velit magni repellendus temporibus hic sapiente quasi ut quos quam tempora neque dolores voluptate tempore qui? Architecto.
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quos tempore nihil facere quibusdam possimus, in nisi velit numquam consectetur asperiores! Possimus veniam nulla soluta ad minima laborum debitis sapiente, accusantium ducimus magnam inventore beatae magni laudantium consequatur perferendis aut amet vel hic distinctio quia ullam officia! Totam laboriosam doloremque ratione iusto blanditiis vitae, aut dolore! Blanditiis, ab quisquam facilis fugit natus porro, odit numquam culpa perferendis perspiciatis, nihil obcaecati veniam. Quibusdam accusamus et ipsum? Reprehenderit laborum commodi, libero consectetur est nam doloremque velit magni repellendus temporibus hic sapiente quasi ut quos quam tempora neque dolores voluptate tempore qui? Architecto.
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quos tempore nihil facere quibusdam possimus, in nisi velit numquam consectetur asperiores! Possimus veniam nulla soluta ad minima laborum debitis sapiente, accusantium ducimus magnam inventore beatae magni laudantium consequatur perferendis aut amet vel hic distinctio quia ullam officia! Totam laboriosam doloremque ratione iusto blanditiis vitae, aut dolore! Blanditiis, ab quisquam facilis fugit natus porro, odit numquam culpa perferendis perspiciatis, nihil obcaecati veniam. Quibusdam accusamus et ipsum? Reprehenderit laborum commodi, libero consectetur est nam doloremque velit magni repellendus temporibus hic sapiente quasi ut quos quam tempora neque dolores voluptate tempore qui? Architecto.
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="hidden">Previous</span>
                    </span>
                </button>
                <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <span class="hidden">Next</span>
                    </span>
                </button>
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
