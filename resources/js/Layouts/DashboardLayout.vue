<template>
    <div class="grid grid-cols-6 bg-gray-50 h-screen">
<!--        col-span-6 sm:col-span-4 md:col-span-5-->
        <div class="transition-all bg-white" :class="{'-left-36 opacity-0 invisible hidden relative': !show_navbar, 'col-span-6 fixed sm:relative sm:col-span-2 md:col-span-1 z-20': show_navbar}">
            <aside class="w-full" aria-label="Sidebar">
                <div class="overflow-y-auto py-4 px-3 bg-white min-h-screen overflow-auto rounded dark:bg-gray-800 relative">
                    <a href="/app/home" class="flex items-center pl-2.5 mb-8 mt-4 mx-auto">
                        <img src="/images/logo-origin.png" class="mr-3 h-6 sm:h-7" alt="Flowbite Logo" />
                        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">EPUERO</span>
                    </a>
                    <ul class="space-y-3">
                        <li class="text-end inline-block md:hidden">
                            <button @click="show_navbar = !show_navbar" class="text-gray-900 relative bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-4 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                                <Icon icon="bx:menu-alt-left" class="text-xl inline-block"/>
                            </button>
                        </li>
                        <li>
                            <a href="/app/home" class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white"
                                :class="{'hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700': active != 'home', 'bg-gradient-to-r from-cyan-400 to-indigo-600 text-white hover:from-cyan-500 hover:to-indigo-700': active == 'home'}">
                                <svg class="w-6 h-6 transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                                <span class="ml-3">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="/app/fire" class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white"
                                :class="{'hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700': active != 'fire', 'bg-gradient-to-r from-cyan-400 to-indigo-600 text-white hover:from-cyan-500 hover:to-indigo-700': active == 'fire'}">
                                <Icon icon="akar-icons:fire" class="flex-shrink-0 w-6 h-6 transition duratishrink-0 w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"/>
                                <span class="flex-1 ml-3 whitespace-nowrap">Fire Detection</span>
                                <span class="inline-flex justify-center items-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                            </a>
                        </li>
                        <li>
                            <a href="/app/geograph" class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white"
                               :class="{'hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700': active != 'geocapture', 'bg-gradient-to-r from-cyan-400 to-indigo-600 text-white hover:from-cyan-500 hover:to-indigo-700': active == 'geocapture'}">
                                <Icon icon="gis:contour-map" class="flex-shrink-0 w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"/>
                                <span class="flex-1 ml-3 whitespace-nowrap">Geo Capture</span>
                                <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
                            </a>
                        </li>
                    </ul>
                    <div class="absolute bottom-0 left-0 p-4 w-full">
                        <ul class="space-y-3 mb-3">
                            <li>
                                <a href="/app/setting" class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white"
                                   :class="{'hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700': active != 'setting', 'bg-gradient-to-r from-cyan-400 to-indigo-600 text-white hover:from-cyan-500 hover:to-indigo-700': active == 'setting'}">
                                    <Icon icon="cil:cog" class="flex-shrink-0 w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"/>
                                    <span class="ml-3">Setting</span>
                                </a>
                            </li>
                        </ul>
                        <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="text-gray-700 gap-3 w-full justify-center bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                            <div class="relative w-8 h-8 overflow-hidden bg-gray-200 rounded-full dark:bg-gray-600">
                                <svg class="absolute w-12 h-12 text-gray-500 -left-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                            </div>
                            <span class="inline-block">Imam</span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                        <div id="dropdown" class="z-10 hidden w-full px-4">
                            <div class="bg-white w-full divide-y divide-gray-100 rounded shadow p-2 dark:bg-gray-700">
                                <div class="flex justify-start content-center gap-3">
                                    <div class="relative w-8 h-8 overflow-hidden bg-gray-200 rounded-full dark:bg-gray-600">
                                        <svg class="absolute w-12 h-12 text-gray-500 -left-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold text-sm text-gray-800">Imam Shofiuddin</h5>
                                        <span class="text-xs relative -top-2 text-gray-400">Admin</span>
                                    </div>
                                </div>
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                    <li>
                                        <a href="/app/profile" class="block px-4 py-2 hover:bg-gray-100 flex gap-2 content-center rounded dark:hover:bg-gray-600 dark:hover:text-white">
                                            <Icon icon="ant-design:user-outlined" class="inline-block text-xl self-center"/>
                                            <div>
                                                <h5 class="font-semibold text-sm text-gray-800">Profile</h5>
                                                <span class="text-xs relative -top-1 text-gray-400">View your profile</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 flex gap-2 content-center rounded dark:hover:bg-gray-600 dark:hover:text-white">
                                            <Icon icon="cil:cog" class="inline-block text-xl self-center"/>
                                            <div>
                                                <h5 class="font-semibold text-sm text-gray-800">Setting</h5>
                                                <span class="text-xs relative -top-1 text-gray-400">Account settings</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="text-center">
                                        <a href="#" class="block bg-red-500 px-4 py-2 hover:bg-red-600 text-white rounded dark:hover:bg-gray-600 dark:hover:text-white">
                                            <Icon icon="heroicons-outline:logout" class="inline-block text-lg"/>
                                            <span class="inline-block mx-2">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
        <div class="col-span-6 px-8 pb-8 min-h-screen overflow-auto" :class="{'sm:col-span-6': !show_navbar, 'sm:col-span-4 md:col-span-5': show_navbar}">
            <div class="w-full pt-6 pb-3 grid grid-cols-3 bg-gray-50 sticky top-0 z-10">
                <div class="col-span-2 flex content-center justify-start">
                    <button @click="show_navbar = !show_navbar" class="text-gray-900 relative inline-block -top-2 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-4 py-2.5 mr-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        <Icon icon="bx:menu-alt-left" class="text-xl inline-block"/>
                    </button>
                    <h1 class="inline-block text-2xl relative -top-1 font-semibold">{{ label }}</h1>
                </div>
                <div class="col-span-1 text-end">
                    <button @click="show_notification = !show_notification" type="button" class="p-2 mr-2 mb-2 text-sm relative font-medium text-gray-900 focus:outline-none bg-gray-50 rounded-lg hover:text-blue-700 focus:z-10 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        <Icon icon="clarity:notification-line" class="text-lg"/>
                        <div class="absolute w-3 h-3 bg-red-400 rounded-full right-1 top-1"></div>
                    </button>
                </div>
            </div>
            <div class="mt-4">
                <slot name="content"></slot>
            </div>
            <div class="pt-8">
                <img src="/images/logo-origin.png" class="w-12 inline-block" alt="Logo Origin"/>
                <div class="inline-block mx-2 text-gray-700">© 2022 Epuero™. All Rights Reserved.</div>
            </div>
        </div>
        <div id="notification-component" class="transition-all fixed w-full md:w-2/4 top-0 z-20 right-0 bottom-0" :class="{'-left-1/2 opacity-0 invisible': !show_notification}">
            <aside class="w-full" aria-label="Sidebar">
                <div class="overflow-y-auto bg-white shadow min-h-screen rounded dark:bg-gray-800 relative">
                    <div class="w-full md:w-2/4 z-20 bottom-0 fixed bg-white right-0 p-4 rounded-t-lg">
                        <button type="button" class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Read All
                        </button>
                    </div>
                    <div id="header-notification" class="relative sticky top-0 z-20 bg-white rounded-b-lg mb-2 p-6">
                        <h2 class="text-2xl font-semibold text-gray-600 inline-block">
                            Notifications
                            <span class="bg-blue-100 text-blue-800 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">12 Item</span>
                        </h2>
                        <div class="absolute right-0 top-0 p-6">
                            <Icon @click="show_notification = !show_notification" icon="clarity:times-circle-line" class="text-3xl text-gray-500 hover:text-gray-700 cursor-pointer"/>
                        </div>
                    </div>
                    <div id="notification-list" class="pt-3 w-full">
                        <notification-list/>
                    </div>
                </div>
            </aside>
        </div>
        <div id="informationModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden z-70 fixed top-0 right-0 left-0 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Informasi Kebakaran
                            </h3>
                        </div>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="informationModal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                    <div class="p-6 space-y-6 h-96 overflow-auto">
                        <div>
                            <p>Waktu : <span class="font-semibold">Monday, 20 April 2020 13:35</span></p>
                        </div>
                        <div>
                            <p>Lattitude : <span class="font-semibold">-7.553281</span></p>
                        </div>
                        <div>
                            <p>Longitude : <span class="font-semibold">112.700241</span></p>
                        </div>
                        <div>
                            <p>Map :</p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.691977074115!2d112.79156701477496!3d-7.2758470947483636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa10ea2ae883%3A0xbe22c55d60ef09c7!2sPoliteknik%20Elektronika%20Negeri%20Surabaya!5e0!3m2!1sid!2sid!4v1657307702438!5m2!1sid!2sid" class="w-full rounded-lg h-48" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                        <button data-modal-toggle="informationModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                        <button data-modal-toggle="informationModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Icon } from '@iconify/vue'
import NotificationList from '@/Components/Notification.vue'
export default {
    props: ['active', 'label'],
    name: "DashboardLayout.vue",
    data() {
        return {
            show_navbar: true,
            show_notification: false,
        }
    },
    components: {
        Icon,
        NotificationList,
    }
}
</script>
