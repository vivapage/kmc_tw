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



        <!-- Масаж лікувальний -->
        <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">
                    Масаж лікувальний
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service_category/massage/masazh-likuvalnyj/" target="_self">
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

        <!-- Accordion-Масаж лікувальний -->
        <div x-show="expanded == 1" x-collapse class="ml-8">

            <div x-data="{ expanded: null }">

                <!-- Accordion Масаж лікувальний -->
                <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Масаж лікувальний</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/masazh-komirczevoyi-zony-golovy/" target="_self">
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
                <!-- Content-Масаж лікувальний -->
                <div x-show="expanded == 1" x-collapse class="flex justify-center m-10">
                    <?php priceList('masazh-komirczevoyi-zony-golovy')?>
                </div>

                <!-- Accordion Масаж кінцівок -->
                <div @click="expanded !== 2 ? expanded = 2 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 2 }">Масаж кінцівок</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/masazh-kinczivok/" target="_self">
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
                <!-- Content-Масаж кінцівок -->
                <div x-show="expanded == 2" x-collapse class="flex justify-center m-10">
                    <?php priceList('masazh-kinczivok')?>
                </div>

                <!-- Accordion Масаж спини -->
                <div @click="expanded !== 3 ? expanded = 3 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 3 }">Масаж спини</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/masazh-spyny/" target="_self">
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
                <!-- Content-Масаж спини -->
                <div x-show="expanded == 3" x-collapse class="flex justify-center m-10">
                    <?php priceList('masazh-spyny')?>
                </div>

                <!-- Accordion Масаж тіла -->
                <div @click="expanded !== 4 ? expanded = 4 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 4 }">Масаж тіла</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/masazh-tila/" target="_self">
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
                <!-- Content-Масаж тіла -->
                <div x-show="expanded == 4" x-collapse class="flex justify-center m-10">
                    <?php priceList('masazh-tila')?>
                </div>

                <!-- Accordion Масаж для дітей -->
                <div @click="expanded !== 5 ? expanded = 5 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 5 }">Масаж для дітей</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/masazh-dlya-ditej/" target="_self">
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
                <!-- Content-Масаж для дітей -->
                <div x-show="expanded == 5" x-collapse class="flex justify-center m-10">
                    <?php priceList('masazh-dlya-ditej')?>
                </div>
            </div>
        </div>

        <!-- Реабілітація. Вертебрологія -->
        <div @click="expanded !== 2 ? expanded = 2 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 2 }">
                    Реабілітація. Вертебрологія
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service_category/massage/reabilitacziya/" target="_self">
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

        <!-- Accordion-Реабілітація. Вертебрологія -->
        <div x-show="expanded == 2" x-collapse class="ml-8">

            <div x-data="{ expanded: null }">

                <!-- Accordion Консультація -->
                <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Консультація</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/konsultacziya-2/" target="_self">
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
                <!-- Content-Консультація -->
                <div x-show="expanded == 1" x-collapse class="flex justify-center m-10">
                    <?php priceList('konsultacziya-2')?>
                </div>

                <!-- Accordion Фізична реабілітація -->
                <div @click="expanded !== 2 ? expanded = 2 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 2 }">Фізична реабілітація
                    </div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/fizychna-reabilitacziya/" target="_self">
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
                <!-- Content-Фізична реабілітація -->
                <div x-show="expanded == 2" x-collapse class="flex justify-center m-10">
                    <?php priceList('/service/fizychna-reabilitacziya/')?>
                </div>

                <!-- Accordion Вертебрологія -->
                <div @click="expanded !== 3 ? expanded = 3 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 3 }">Вертебрологія</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/vertebrologiya/" target="_self">
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
                <!-- Content-Вертебрологія -->
                <div x-show="expanded == 3" x-collapse class="flex justify-center m-10">
                    <?php priceList('vertebrologiya')?>
                </div>

                <!-- Accordion Кінезіотерапія -->
                <div @click="expanded !== 4 ? expanded = 4 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 4 }">Кінезіотерапія</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/kinezioterapiya/" target="_self">
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
                <!-- Content-Кінезіотерапія -->
                <div x-show="expanded == 4" x-collapse class="flex justify-center m-10">
                    <?php priceList('kinezioterapiya')?>
                </div>

                <!-- Accordion Остеопатія -->
                <div @click="expanded !== 5 ? expanded = 5 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 5 }">Остеопатія</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/osteopatiya/" target="_self">
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
                <!-- Content-Остеопатія -->
                <div x-show="expanded == 5" x-collapse class="flex justify-center m-10">
                    <?php priceList('osteopatiya')?>
                </div>
            </div>
        </div>

        <!-- Фейсбілдінг -->
        <div @click="expanded !== 3 ? expanded = 3 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 3 }">
                    Фейсбілдінг
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service/fejsbildyng/" target="_self">
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

        <!-- Accordion-Фейсбілдінг -->
        <div x-show="expanded == 3" x-collapse class="ml-8">

            <div x-data="{ expanded: null }">
                <div class="flex justify-center m-10">
                    <?php priceList('fejsbildyng')?>
                </div>
            </div>
        </div>

        <!-- Оздоровчі масажі -->
        <div @click="expanded !== 4 ? expanded = 4 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 4 }">
                    Оздоровчі масажі
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service_category/massage/ozdorovchi-masazhi/" target="_self">
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

        <!-- Accordion-Оздоровчі масажі -->
        <div x-show="expanded == 4" x-collapse class="ml-8">

            <div x-data="{ expanded: null }">

                <!-- Accordion Оздоровчий масаж -->
                <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Оздоровчий масаж</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/ozdorovchyj-masazh/" target="_self">
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
                <!-- Content-Оздоровчий масаж -->
                <div x-show="expanded == 1" x-collapse class="flex justify-center m-10">
                    <?php priceList('ozdorovchyj-masazh')?>
                </div>

                <!-- Accordion Лімфодренажний масаж -->
                <div @click="expanded !== 2 ? expanded = 2 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 2 }">Лімфодренажний масаж
                    </div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/limfodrenazhnyj-masazh/" target="_self">
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
                <!-- Content-Лімфодренажний масаж -->
                <div x-show="expanded == 2" x-collapse class="flex justify-center m-10">
                    <?php priceList('limfodrenazhnyj-masazh')?>
                </div>

                <!-- Accordion Енергетичний масаж -->
                <div @click="expanded !== 3 ? expanded = 3 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 3 }">Енергетичний масаж
                    </div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/energetychnyj-masazh/" target="_self">
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
                <!-- Content-Енергетичний масаж -->
                <div x-show="expanded == 3" x-collapse class="flex justify-center m-10">
                    <?php priceList('energetychnyj-masazh')?>
                </div>
            </div>
        </div>

        <!-- Релаксуючі масажі -->
        <div @click="expanded !== 5 ? expanded = 5 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 5 }">
                    Релаксуючі масажі
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service_category/massage/relaksuyuchi-masazhi/" target="_self">
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

        <!-- Accordion-Релаксуючі масажі -->
        <div x-show="expanded == 5" x-collapse class="ml-8">

            <div x-data="{ expanded: null }">

                <!-- Accordion Релаксуючі масажі -->
                <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Релаксуючі масажі</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/relaksuyuchi-masazhi/" target="_self">
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
                <!-- Content-Релаксуючі масажі -->
                <div x-show="expanded == 1" x-collapse class="flex justify-center m-10">
                    <?php priceList('relaksuyuchi-masazhi')?>
                </div>

                <!-- Accordion Ексклюзивні масажі -->
                <div @click="expanded !== 2 ? expanded = 2 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 2 }">Ексклюзивні масажі
                    </div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/eksklyuzyvni-masazhi/" target="_self">
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
                <!-- Content-Ексклюзивні масажі -->
                <div x-show="expanded == 2" x-collapse class="flex justify-center m-10">
                    <?php priceList('eksklyuzyvni-masazhi')?>
                </div>

                <!-- Accordion Ексклюзивні масажі для чоловіків -->
                <div @click="expanded !== 3 ? expanded = 3 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 3 }">Ексклюзивні масажі для
                        чоловіків</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/eksklyuzyvni-masazhi-dlya-cholovikiv/" target="_self">
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
                <!-- Content-Ексклюзивні масажі для чоловіків -->
                <div x-show="expanded == 3" x-collapse class="flex justify-center m-10">
                    <?php priceList('eksklyuzyvni-masazhi-dlya-cholovikiv')?>
                </div>

                <!-- Accordion Ексклюзивні масажі для двох -->
                <div @click="expanded !== 4 ? expanded = 4 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 4 }">Ексклюзивні масажі для
                        двох</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/eksklyuzyvni-masazhi-dlya-dvoh/" target="_self">
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
                <!-- Content-Ексклюзивні масажі для двох -->
                <div x-show="expanded == 4" x-collapse class="flex justify-center m-10">
                    <?php priceList('eksklyuzyvni-masazhi-dlya-dvoh')?>
                </div>
            </div>
        </div>

        <!-- Антицелюлітні програми -->
        <div @click="expanded !== 6 ? expanded = 6 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 6 }">
                    Антицелюлітні програми
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service_category/massage/antyczelyulitni-programy/" target="_self">
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

        <!-- Accordion-Антицелюлітні програми -->
        <div x-show="expanded == 6" x-collapse class="ml-8">

            <div x-data="{ expanded: null }">

                <!-- Accordion Антицелюлітний масаж -->
                <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Антицелюлітний масаж
                    </div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/antyczelyulitnyj-masazh/" target="_self">
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
                <!-- Content-Антицелюлітний масаж -->
                <div x-show="expanded == 1" x-collapse class="flex justify-center m-10">
                    <?php priceList('antyczelyulitnyj-masazh')?>
                </div>

                <!-- Accordion Антицелюлітне обгортання -->
                <div @click="expanded !== 2 ? expanded = 2 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 2 }">Антицелюлітне
                        обгортання</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/antyczelyulitne-obgortannya/" target="_self">
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
                <!-- Content-Антицелюлітне обгортання -->
                <div x-show="expanded == 2" x-collapse class="flex justify-center m-10">
                    <?php priceList('antyczelyulitne-obgortannya')?>
                </div>
            </div>
        </div>

        <!-- Spa-програми -->
        <div @click="expanded !== 7 ? expanded = 7 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 7 }">
                    Spa-програми
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service_category/massage/spa-programy/" target="_self">
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

        <!-- Accordion-Spa-програми -->
        <div x-show="expanded == 7" x-collapse class="ml-8">

            <div x-data="{ expanded: null }">

                <!-- Accordion Аромамасаж -->
                <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Аромамасаж</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/aromamasazh/" target="_self">
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
                <!-- Content-Аромамасаж -->
                <div x-show="expanded == 1" x-collapse class="flex justify-center m-10">
                    <?php priceList('aromamasazh')?>
                </div>

                <!-- Accordion Spa для тіла -->
                <div @click="expanded !== 2 ? expanded = 2 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 2 }">Spa для тіла</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/spa-dlya-tila/" target="_self">
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
                <!-- Content-Spa для тіла -->
                <div x-show="expanded == 2" x-collapse class="flex justify-center m-10">
                    <?php priceList('spa-dlya-tila')?>
                </div>

                <!-- Accordion SPA-обгортання -->
                <div @click="expanded !== 3 ? expanded = 3 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 3 }">SPA-обгортання</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/spa-obgortannya/" target="_self">
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
                <!-- Content-SPA-обгортання -->
                <div x-show="expanded == 3" x-collapse class="flex justify-center m-10">
                    <?php priceList('spa-obgortannya')?>
                </div>
            </div>
        </div>
    </div>
</article>
