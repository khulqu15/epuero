<template>
    <Head>
        <title>News - Epuero</title>
        <meta name="description" content="News - Eepis Plane Unit Operational Rescue Forest">
    </Head>
    <view-layout active="news">
        <template v-slot:content>
            <div class="relative pt-36 pb-12" id="news">
                <div class="md:container mx-auto relative z-20 px-2 md:px-12">

                </div>
            </div>
        </template>
    </view-layout>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3'
import ViewLayout from '@/Layouts/ViewLayout.vue'
import { Icon } from '@iconify/vue'
import Pagination from '@/Components/Pagination.vue'

export default {
    data() {
        return {
        }
    },
    components: {
        Head,
        Link,
        ViewLayout,
        Icon,
        Pagination,
    },
}

</script>

<style>
@import "../../../../css/customize.css";
</style>
