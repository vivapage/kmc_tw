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
</div>
