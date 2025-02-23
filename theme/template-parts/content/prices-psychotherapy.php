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

        <!-- Консультація психолога -->
        <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">
                    Консультація психолога
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service/konsultacziya-psyhologa/" target="_self">
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

        <!-- Accordion-Консультація психолога -->
        <div x-show="expanded == 1" class="ml-8">

            <div x-data="{ expanded: null }">
                <div class="flex justify-center m-10">
                    <?php price_list('316')?>
                </div>
            </div>
        </div>

        <!-- Онлайн консультація -->
        <div @click="expanded !== 2 ? expanded = 2 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 2 }">
                    Онлайн консультація
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service/onlajn-konsultacziya-psuxologa/" target="_self">
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

        <!-- Accordion-Онлайн консультація -->
        <div x-show="expanded == 2" class="ml-8">

            <div x-data="{ expanded: null }">
                <div class="flex justify-center m-10">
                    <?php price_list('317')?>
                </div>
            </div>
        </div>

        <!-- Системні розстановки по Хеллінгеру -->
        <div @click="expanded !== 3 ? expanded = 3 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 3 }">
                    Системні розстановки по Хеллінгеру
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/systemni-rozstanovky-po-helingery/" target="_self">
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

        <!-- Accordion-Системні розстановки по Хеллінгеру -->
        <div x-show="expanded == 3" class="ml-8">

            <div x-data="{ expanded: null }">
                <div class="flex justify-center m-10">
                    <?php price_list('318')?>
                </div>
            </div>
        </div>

        <!-- Коучинг -->
        <div @click="expanded !== 4 ? expanded = 4 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 4 }">
                    Коучинг
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service/kouchyng/" target="_self">
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

        <!-- Accordion-Коучинг -->
        <div x-show="expanded == 4" class="ml-8">

            <div x-data="{ expanded: null }">
                <div class="flex justify-center m-10">
                    <?php price_list('319')?>
                </div>
            </div>
        </div>

        <!-- Кайтен-сесії -->
        <div @click="expanded !== 5 ? expanded = 5 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 5 }">
                    Кайтен-сесії
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service/kajten-sesiyi/" target="_self">
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

        <!-- Accordion-Кайтен-сесії -->
        <div x-show="expanded == 5" class="ml-8">

            <div x-data="{ expanded: null }">
                <div class="flex justify-center m-10">
                    <?php price_list('320')?>
                </div>
            </div>
        </div>

        <!-- Холодинаміка -->
        <div @click="expanded !== 6 ? expanded = 6 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 6 }">
                    Холодинаміка
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service/holodynamika/" target="_self">
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

        <!-- Accordion-Холодинаміка -->
        <div x-show="expanded == 6" class="ml-8">

            <div x-data="{ expanded: null }">
                <div class="flex justify-center m-10">
                    <?php price_list('321')?>
                </div>
            </div>
        </div>

        <!-- Кармічний менеджмент -->
        <div @click="expanded !== 7 ? expanded = 7 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 7 }">
                    Кармічний менеджмент
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service/karmichnyj-menedzhment/" target="_self">
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

        <!-- Accordion-Кармічний менеджмент -->
        <div x-show="expanded == 7" class="ml-8">

            <div x-data="{ expanded: null }">
                <div class="flex justify-center m-10">
                    <?php price_list('322')?>
                </div>
            </div>
        </div>

        <!-- Трансформація особистості -->
        <div @click="expanded !== 8 ? expanded = 8 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 8 }">
                    Трансформація особистості
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service/transformacziya-osobystosti/" target="_self">
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

        <!-- Accordion-Трансформація особистості -->
        <div x-show="expanded == 8" class="ml-8">

            <div x-data="{ expanded: null }">
                <div class="flex justify-center m-10">
                    <?php price_list('2103')?>
                </div>
            </div>
        </div>




    </div>
</article>