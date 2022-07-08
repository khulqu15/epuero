<template>
    <view-layout>
        <template v-slot:content>
            <div class="min-h-screen bg-white w-full relative mb-8">
                <img src="/images/fire/cover.webp" class="block absolute top-1/2 left-1/2 w-full h-full object-cover opacity-30 object-center -translate-x-1/2 -translate-y-1/2" alt="Cover"/>
                <div class="absolute top-2 left-0 w-full h-full bg-gradient-to-b from-transparent via-transparent to-white"></div>
                <div class="md:container mx-auto relative py-24 px-12 grid grid-cols-2 place-content-center min-h-screen">
                    <div class="col-span-2 md:col-span-1 px-8">
                        <h3 class="text-5xl font-bold self-center mb-4">Eepis Plane Unit Operational Rescue Forest </h3>
                        <p class="text-sm text-gray-800">Pellentesque fringilla diam ligula, ac consequat est tempus eu. Morbi vel malesuada nunc. Vestibulum sit amet orci lacus. Praesent congue luctus turpis in blandit. Etiam mollis rutrum metus at pellentesque. </p>
                        <div class="mt-8">
                            <button type="button" class="text-white text-sm bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg px-8 py-3 text-center mr-2 mb-2 ">
                                Monitoring
                            </button>
                            <button type="button" class="py-3 px-8 text-sm mr-2 mb-2 font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                About Us
                            </button>
                        </div>
                    </div>
                    <div class="col-span-2 md:col-span-1 relative px-8">
                        <img src="/images/fire/image1.webp" class="w-3/4 md:w-1/2" alt="Image Fire">
                        <div class="absolute left-1/2 top-0"></div>
                    </div>
                </div>
            </div>

            <div id="animation-carousel" class="relative" data-carousel="static">
                <div class="overflow-hidden relative h-162 rounded-lg">
                    <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                        <img src="/images/news/news1.jpg" class="block absolute top-1/2 left-1/2 w-full h-full object-cover	object-center -translate-x-1/2 -translate-y-1/2" alt="News1"/>
                        <div class="caption-header absolute z-20 left-12 bottom-7 inline-block px-6 py-4 rounded-lg bg-gray-200 w-96 sm:w-1/2">
                            <h3 class="text-lg font-semibold mb-3">EPUERO (Eepis Plane Unit Operational Rescue Forest)</h3>
                            <p class="text-sm">Semangat walaupun semuanya yang ada hanyalah rintangan.</p>
                        </div>
                    </div>
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="/images/news/news2.jpg" class="block absolute top-1/2 left-1/2 w-full h-full object-cover	object-center -translate-x-1/2 -translate-y-1/2" alt="News2"/>
                        <div class="caption-header absolute z-20 left-12 bottom-7 inline-block px-6 py-4 rounded-lg bg-gray-200 w-96 sm:w-1/2">
                            <h3 class="text-lg font-semibold mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas at, rem asperiores voluptatibus harum est eius!</h3>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, laborum in. Illum minus quibusdam recusandae rerum at molestias dolorem est!</p>
                        </div>
                    </div>
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="/images/news/news3.jpg" class="block absolute top-1/2 left-1/2 w-full h-full object-cover	object-center -translate-x-1/2 -translate-y-1/2" alt="News3"/>
                        <div class="caption-header absolute z-20 left-12 bottom-7 inline-block px-6 py-4 rounded-lg bg-gray-200 w-96 sm:w-1/2">
                            <h3 class="text-lg font-semibold mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas at, rem asperiores voluptatibus harum est eius!</h3>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, laborum in. Illum minus quibusdam recusandae rerum at molestias dolorem est!</p>
                        </div>
                    </div>
                </div>
                <div class="absolute bottom-5 z-20 mx-4">
                    <button type="button" class="dots-header w-1 h-4 rounded-lg" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="dots-header w-1 h-4 rounded-lg" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="dots-header w-1 h-4 rounded-lg" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                </div>
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

            <div class="relative pt-4 pb-12">
                <img src="/images/decoration/home1.webp" class="w-24 md:w-40 absolute z-20 -top-36 right-0" alt="Decoration1">
                <div class="md:container mx-auto relative z-20 px-2 md:px-12">
                    <div class="text-center py-4">
                        <h3 class="text-2xl font-semibold mb-2">Amazing Features</h3>
                        <span class="text-sm">All you need know our features is there.</span>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-12 grid grid-cols-4 gap-4">
                        <div class="col-span-4 md:col-span-1 lg:col-span-1 text-center">
                            <Icon icon="akar-icons:fire" class="text-5xl inline-block text-indigo-600"/>
                            <h3 class="text-xl mb-2 mt-1 font-semibold">Auto Detect Fire</h3>
                            <span class="text-sm text-gray-500">An incredible set of building blocks with dark mode support.</span>
                        </div>
                        <div class="col-span-4 md:col-span-1 lg:col-span-1 text-center">
                            <Icon icon="gis:contour-map" class="text-5xl inline-block text-indigo-600"/>
                            <h3 class="text-xl mb-2 mt-1 font-semibold">Geolocation Capture</h3>
                            <span class="text-sm text-gray-500">An incredible set of building blocks with dark mode support.</span>
                        </div>
                        <div class="col-span-4 md:col-span-1 lg:col-span-1 text-center">
                            <Icon icon="fluent:top-speed-20-regular" class="text-5xl inline-block text-indigo-600"/>
                            <h3 class="text-xl mb-2 mt-1 font-semibold">Realtime Data</h3>
                            <span class="text-sm text-gray-500">An incredible set of building blocks with dark mode support.</span>
                        </div>
                        <div class="col-span-4 md:col-span-1 lg:col-span-1 text-center">
                            <Icon icon="bi:phone" class="text-5xl inline-block text-indigo-600"/>
                            <h3 class="text-xl mb-2 mt-1 font-semibold">Responsive App</h3>
                            <span class="text-sm text-gray-500">An incredible set of building blocks with dark mode support.</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative pt-4 pb-12">
                <img src="/images/decoration/home2.webp" class="w-24 md:w-40 absolute z-20 -top-36 left-0" alt="Decoration2">
                <div class="md:container mx-auto relative z-20 px-2 md:px-12">
                    <div class="text-center py-4">
                        <h3 class="text-2xl font-semibold mb-2">Geograph Sample</h3>
                        <span class="text-sm">All you need to see geograp is there.</span>
                    </div>
                    <div class="bg-white rounded-lg p-4 shadow grid grid-cols-3 gap-4">
                        <div class="col-span-3 md:col-span-1">
                            <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Forest or Mountain Name">
                        </div>
                        <div class="col-span-3 md:col-span-1">
                            <input type="text" id="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Location">
                        </div>
                        <div class="col-span-3 md:col-span-1">
                            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose category</option>
                                <option value="mountain">Mountain</option>
                                <option value="forest">Forest</option>
                                <option value="jungle">Jungle</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="my-8 grid grid-cols-2">
                            <div class="col-span-2 md:col-span-1">
                                <div class="inline-block bg-white shadow pt-4 px-4 rounded-lg">
                                    <Icon icon="jam:mountain" class="text-5xl relative -top-3 text-indigo-700 inline-block"/>
                                    <div class="relative ml-4 inline-block">
                                        <h4 class="text-lg font-semibold">Gunung Arjuna</h4>
                                        <span class="text-sm -top-4 text-gray-600">Jawatimur</span>
                                    </div>
                                    <div class="relative -top-4 ml-12 inline-block">
                                        <div class="bg-indigo-100 py-2 px-4 rounded">
                                            <span class="text-indigo-600 font-semibold">12 Item</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-2 md:col-span-1 text-right py-4">
                                <button data-modal-toggle="mappingModal" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                        More detail
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="grid grid-cols-4 gap-6">
                            <div v-for="(item, index) in 4" class="w-full card-mapping h-72 relative rounded-lg overflow-hidden col-span-2 md:col-span-1" @mouseover="onShowMapping(item)">
                                <img :src="`/images/mapping/map${item}.png`" class="block absolute top-1/2 left-1/2 w-full h-full object-cover object-center -translate-x-1/2 -translate-y-1/2" :alt="`Map${item}`"/>
                                <div class="hoverable relative w-full h-full flex text-center bg-gradient-to-b from-indigo-600 to-cyan-400">
                                    <button @click="onShowMapping(item)" data-modal-toggle="mappingModal" type="button" class="inline-block w-full align-middle text-white bg-gradient-to-b from-indigo-600 to-cyan-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-lg px-5 py-2.5 text-center mr-2 mb-2">See Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="my-8 grid grid-cols-2">
                            <div class="col-span-2 md:col-span-1">
                                <div class="inline-block bg-white shadow pt-4 px-4 rounded-lg">
                                    <Icon icon="jam:mountain" class="text-5xl relative -top-3 text-indigo-700 inline-block"/>
                                    <div class="relative ml-4 inline-block">
                                        <h4 class="text-lg font-semibold">Hutan Trawas</h4>
                                        <span class="text-sm -top-4 text-gray-600">Jawatimur</span>
                                    </div>
                                    <div class="relative -top-4 ml-12 inline-block">
                                        <div class="bg-indigo-100 py-2 px-4 rounded">
                                            <span class="text-indigo-600 font-semibold">12 Item</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-2 md:col-span-1 text-right py-4">
                                <button data-modal-toggle="mappingModal" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                        More detail
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="grid grid-cols-4 gap-6">
                            <div v-for="(item, index) in 4" class="w-full card-mapping h-72 relative rounded-lg overflow-hidden col-span-2 md:col-span-1" @mouseover="onShowMapping(item)">
                                <img :src="`/images/mapping/map${item}.png`" class="block absolute top-1/2 left-1/2 w-full h-full object-cover object-center -translate-x-1/2 -translate-y-1/2" :alt="`Map${item}`"/>
                                <div class="hoverable relative w-full h-full flex text-center bg-gradient-to-b from-indigo-600 to-cyan-400">
                                    <button @click="onShowMapping(item)" data-modal-toggle="mappingModal" type="button" class="inline-block w-full align-middle text-white bg-gradient-to-b from-indigo-600 to-cyan-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-lg px-5 py-2.5 text-center mr-2 mb-2">See Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-8 grid grid-cols-3 gap-6">
                        <div>
                            <div class="w-full h-1 my-6 bg-gray-300"></div>
                        </div>
                        <div>
                            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg px-8 py-4 w-full text-center mr-2 mb-2">Load More</button>
                        </div>
                        <div>
                            <div class="w-full h-1 my-6 bg-gray-300"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative pt-4 pb-12">
                <div class="md:container mx-auto relative z-20 px-2 md:px-12">
                    <div class="text-center py-4">
                        <h3 class="text-2xl font-semibold mb-2">All Platforms Supported</h3>
                        <span class="text-sm">All you need to see info about platform is there.</span>
                    </div>
                    <div class="space-y-12">
                        <div class="grid grid-cols-2 gap-8">
                            <div class="text-center col-span-2 md:col-span-1">
                                <img src="/images/platform/uav.webp" class="inline-block mx-auto w-3/5" alt="UAV">
                            </div>
                            <div class="space-y-3 self-center col-span-2 md:col-span-1 px-12 md:px-4">
                                <h4 class="text-xl font-semibold">Autonomous  UAV Aircraft</h4>
                                <div class="mt-2 mb-4 py-2 w-48 rounded-lg bg-gradient-to-r from-amber-400 to-orange-500"></div>
                                <p class="ml-6">Nunc vitae dolor egestas nibh ornare laoreet. Nulla porta id massa consequat finibus. In ornare purus eu mauris cursus, nec interdum massa hendrerit. Quisque porta auctor eros, ut ultricies lectus maximus a</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-8">
                            <div class="text-center col-span-2 md:col-span-1 inline-block md:hidden">
                                <img src="/images/platform/web.webp" class="inline-block mx-auto w-3/5" alt="UAV">
                            </div>
                            <div class="space-y-3 self-center col-span-2 md:col-span-1 px-12 md:px-4">
                                <h4 class="text-xl font-semibold">Web App</h4>
                                <div class="mt-2 mb-4 py-2 w-48 rounded-lg bg-gradient-to-r from-cyan-400 to-indigo-600"></div>
                                <p class="ml-6">Nunc vitae dolor egestas nibh ornare laoreet. Nulla porta id massa consequat finibus. In ornare purus eu mauris cursus, nec interdum massa hendrerit. Quisque porta auctor eros, ut ultricies lectus maximus a</p>
                            </div>
                            <div class="text-center col-span-2 md:col-span-1 hidden md:inline-block">
                                <img src="/images/platform/web.webp" class="inline-block mx-auto w-3/5" alt="UAV">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-8">
                            <div class="text-center col-span-2 md:col-span-1">
                                <img src="/images/platform/app.webp" class="inline-block mx-auto w-3/5" alt="UAV">
                            </div>
                            <div class="space-y-3 self-center col-span-2 md:col-span-1 px-12 md:px-4">
                                <h4 class="text-xl font-semibold">Mobile App</h4>
                                <div class="mt-2 mb-4 py-2 w-48 rounded-lg bg-gradient-to-r from-cyan-400 to-indigo-600"></div>
                                <p class="ml-6">Nunc vitae dolor egestas nibh ornare laoreet. Nulla porta id massa consequat finibus. In ornare purus eu mauris cursus, nec interdum massa hendrerit. Quisque porta auctor eros, ut ultricies lectus maximus a</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative bg-indigo-600 overflow-hidden">
                <div class="absolute w-full md:w-1/2 h-1/2 md:h-full">
                    <div class="absolute z-10 left-0 top-0 w-full h-full bg-gradient-to-b md:bg-gradient-to-r from-indigo-400/10 to-indigo-600"></div>
                    <img src="/images/method/cover.png" class="w-full h-full object-cover object-center opacity-80" alt="Image Map">
                </div>
                <div class="md:container mx-auto relative z-20 px-2 md:px-12">
                    <div class="grid grid-cols-2 py-36">
                        <div class="text-center self-center col-span-2 md:col-span-1">
                            <img src="/images/logo-white.png" class="inline-block w-2/4 mx-auto mb-6 md:mb-2" alt="Logo white">
                        </div>
                        <div class="col-span-2 md:col-span-1 px-12 md:px-4">
                            <h2 class="text-4xl mb-8 text-white font-bold">Learn About Method And Procedure</h2>
                            <p class="text-white mb-4">Nunc vitae dolor egestas nibh ornare laoreet. Nulla porta id massa consequat finibus. In ornare purus eu mauris cursus, nec interdum massa hendrerit. Quisque porta auctor eros, ut ultricies lectus maximus a</p>
                            <button type="button" class="py-3 px-8 mr-2 mb-2 font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="mappingModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden z-70 fixed top-0 right-0 left-0 w-full md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Image Mapping {{ mapping }}
                                </h3>
                                <span class="text-sm text-gray-500">Senin, 20 Maret 2022 13:35</span>
                            </div>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="mappingModal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </div>
                        <div class="p-6 space-y-6 h-96 overflow-auto">
                            <img :src="`/images/mapping/map${mapping}.png`" class="w-full rounded-lg" :alt="`Map${mapping}-detail`">
                        </div>
                        <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                            <button data-modal-toggle="mappingModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                            <button data-modal-toggle="mappingModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </view-layout>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3'
import ViewLayout from '@/Layouts/ViewLayout.vue'
import { Icon } from '@iconify/vue'

export default {
    data() {
        return {
            mapping: 1,
        }
    },
    components: {
        Link,
        Icon,
        Head,
        ViewLayout,
    },
    methods: {
        onShowMapping(item) {
            this.mapping = item
        },
    }
}
</script>

<style>
@import "../../css/customize.css";
</style>
