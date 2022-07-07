<template>
    <view-layout active="features">
        <h1>Welcome to EPUERO WEB</h1>
        <Link :href="route('login')" class="text-sm text-blue-600">
            Login Disini
        </Link>
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
