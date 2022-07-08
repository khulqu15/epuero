<template>
  <div>
    <nav class="bg-white fixed w-full z-40 border-gray-200 px-2 sm:px-4 pt-2.5 pb-2 rounded dark:bg-gray-800">
        <div class="md:container py-4 flex flex-wrap justify-between items-center mx-auto">
        <a href="#" class="flex items-center">
            <img src="/images/logo.webp" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Epuero</span>
        </a>
        <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
            <li>
                <a href="#"
                class="block py-2 pr-4 pl-3 my-2"
                :class="{'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white': active == 'features',
                'text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700': active != 'features'}"
                aria-current="page">
                    Features
                </a>
            </li>
            <li>
                <a href="#"
                class="block py-2 pr-4 pl-3 my-2"
                :class="{'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white': active == 'geograph',
                'text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700': active != 'geograph'}"
                aria-current="page">
                    Geograph
                </a>
            </li>
            <li>
                <a href="#"
                class="block py-2 pr-4 pl-3 my-2"
                :class="{'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white': active == 'platform',
                'text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700': active != 'platform'}"
                aria-current="page">
                    Platform
                </a>
            </li>
            <li>
                <a href="#"
                class="block py-2 pr-4 pl-3 my-2"
                :class="{'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white': active == 'method',
                'text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700': active != 'method'}"
                aria-current="page">
                    Method
                </a>
            </li>
            <li>
                <button @click="goPage('login')" type="button" class="w-full md:w-auto text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Login</button>
            </li>
            </ul>
        </div>
        </div>
    </nav>
  </div>
  <div>
    <slot name="content"></slot>
  </div>
  <div>
    <footer class="relative w-full bg-slate-900">
        <div class="grid grid-cols-2 border-b border-gray-600">
            <div class="col-span-2 md:col-span-1 h-144 w-full relative border-r-0 md:border-r border-gray-600">
                <div class="h-2/5 border-b grid grid-cols-3 border-gray-600 py-16 px-4 md:px-12">
                    <div class="col-span-1 text-center">
                        <img src="/images/logo-white.png" class="w-28 mt-4 inline-block" alt="Logo white">
                    </div>
                    <div class="col-span-2">
                        <h3 class="text-white relative top-2 text-4xl font-bold italic inline-block mb-2">EPUERO</h3>
                        <span class="text-sm text-gray-500 mt-2 inline-block">
                            Eepis Plane Unit Operational Rescue Forest In ornare purus eu mauris cursus, nec interdum
                        </span>
                    </div>
                </div>
                <div class="h-auto md:h-3/5 grid grid-cols-3 gap-8 sm:gap-6 sm:grid-cols-3 py-16 px-4 md:px-12">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Resources</h2>
                        <ul class="text-gray-500 dark:text-gray-600 text-sm">
                            <li class="mb-2">
                                <a href="#" class="hover:underline">Why Epuero ?</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="hover:underline">Learning</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="hover:underline">Documentation</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="hover:underline">Guides</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="hover:underline">Area Workspace</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Temmate</h2>
                        <ul class="text-gray-500 dark:text-gray-600 text-sm">
                            <li class="mb-2">
                                <a href="#" class="hover:underline">Software Engineer</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="hover:underline">UAV Engineer</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="hover:underline">Electronic Engineer</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="hover:underline">Administratior</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="hover:underline">Designer</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Follow us</h2>
                        <ul class="text-gray-500 dark:text-gray-600 text-sm">
                            <li class="mb-2">
                                <a href="#" class="hover:underline">Linkedin</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="hover:underline">Facebook</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="hover:underline">Twitter</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="hover:underline">Github</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="hover:underline">Instagram</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-span-2 md:col-span-1 h-144 py-12 md:py-24 px-12">
                <h5 class="font-semibold text-lg text-indigo-400">Demo</h5>
                <h1 class="font-bold text-5xl text-white">Request a Demo</h1>
                <div class="mt-8">
                    <form>
                        <div class="relative">
                            <input type="text" id="request-demo" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your email" required>
                            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <Icon icon="akar-icons:send" class="text-lg"/>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="pt-36 px-12 pb-12">
            <h2 class="text-left font-semibold text-white text-xl">2022 Developed by Epuero TIM</h2>
        </div>
    </footer>
  </div>
</template>

<script>
import { Icon } from '@iconify/vue'
export default {
    props: ['active'],
    components: {
        Icon
    },
    methods: {
        goPage(route_name) {
            this.$inertia.get(this.route(route_name))
        }
    }
}
</script>
