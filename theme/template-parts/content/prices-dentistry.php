<?php
/**
 * Template part for displaying a message when posts are not found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kmc_tw
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('prose prose-_tw'); ?>>
    <div x-data="{ expanded: null }" x-cloak class="my-4 mx-auto">
        <!-- Консультація, діагностика -->
        <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2 ">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">
                    Консультація, діагностика
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
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
                <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Консультація</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
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
                <div x-show="expanded == 1" x-collapse class="flex justify-center m-4">
                    <?php priceList('konsultacziya')?>
                </div>

                <!-- Онлайн консультація -->
                <div @click="expanded !== 2 ? expanded = 2 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 2 }">Онлайн консультація
                    </div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
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
                    <?php priceList('onlajn-konsultacziya')?>
                </div>

                <!-- Види діагностики -->
                <div @click="expanded !== 3 ? expanded = 3 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 3 }">Види діагностики</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
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
                    <?php priceList('vydy-diagnostyky')?>
                </div>
            </div>
        </div>

        <!-- Дитяча стоматологія -->
        <div @click="expanded !== 2 ? expanded = 2 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 2 }">
                    Дитяча стоматологія
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service_category/dentistry/dentistry-child/" target="_self">
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
        <div x-show="expanded == 2" x-collapse class="ml-8">

            <div x-data="{ expanded: null }">

                <!-- Гігієна молочних зубів. профілактика -->
                <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Гігієна молочних зубів.
                        Профілактика</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/gigiyena-molochnyh-zubiv-profilaktyka/" target="_self">
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


                <!-- Гігієна молочних зубів. профілактика 1 -->
                <div x-show="expanded == 1" x-collapse class="flex justify-center m-10">
                    <?php priceList('gigiyena-molochnyh-zubiv-profilaktyka')?>
                </div>

                <!-- Лікування молочних зубів -->
                <div @click="expanded !== 2 ? expanded = 2 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Лікування молочних
                        зубів</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/likuvannya-molochnyh-zubiv/" target="_self">
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

                <!-- Лікування молочних зубів 2 -->
                <div x-show="expanded == 2" x-collapse class="flex justify-center m-10">
                    <?php priceList('gigiyena-molochnyh-zubiv-profilaktyka')?>
                </div>
                <!-- Дитячі коронки -->
                <div @click="expanded !== 3 ? expanded = 3 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Дитячі коронки</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/dytyachi-koronky/" target="_self">
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

                <!-- Дитячі коронки 3 -->
                <div x-show="expanded == 3" x-collapse class="flex justify-center m-10">
                    <?php priceList('dytyachi-koronky')?>
                </div>
                <!-- Видалення молочних зубів -->
                <div @click="expanded !== 4 ? expanded = 4 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Видалення молочних
                        зубів</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/vydalennya-molochnyh-zubiv/" target="_self">
                                Детальніше про послугу
                            </a>
                        </div>
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                                stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                                x-bind:class="expanded == 4  ?  'rotate-180'  :  ''">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Видалення молочних зубів 4 -->
                <div x-show="expanded == 4" x-collapse class="flex justify-center m-10">
                    <?php priceList('vydalennya-molochnyh-zubiv')?>
                </div>
                <!-- Дитяча ортодонтія. Знімні апарати -->
                <div @click="expanded !== 5 ? expanded = 5 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Дитяча ортодонтія.
                        Знімні апарати</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/dytyacha-ortodontiya-znimni-aparaty/" target="_self">
                                Детальніше про послугу
                            </a>
                        </div>
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                                stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                                x-bind:class="expanded == 5  ?  'rotate-180'  :  ''">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Дитяча ортодонтія. Знімні апарати 5 -->
                <div x-show="expanded == 5" x-collapse class="flex justify-center m-10">
                    <?php priceList('dytyacha-ortodontiya-znimni-aparaty')?>
                </div>
                <!-- Капові апарати -->
                <div @click="expanded !== 6 ? expanded = 6 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Капові апарати</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/kapovi-aparaty/" target="_self">
                                Детальніше про послугу
                            </a>
                        </div>
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                                stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                                x-bind:class="expanded == 6  ?  'rotate-180'  :  ''">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Капові апарати 6 -->
                <div x-show="expanded == 6" x-collapse class="flex justify-center m-10">
                    <?php priceList('kapovi-aparaty')?>
                </div>
                <!-- Міофункціональні апарати -->
                <div @click="expanded !== 7 ? expanded = 7 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Міофункціональні
                        апарати</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/miofunkczionalni-aparaty/" target="_self">
                                Детальніше про послугу
                            </a>
                        </div>
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                                stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                                x-bind:class="expanded == 7  ?  'rotate-180'  :  ''">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Міофункціональні апарати 7 -->
                <div x-show="expanded == 7" x-collapse class="flex justify-center m-10">
                    <?php priceList('miofunkczionalni-aparaty')?>
                </div>
                <!-- Цифрова ортодонтія -->
                <div @click="expanded !== 8 ? expanded = 8 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Цифрова ортодонтія
                    </div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/czyfrova-ortodontiya/" target="_self">
                                Детальніше про послугу
                            </a>
                        </div>
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                                stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                                x-bind:class="expanded == 8  ?  'rotate-180'  :  ''">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Цифрова ортодонтія 8 -->
                <div x-show="expanded == 8" x-collapse class="flex justify-center m-10">
                    <?php priceList('czyfrova-ortodontiya')?>
                </div>
                <!-- Дитячі брекети -->
                <div @click="expanded !== 9 ? expanded = 9 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Дитячі брекети
                    </div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/dytyachi-brekety/" target="_self">
                                Детальніше про послугу
                            </a>
                        </div>
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                                stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                                x-bind:class="expanded == 9  ?  'rotate-180'  :  ''">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Дитячі брекети 9 -->
                <div x-show="expanded == 9" x-collapse class="flex justify-center m-10">
                    <?php priceList('dytyachi-brekety')?>
                </div>
            </div>
        </div>

        <!-- Лікування зубів -->
        <div @click="expanded !== 3 ? expanded = 3 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 3 }">
                    Лікування зубів
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
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
        <div x-show="expanded == 3" x-collapse class="ml-8">

            <div x-data="{ expanded: null }">

                <!-- Лікування карієсу та його профілактика -->
                <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Лікування карієсу та
                        його профілактика
                    </div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/likuvannya-kariyesu-ta-jogo-profilaktyka/" target="_self">
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

                <!-- Лікування карієсу та його профілактика 1 -->
                <div x-show="expanded == 1" x-collapse class="flex justify-center m-10">
                    <?php priceList('likuvannya-kariyesu-ta-jogo-profilaktyka')?>
                </div>

                <!-- Пломбування зубів -->
                <div @click="expanded !== 2 ? expanded = 2 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Пломбування зубів
                    </div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/plombuvannya-zubiv/" target="_self">
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

                <!-- Пломбування зубів 2 -->
                <div x-show="expanded == 2" x-collapse class="flex justify-center m-10">
                    <?php priceList('plombuvannya-zubiv')?>
                </div>
                <!-- Лікування каналів зубу -->
                <div @click="expanded !== 3 ? expanded = 3 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Лікування каналів зубу
                    </div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/likuvannya-kanaliv-zubu/" target="_self">
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

                <!-- Лікування каналів зубу 3 -->
                <div x-show="expanded == 3" x-collapse class="flex justify-center m-10">
                    <?php priceList('likuvannya-kanaliv-zubu')?>
                </div>
                <!-- Лікування періодонтиту -->
                <div @click="expanded !== 4 ? expanded = 4 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Лікування періодонтиту
                    </div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/likuvannya-periodontytu/" target="_self">
                                Детальніше про послугу
                            </a>
                        </div>
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                                stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                                x-bind:class="expanded == 4  ?  'rotate-180'  :  ''">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Лікування періодонтиту 4 -->
                <div x-show="expanded == 4" x-collapse class="flex justify-center m-10">
                    <?php priceList('likuvannya-periodontytu')?>
                </div>
            </div>
        </div>

        <!-- Хірургічна стоматологія -->
        <div @click="expanded !== 4 ? expanded = 4 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 4 }">
                    Хірургічна стоматологія
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
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
                <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="second-tab">
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
                <div @click="expanded !== 3 ? expanded = 3 : expanded = null" class="second-tab">
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
        <div @click="expanded !== 5 ? expanded = 5 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 5 }">
                    Імплантація зубів
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
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
                <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="second-tab">
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
                <div @click="expanded !== 3 ? expanded = 3 : expanded = null" class="second-tab">
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
        <div @click="expanded !== 6 ? expanded = 6 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 6 }">
                    Протезування зубів
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
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
                <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="second-tab">
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
                <div @click="expanded !== 3 ? expanded = 3 : expanded = null" class="second-tab">
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
        <div @click="expanded !== 7 ? expanded = 7 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 7 }">
                    Естетична стоматологія
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
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
                <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="second-tab">
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
                <div @click="expanded !== 3 ? expanded = 3 : expanded = null" class="second-tab">
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
        <div @click="expanded !== 8 ? expanded = 8 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 8 }">
                    Турбота про ясна
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
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
                <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="second-tab">
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
                <div @click="expanded !== 3 ? expanded = 3 : expanded = null" class="second-tab">
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
        <div @click="expanded !== 9 ? expanded = 9 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 9 }">
                    Ортодонтія
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
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
                <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="second-tab">
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
                <div @click="expanded !== 3 ? expanded = 3 : expanded = null" class="second-tab">
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
    <div>
    </div>




</article>