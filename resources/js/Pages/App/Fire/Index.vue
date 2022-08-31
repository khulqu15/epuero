<template>
    <dashboard-layout active="fire" label="Fire Detection">
        <template v-slot:content>

<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-center">
          <thead class="border-b bg-gray-50">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Date/Time
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Latitude
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Longitude
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Altitude
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Location
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="item in fire_data" class="bg-white border-b">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ item['time'] }}</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{ item['latitude'] }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{ item['longitude'] }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{ item['altitude'] }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{ item['location'] }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                <div class="flex flex-row items-center justify-center gap-3">
                    <div class="flex space-x-2 justify-center">
                        <button type="button" class="inline-block px-3 py-1.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Show</button>
                    </div>
                    <div class="flex space-x-2 justify-center">
                        <button type="button" class="inline-block px-3 py-1.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">Delete</button>
                    </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
        </template>
    </dashboard-layout>
</template>

<script>
import { Icon } from '@iconify/vue'
import DashboardLayout from "@/Layouts/DashboardLayout"
import ExampleChart from "@/Components/ExampleChart"
import UnderConstruction from "@/Components/UnderConstruction"
import axios from 'axios'

export default {
    name: "Fire/Index.vue",
    props : {
        fire_data: Array
    },
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
