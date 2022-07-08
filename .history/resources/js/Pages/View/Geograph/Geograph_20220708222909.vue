<template>
    <view-layout active="geograph">
        <Head>
            <title>Geograph - Epuero</title>
            <meta name="description" content="Geograph - Eepis Plane Unit Operational Rescue Forest">
        </Head>
        <template v-slot:content></template>
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
