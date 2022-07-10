<template>
    <dashboard-layout active="geocapture" label="Geo Capture">
        <template v-slot:content>
            <under-construction/>
        </template>
    </dashboard-layout>
</template>

<script>
import { Icon } from '@iconify/vue'
import DashboardLayout from "@/Layouts/DashboardLayout"
import ExampleChart from "@/Components/ExampleChart";
import UnderConstruction from "@/Components/UnderConstruction";
export default {
    name: "Geograph/Index.vue",
    data() {
        return {
            active_vehicle: 1,
        }
    },
    components: {
        DashboardLayout,
        ExampleChart,
        Icon,
        UnderConstruction,
    }
}
</script>

<style scoped>

</style>
