<?php
/**
 * Template part for displaying a message when posts are not found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kmc_tw
 */

?>
<div x-data="{ expanded: null }" x-cloak class="my-4 mx-auto">
    <!-- Консультація, діагностика -->
    <div @click="expanded !== 1 ? expanded = 1 : expanded = null"
        class="acc1 w-full cursor-pointer px-5 py-3 inline-block">

        <div class="flex flex-row justify-between pb-2 border-b border-gray-200">
            <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">
                Консультація, діагностика
            </div>
            <div class="flex flex-row items-center gap-10">
                <div class="border border-gray-200 px-4 py-2 rounded-full bg-gray-100">
                    <a href="/service_category/dentistry/konsultacziya-diagnostyka/" target="_self">
                        Детальніше про послугу
                    </a>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                        stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                        x-bind:class="expanded == 1  ?  'rotate-180'  :  ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
            </div>

        </div>
    </div>

    <!-- Консультація, діагностика 2 -->
    <div x-show="expanded == 1" x-collapse class="ml-8">

        <div x-data="{ expanded: null }">

            <!-- Консультація -->
            <div @click="expanded !== 1 ? expanded = 1 : expanded = null"
                class="w-full cursor-pointer px-5 py-3 border border-gray-200 mb-1 bg-gray-100 flex flex-row justify-between">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Консультація</div>
                <div class="flex flex-row items-center gap-10">
                    <div class="border border-gray-200 px-4 py-2 rounded-full bg-white">
                        <a href="/service/konsultacziya/" target="_self">
                            Детальніше про послугу
                        </a>
                    </div>
                    <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                            stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                            x-bind:class="expanded == 1  ?  'rotate-180'  :  ''">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </div>
                </div>

            </div>

            <!-- Консультація 1 -->
            <div x-show="expanded == 1" x-collapse class="flex justify-center m-10">
                <figure class="wp-block-table is-style-stripes">
                    <table>
                        <tbody>
                            <tr>
                                <td>Безкоштовна консультація лікаря-стоматолога (до 15 хв) </td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Консультація лікаря-стоматолога</td>
                                <td>299</td>
                            </tr>
                            <tr>
                                <td>Консультація дитячого стоматолога з психологічною адаптацією дитини</td>
                                <td>549</td>
                            </tr>
                            <tr>
                                <td>Консультація стоматолога-ортопеда з плануванням конструкції протезування зубів</td>
                                <td>399</td>
                            </tr>
                            <tr>
                                <td>Консультація хірурга-імплантолога з аналізом КТ та складанням плану операції</td>
                                <td>399</td>
                            </tr>
                            <tr>
                                <td>Консультація хірурга-імплантолога з аналізом КТ та складанням плану операції</td>
                                <td>399</td>
                            </tr>
                            <tr>
                                <td>Консультація пародонтолога зі складанням пародонтальної карти</td>
                                <td>549</td>
                            </tr>
                        </tbody>
                    </table>
                </figure>
            </div>

            <!-- Онлайн консультація -->
            <div @click="expanded !== 2 ? expanded = 2 : expanded = null"
                class="w-full cursor-pointer px-5 py-3 border border-gray-200 mb-1 bg-gray-100 flex flex-row justify-between">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 2 }">Онлайн консультація</div>
                <div class="flex flex-row items-center gap-10">
                    <div class="border border-gray-200 px-4 py-2 rounded-full bg-white">
                        <a href="/service/onlajn-konsultacziya/" target="_self">
                            Детальніше про послугу
                        </a>
                    </div>
                    <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                            stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                            x-bind:class="expanded == 2  ?  'rotate-180'  :  ''">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Онлайн консультація 2 -->
            <div x-show="expanded == 2" x-collapse class="flex justify-center m-10">
                <figure class="wp-block-table is-style-stripes">
                    <table>
                        <tbody>
                            <tr>
                                <td>Безкоштовна консультація лікаря-стоматолога (до 15 хв) </td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Консультація лікаря-стоматолога</td>
                                <td>299</td>
                            </tr>
                            <tr>
                                <td>Консультація дитячого стоматолога з психологічною адаптацією дитини</td>
                                <td>549</td>
                            </tr>
                            <tr>
                                <td>Консультація стоматолога-ортопеда з плануванням конструкції протезування зубів</td>
                                <td>399</td>
                            </tr>
                            <tr>
                                <td>Консультація хірурга-імплантолога з аналізом КТ та складанням плану операції</td>
                                <td>399</td>
                            </tr>
                            <tr>
                                <td>Консультація хірурга-імплантолога з аналізом КТ та складанням плану операції</td>
                                <td>399</td>
                            </tr>
                            <tr>
                                <td>Консультація пародонтолога зі складанням пародонтальної карти</td>
                                <td>549</td>
                            </tr>
                        </tbody>
                    </table>
                </figure>
            </div>

            <!-- Види діагностики -->
            <div @click="expanded !== 3 ? expanded = 3 : expanded = null"
                class="w-full cursor-pointer px-5 py-3 border border-gray-200 mb-1 bg-gray-100 flex flex-row justify-between">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 3 }">Види діагностики</div>
                <div class="flex flex-row items-center gap-10">
                    <div class="border border-gray-200 px-4 py-2 rounded-full bg-white">
                        <a href="/service/vydy-diagnostyky/" target="_self">
                            Детальніше про послугу
                        </a>
                    </div>
                    <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                            stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                            x-bind:class="expanded == 3  ?  'rotate-180'  :  ''">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Види діагностики 3 -->
            <div x-show="expanded == 3" x-collapse class="flex justify-center m-10">
                <figure class="wp-block-table is-style-stripes">
                    <table>
                        <tbody>
                            <tr>
                                <td>Безкоштовна консультація лікаря-стоматолога (до 15 хв) </td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Консультація лікаря-стоматолога</td>
                                <td>299</td>
                            </tr>
                            <tr>
                                <td>Консультація дитячого стоматолога з психологічною адаптацією дитини</td>
                                <td>549</td>
                            </tr>
                            <tr>
                                <td>Консультація стоматолога-ортопеда з плануванням конструкції протезування зубів</td>
                                <td>399</td>
                            </tr>
                            <tr>
                                <td>Консультація хірурга-імплантолога з аналізом КТ та складанням плану операції</td>
                                <td>399</td>
                            </tr>
                            <tr>
                                <td>Консультація хірурга-імплантолога з аналізом КТ та складанням плану операції</td>
                                <td>399</td>
                            </tr>
                            <tr>
                                <td>Консультація пародонтолога зі складанням пародонтальної карти</td>
                                <td>549</td>
                            </tr>
                        </tbody>
                    </table>
                </figure>
            </div>
        </div>
    </div>

    <!-- Дитяча стоматологія -->
    <div @click="expanded !== 2 ? expanded = 2 : expanded = null"
        class="w-full cursor-pointer px-5 py-3 inline-block mt-1">

        <div class="flex flex-row justify-between pb-2 border-b border-gray-200">
            <div class="" x-bind:class="{ 'font-bold': expanded == 2 }">
                Дитяча стоматологія
            </div>
            <div class="flex flex-row items-center gap-10">
                <div class="border border-gray-200 px-4 py-2 rounded-full bg-gray-100">
                    <a href="/service_category/stomatologiya-kiev-zoloti-vorota/dentistry-child-kyev/" target="_self">
                        Детальніше про послугу
                    </a>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                        stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                        x-bind:class="expanded == 2  ?  'rotate-180'  :  ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Дитяча стоматологія 2 -->
    <div x-show="expanded == 2" x-collapse>

        <div x-data="{ expanded: null }">

            <!-- Sub Toggle 1 -->
            <div @click="expanded !== 1 ? expanded = 1 : expanded = null"
                class="w-full cursor-pointer px-5 py-3   text-center inline-block">
                Sub Toggle 1
            </div>

            <!-- Sub Accordion 1 -->
            <div x-show="expanded == 1" x-collapse class="px-4 py-4 bg-gray-300">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.
            </div>

            <!-- Sub Toggle 2 -->
            <div @click="expanded !== 2 ? expanded = 2 : expanded = null"
                class="w-full cursor-pointer px-5 py-3   text-center inline-block">
                Sub Toggle 2
            </div>

            <!-- Sub Accordion 2 -->
            <div x-show="expanded == 2" x-collapse class="px-4 py-4 bg-gray-300">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.
            </div>
        </div>
    </div>

    <!-- Лікування зубів -->
    <div @click="expanded !== 3 ? expanded = 3 : expanded = null"
        class="w-full cursor-pointer px-5 py-3  inline-block mt-1">

        <div class="flex flex-row justify-between pb-2 border-b border-gray-200">
            <div class="" x-bind:class="{ 'font-bold': expanded == 3 }">
                Лікування зубів
            </div>
            <div class="flex flex-row items-center gap-10">
                <div class="border border-gray-200 px-4 py-2 rounded-full bg-gray-100">
                    <a href="/service_category/dentistry/likuvannya-zubiv/" target="_self">
                        Детальніше про послугу
                    </a>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                        stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                        x-bind:class="expanded == 3  ?  'rotate-180'  :  ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Лікування зубів 2 -->
    <div x-show="expanded == 3" x-collapse>

        <div x-data="{ expanded: null }">

            <!-- Sub Toggle 1 -->
            <div @click="expanded !== 1 ? expanded = 1 : expanded = null"
                class="w-full cursor-pointer px-5 py-3 text-center inline-block">
                Sub Toggle 1
            </div>

            <!-- Sub Accordion 1 -->
            <div x-show="expanded == 1" x-collapse class="px-4 py-4 bg-gray-300">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.
            </div>

            <!-- Sub Toggle 3 -->
            <div @click="expanded !== 3 ? expanded = 3 : expanded = null"
                class="w-full cursor-pointer px-5 py-3   text-center inline-block">
                Sub Toggle 3
            </div>

            <!-- Sub Accordion 3 -->
            <div x-show="expanded == 3" x-collapse class="px-4 py-4 bg-gray-300">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.
            </div>
        </div>
    </div>

    <!-- Хірургічна стоматологія -->
    <div @click="expanded !== 4 ? expanded = 4 : expanded = null"
        class="w-full cursor-pointer px-5 py-3  inline-block mt-1">

        <div class="flex flex-row justify-between pb-2 border-b border-gray-200">
            <div class="" x-bind:class="{ 'font-bold': expanded == 4 }">
                Хірургічна стоматологія
            </div>
            <div class="flex flex-row items-center gap-10">
                <div class="border border-gray-200 px-4 py-2 rounded-full bg-gray-100">
                    <a href="/service_category/dentistry/hirurgiya/" target="_self">
                        Детальніше про послугу
                    </a>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                        stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                        x-bind:class="expanded == 4  ?  'rotate-180'  :  ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Хірургічна стоматологія 4 -->
    <div x-show="expanded == 4" x-collapse>

        <div x-data="{ expanded: null }">

            <!-- Sub Toggle 1 -->
            <div @click="expanded !== 1 ? expanded = 1 : expanded = null"
                class="w-full cursor-pointer px-5 py-3 text-center inline-block">
                Sub Toggle 1
            </div>

            <!-- Sub Accordion 1 -->
            <div x-show="expanded == 1" x-collapse class="px-4 py-4 bg-gray-300">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.
            </div>

            <!-- Sub Toggle 3 -->
            <div @click="expanded !== 3 ? expanded = 3 : expanded = null"
                class="w-full cursor-pointer px-5 py-3   text-center inline-block">
                Sub Toggle 3
            </div>

            <!-- Sub Accordion 3 -->
            <div x-show="expanded == 3" x-collapse class="px-4 py-4 bg-gray-300">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.
            </div>
        </div>
    </div>

    <!-- Імплантація зубів -->
    <div @click="expanded !== 5 ? expanded = 5 : expanded = null"
        class="w-full cursor-pointer px-5 py-3  inline-block mt-1">

        <div class="flex flex-row justify-between pb-2 border-b border-gray-200">
            <div class="" x-bind:class="{ 'font-bold': expanded == 5 }">
                Імплантація зубів
            </div>
            <div class="flex flex-row items-center gap-10">
                <div class="border border-gray-200 px-4 py-2 rounded-full bg-gray-100">
                    <a href="/service_category/dentistry/implantacziya-zybiv/" target="_self">
                        Детальніше про послугу
                    </a>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                        stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                        x-bind:class="expanded == 5  ?  'rotate-180'  :  ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Імплантація зубів 2 -->
    <div x-show="expanded == 5" x-collapse>

        <div x-data="{ expanded: null }">

            <!-- Sub Toggle 1 -->
            <div @click="expanded !== 1 ? expanded = 1 : expanded = null"
                class="w-full cursor-pointer px-5 py-3 text-center inline-block">
                Sub Toggle 1
            </div>

            <!-- Sub Accordion 1 -->
            <div x-show="expanded == 1" x-collapse class="px-4 py-4 bg-gray-300">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.
            </div>

            <!-- Sub Toggle 3 -->
            <div @click="expanded !== 3 ? expanded = 3 : expanded = null"
                class="w-full cursor-pointer px-5 py-3   text-center inline-block">
                Sub Toggle 3
            </div>

            <!-- Sub Accordion 3 -->
            <div x-show="expanded == 3" x-collapse class="px-4 py-4 bg-gray-300">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.
            </div>
        </div>
    </div>

    <!-- Протезування зубів -->
    <div @click="expanded !== 6 ? expanded = 6 : expanded = null"
        class="w-full cursor-pointer px-5 py-3  inline-block mt-1">

        <div class="flex flex-row justify-between pb-2 border-b border-gray-200">
            <div class="" x-bind:class="{ 'font-bold': expanded == 6 }">
                Протезування зубів
            </div>
            <div class="flex flex-row items-center gap-10">
                <div class="border border-gray-200 px-4 py-2 rounded-full bg-gray-100">
                    <a href="/service_category/dentistry/protezuvannya-zubiv/" target="_self">
                        Детальніше про послугу
                    </a>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                        stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                        x-bind:class="expanded == 6  ?  'rotate-180'  :  ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Протезування зубів 2 -->
    <div x-show="expanded == 6" x-collapse>

        <div x-data="{ expanded: null }">

            <!-- Sub Toggle 1 -->
            <div @click="expanded !== 1 ? expanded = 1 : expanded = null"
                class="w-full cursor-pointer px-5 py-3 text-center inline-block">
                Sub Toggle 1
            </div>

            <!-- Sub Accordion 1 -->
            <div x-show="expanded == 1" x-collapse class="px-4 py-4 bg-gray-300">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.
            </div>

            <!-- Sub Toggle 3 -->
            <div @click="expanded !== 3 ? expanded = 3 : expanded = null"
                class="w-full cursor-pointer px-5 py-3   text-center inline-block">
                Sub Toggle 3
            </div>

            <!-- Sub Accordion 3 -->
            <div x-show="expanded == 3" x-collapse class="px-4 py-4 bg-gray-300">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.
            </div>
        </div>
    </div>

    <!-- Естетична стоматологія -->
    <div @click="expanded !== 7 ? expanded = 7 : expanded = null"
        class="w-full cursor-pointer px-5 py-3  inline-block mt-1">

        <div class="flex flex-row justify-between pb-2 border-b border-gray-200">
            <div class="" x-bind:class="{ 'font-bold': expanded == 7 }">
                Естетична стоматологія
            </div>
            <div class="flex flex-row items-center gap-10">
                <div class="border border-gray-200 px-4 py-2 rounded-full bg-gray-100">
                    <a href="/service_category/dentistry/estetychna-stomatologiya/" target="_self">
                        Детальніше про послугу
                    </a>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                        stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                        x-bind:class="expanded == 7  ?  'rotate-180'  :  ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Естетична стоматологія 2 -->
    <div x-show="expanded == 7" x-collapse>

        <div x-data="{ expanded: null }">

            <!-- Sub Toggle 1 -->
            <div @click="expanded !== 1 ? expanded = 1 : expanded = null"
                class="w-full cursor-pointer px-5 py-3 text-center inline-block">
                Sub Toggle 1
            </div>

            <!-- Sub Accordion 1 -->
            <div x-show="expanded == 1" x-collapse class="px-4 py-4 bg-gray-300">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.
            </div>

            <!-- Sub Toggle 3 -->
            <div @click="expanded !== 3 ? expanded = 3 : expanded = null"
                class="w-full cursor-pointer px-5 py-3   text-center inline-block">
                Sub Toggle 3
            </div>

            <!-- Sub Accordion 3 -->
            <div x-show="expanded == 3" x-collapse class="px-4 py-4 bg-gray-300">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.
            </div>
        </div>
    </div>

    <!-- Турбота про ясна -->
    <div @click="expanded !== 8 ? expanded = 8 : expanded = null"
        class="w-full cursor-pointer px-5 py-3  inline-block mt-1">

        <div class="flex flex-row justify-between pb-2 border-b border-gray-200">
            <div class="" x-bind:class="{ 'font-bold': expanded == 8 }">
                Турбота про ясна
            </div>
            <div class="flex flex-row items-center gap-10">
                <div class="border border-gray-200 px-4 py-2 rounded-full bg-gray-100">
                    <a href="/service_category/dentistry/turbota-pro-yasna/" target="_self">
                        Детальніше про послугу
                    </a>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                        stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                        x-bind:class="expanded == 8  ?  'rotate-180'  :  ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Турбота про ясна 2 -->
    <div x-show="expanded == 8" x-collapse>

        <div x-data="{ expanded: null }">

            <!-- Sub Toggle 1 -->
            <div @click="expanded !== 1 ? expanded = 1 : expanded = null"
                class="w-full cursor-pointer px-5 py-3 text-center inline-block">
                Sub Toggle 1
            </div>

            <!-- Sub Accordion 1 -->
            <div x-show="expanded == 1" x-collapse class="px-4 py-4 bg-gray-300">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.
            </div>

            <!-- Sub Toggle 3 -->
            <div @click="expanded !== 3 ? expanded = 3 : expanded = null"
                class="w-full cursor-pointer px-5 py-3   text-center inline-block">
                Sub Toggle 3
            </div>

            <!-- Sub Accordion 3 -->
            <div x-show="expanded == 3" x-collapse class="px-4 py-4 bg-gray-300">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.
            </div>
        </div>
    </div>

    <!-- Ортодонтія -->
    <div @click="expanded !== 9 ? expanded = 9 : expanded = null"
        class="w-full cursor-pointer px-5 py-3  inline-block mt-1">

        <div class="flex flex-row justify-between pb-2 border-b border-gray-200">
            <div class="" x-bind:class="{ 'font-bold': expanded == 9 }">
                Ортодонтія
            </div>
            <div class="flex flex-row items-center gap-10">
                <div class="border border-gray-200 px-4 py-2 rounded-full bg-gray-100">
                    <a href="/service_category/dentistry/ortodontiya/" target="_self">
                        Детальніше про послугу
                    </a>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                        stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                        x-bind:class="expanded == 9  ?  'rotate-180'  :  ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Ортодонтія 2 -->
    <div x-show="expanded == 9" x-collapse>

        <div x-data="{ expanded: null }">

            <!-- Sub Toggle 1 -->
            <div @click="expanded !== 1 ? expanded = 1 : expanded = null"
                class="w-full cursor-pointer px-5 py-3 text-center inline-block">
                Sub Toggle 1
            </div>

            <!-- Sub Accordion 1 -->
            <div x-show="expanded == 1" x-collapse class="px-4 py-4 bg-gray-300">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.
            </div>

            <!-- Sub Toggle 3 -->
            <div @click="expanded !== 3 ? expanded = 3 : expanded = null"
                class="w-full cursor-pointer px-5 py-3   text-center inline-block">
                Sub Toggle 3
            </div>

            <!-- Sub Accordion 3 -->
            <div x-show="expanded == 3" x-collapse class="px-4 py-4 bg-gray-300">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.
            </div>
        </div>
    </div>
</div>