<template>
    <Head>
        <title>Method - Epuero</title>
        <meta name="description" content="Method - Eepis Plane Unit Operational Rescue Forest">
    </Head>
    <view-layout active="method">
        <template v-slot:content>
            <div class="relative" id="method">
                <div class="grid grid-cols-3 gap-3">
                     <div :class="{'-left-36 opacity-0 invisible hidden relative': !aside, 'fixed z-30 bg-white md:relative col-span-3 md:col-span-1 min-h-screen pt-24 overflow-auto': aside}" class="px-8 w-full border-l border-gray-200 overflow-visible">
                        <div :class="{'md:sticky md:top-24': aside}">
                            <aside class="w-full h-full" aria-label="Sidebar">
                                <div class="overflow-y-auto py-4 px-3 rounded dark:bg-gray-800">
                                    <ul class="space-y-2">
                                        <li class="text-end">
                                            <button @click="aside = !aside, setBody()" class="text-gray-900 relative -top-3 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-4 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                                                <Icon icon="bx:menu-alt-left" class="text-xl inline-block"/>
                                            </button>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                                                <span class="ml-3">Fire Detection</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                                                <span class="flex-1 ml-3 whitespace-nowrap">Geo Capture</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                                                <span class="flex-1 ml-3 whitespace-nowrap">Vehicle / UAV</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                                                <span class="flex-1 ml-3 whitespace-nowrap">Realtime App</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div id="dropdown-cta" class="p-4 mt-6 bg-blue-50 rounded-lg dark:bg-blue-900" role="alert">
                                        <div class="flex items-center mb-3">
                                            <span class="bg-orange-100 text-orange-800 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-orange-200 dark:text-orange-900">Beta</span>
                                            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-900 rounded-lg focus:ring-2 focus:ring-blue-400 p-1 hover:bg-blue-200 inline-flex h-6 w-6 dark:bg-blue-900 dark:text-blue-400 dark:hover:bg-blue-800" data-collapse-toggle="dropdown-cta" aria-label="Close">
                                                <span class="sr-only">Close</span>
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            </button>
                                        </div>
                                        <p class="mb-3 text-sm text-blue-900 dark:text-blue-400">
                                            Preview the new Flowbite dashboard navigation! You can turn the new navigation off for a limited time in your profile.
                                        </p>
                                        <a class="text-sm text-blue-900 underline hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300" href="#">Turn new navigation off</a>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div :class="{'md:col-span-3 md:container mx-auto': !aside, 'md:col-span-2 bg-gray-50': aside}"  class="col-span-3 pt-36 pb-12 px-8 space-y-6 md:px-12">
                        <button @click="aside = !aside, setBody()" class="text-gray-900 relative -top-3 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-4 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                            <Icon icon="bx:menu-alt-left" class="text-xl inline-block"/>
                        </button>
                        <a href="/" class="text-gray-900 relative -top-3 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                            <Icon icon="akar-icons:arrow-left" class="text-xl inline-block"/>
                            <span>Back</span>
                        </a>
                        <img src="/images/news/news1.jpg" class="w-full rounded-lg" alt="News 1">
                        <div class="space-y-3">
                            <h1 class="text-3xl font-bold mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, nulla!</h1>
                            <span class="text-gray-600">Monday, 20 April 2022</span>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, nesciunt ea. Temporibus aperiam, ipsa neque incidunt aliquam nisi ex ullam distinctio! Quam aspernatur perspiciatis exercitationem odio odit ex alias aperiam cupiditate animi est sapiente, perferendis rerum in ipsam amet sint magnam dolorem accusantium? Vero vitae eveniet obcaecati odio cumque nulla excepturi alias voluptatibus voluptatum ipsa pariatur nobis labore, porro ullam vel rem id debitis quibusdam similique exercitationem, est temporibus nisi molestias accusamus. Vero alias, dignissimos possimus inventore dolorum aspernatur voluptas suscipit impedit et facilis assumenda incidunt, eos saepe! Laborum, minus voluptatibus debitis incidunt a ut nobis expedita labore autem ullam quo neque harum ea, aliquam rem. Magni deserunt odit assumenda repellendus aperiam facere earum alias vitae impedit necessitatibus maxime illum vel aliquid suscipit officiis voluptas itaque perspiciatis quam, et soluta qui! Maiores libero deleniti sunt. Quidem maiores est et fugiat atque vitae exercitationem deleniti quis. Iusto odit impedit consequatur officiis consequuntur doloremque quas dolor non nulla, ipsa commodi, dolorum perspiciatis, magni voluptates nesciunt? Minima vel quibusdam sapiente fugit quas nesciunt, quo saepe aspernatur expedita sequi eum. Earum eos ab possimus eveniet, itaque officiis dignissimos deserunt vel! Doloremque porro quidem inventore error qui non maxime nemo consectetur dolorum. Et natus minus eaque fugiat dignissimos, odio itaque laborum modi, adipisci id ullam excepturi! Cupiditate repellendus molestias cumque laborum accusantium fugit, optio quisquam facilis consequatur quia, porro vero libero quas quis eius reprehenderit, unde omnis maxime. Qui cum molestiae voluptatem saepe ducimus modi illo vel non, esse porro, dolore sed? Veritatis eum aliquid omnis maiores soluta dicta iste ut mollitia impedit corrupti repellendus temporibus consectetur esse, sapiente quas voluptates nobis libero accusantium asperiores deleniti aperiam sit excepturi. Nostrum explicabo est sapiente a velit, illum placeat rem ipsam excepturi nesciunt ducimus tenetur blanditiis expedita vel cupiditate aspernatur consequatur repellendus repellat laudantium. Debitis labore corrupti explicabo unde atque, magni quasi sint a dolorem porro maxime pariatur, voluptas rem omnis libero perferendis ipsum beatae? Rerum odio error, deleniti placeat cum laudantium in eos quia a accusantium dolore adipisci assumenda suscipit? Officiis velit voluptatum rerum repudiandae aspernatur necessitatibus id ratione, tempore laborum sunt? Adipisci repellendus nesciunt numquam eaque ex maxime officiis quam consectetur. Vel non asperiores illum harum temporibus aliquam laborum ducimus, esse nemo hic distinctio provident assumenda natus cum numquam impedit ex quam, unde mollitia doloribus. Vel eveniet dignissimos atque rem aspernatur culpa amet, optio dicta illo libero a porro sequi minus architecto dolorum facere ad placeat debitis maiores blanditiis cumque, qui exercitationem omnis! Culpa necessitatibus eum voluptatibus? Repellat magnam consequatur perspiciatis ea molestias laudantium, itaque nesciunt sequi quam recusandae beatae dignissimos non similique delectus laborum inventore dolore harum? Incidunt totam ipsum placeat molestiae cumque asperiores hic, excepturi harum corrupti. Similique corporis est minus. Rem sapiente maiores officia totam, laborum qui quis nostrum molestiae. Vel optio laudantium laborum numquam delectus quasi, nostrum excepturi nobis architecto esse expedita, provident eum tempore neque alias! Magni hic a ad expedita eligendi odit. Totam obcaecati esse consectetur incidunt! Excepturi repellat aperiam cumque iusto consequatur sunt, atque aliquid pariatur earum perferendis quibusdam itaque voluptatem temporibus quod ipsam delectus dolores quae necessitatibus. Sapiente libero ullam maiores sunt architecto eius similique doloribus neque ad rerum dolores aperiam incidunt delectus error nam qui expedita pariatur atque labore reiciendis, officia sint assumenda! Exercitationem sapiente est odit dolorum repellendus tempore voluptatum similique ea illum quasi ipsum harum culpa amet maxime doloribus corrupti ipsa optio quaerat earum, fugit quisquam! In expedita nam, neque voluptates quisquam facere possimus voluptate molestiae minima deserunt reiciendis eligendi vitae quos ex veniam nisi ad pariatur dolorum velit repudiandae deleniti autem ipsum odit. Exercitationem nisi, temporibus neque animi accusantium, ab porro facere assumenda voluptatibus dolores tenetur fugit, omnis quidem. Voluptas explicabo, commodi quibusdam officiis illo suscipit voluptatem quisquam, totam nemo aliquid nisi quod facilis? Quibusdam at expedita molestias suscipit magnam quasi voluptas consequuntur neque odio recusandae saepe sint placeat facilis, dolore atque voluptatibus et porro distinctio. Rerum, a maiores assumenda ad cupiditate odio voluptatem animi, architecto doloremque consequuntur ullam quisquam dignissimos nisi? Aspernatur explicabo, dolore dignissimos temporibus aut consequuntur id sunt ipsum consequatur neque voluptatibus, perferendis dolores necessitatibus ut voluptatem nemo obcaecati ea saepe eius. Laborum blanditiis quisquam inventore nihil laboriosam incidunt rem, itaque vero! Ullam illo obcaecati pariatur sapiente ipsam, alias fugit debitis, et corrupti, quibusdam iusto officia unde maxime totam. Unde laudantium quam repellat sint. A reprehenderit esse non, officia porro atque accusamus dolorem voluptatum harum vel ducimus, eveniet eius, cum explicabo qui optio tempore quia consectetur impedit veritatis dicta est aspernatur quidem? Rem exercitationem aut temporibus, voluptate molestiae voluptates eos? Illo sit reprehenderit consequatur dolorem praesentium qui voluptatem quis sunt, rem quo ut asperiores animi nam. Aperiam aliquam soluta alias, unde a voluptatem dolorem id excepturi debitis eligendi facere, provident veritatis cupiditate culpa dicta sunt quaerat deleniti minus inventore dolorum illum corporis dignissimos ipsa! Cupiditate reprehenderit temporibus maiores dolore architecto ab exercitationem, qui expedita at velit enim dolorem id ut beatae ex ipsam animi iure incidunt numquam rerum asperiores cum. Dolorem pariatur quaerat doloremque itaque dolorum illum mollitia voluptatibus earum ipsa fuga cum omnis cupiditate tempora rem assumenda deleniti est ullam enim voluptatem error aut, ducimus nemo exercitationem neque. Accusantium eos ullam, accusamus perspiciatis quas eum enim similique harum? Amet ipsam nobis aliquam commodi quo, sunt atque sint doloribus, optio porro, maiores quae quod temporibus accusantium consectetur itaque a. Culpa ducimus omnis a! Dolor est mollitia fuga veniam eaque eius itaque, consequatur laboriosam quis illum dicta accusamus voluptates corrupti dolores temporibus possimus alias sunt optio esse consectetur impedit non odio? Expedita labore aliquam inventore. Aspernatur, sed ut. Voluptas optio maiores adipisci necessitatibus vitae voluptatem laudantium aperiam accusamus veniam, officia animi nesciunt dolore, possimus sint cum molestiae quia qui amet at ullam numquam nobis? Animi doloribus non tenetur culpa minima ad, exercitationem numquam. Natus, laboriosam? Modi sapiente perferendis minima dolor dolorum ut quam repellat expedita, aspernatur corrupti eum in consequuntur accusantium culpa, iste exercitationem, accusamus ex ipsa quia inventore porro! Sunt at tenetur est animi quod nobis impedit, consequuntur vitae magnam fuga repellendus ducimus esse quibusdam atque veritatis. Veniam, tempore expedita.
                        </p>
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
import Pagination from '@/Components/Pagination.vue'

export default {
    data() {
        return {
            aside: true,
        }
    },
    components: {
        Head,
        Link,
        ViewLayout,
        Icon,
        Pagination,
    },
    methods: {
        setBody() {
            let body = document.getElementsByTagName('body').classList
        }
    }
}

</script>

<style>
@import "../../../../css/customize.css";
</style>
