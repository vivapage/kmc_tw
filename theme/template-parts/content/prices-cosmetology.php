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

        <!-- Лазерна косметологія Tab1 -->
        <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">
                    Лазерна косметологія
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service_category/cosmetology/lazerna-kosmetologiya/" target="_self">
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

        <!-- Accordion-Лазерна косметологія -->
        <div x-show="expanded == 1" x-collapse class="ml-8">

            <div x-data="{ expanded: null }">

                <!-- Accordion SMAS-ліфтинг -->
                <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">SMAS-ліфтинг</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/smas-liftyng/" target="_self">
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
                <!-- Content-SMAS-ліфтинг -->
                <div x-show="expanded == 1" x-collapse class="flex justify-center m-10">
                    <?php priceList('smas-liftyng')?>
                </div>

                <!-- Accordion Блефаропластика -->
                <div @click="expanded !== 2 ? expanded = 2 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 2 }">Блефаропластика</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/blefaroplastyka/" target="_self">
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
                <!-- Content-Блефаропластика -->
                <div x-show="expanded == 2" x-collapse class="flex justify-center m-10">
                    <?php priceList('blefaroplastyka')?>
                </div>
            </div>
        </div>

        <!-- Ін'єкційна косметологія Tab2 -->
        <div @click="expanded !== 2 ? expanded = 2 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 2 }">
                    Ін'єкційна косметологія
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service_category/cosmetology/inyekczijna-kosmetologiya/" target="_self">
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

        <!-- Accordion-Ін'єкційна косметологія -->
        <div x-show="expanded == 2" x-collapse class="ml-8">

            <div x-data="{ expanded: null }">

                <!-- Accordion Мезотерапія -->
                <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Мезотерапія</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/mezoterapiya/" target="_self">
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
                <!-- Content-Мезотерапія -->
                <div x-show="expanded == 1" x-collapse class="flex justify-center m-10">
                    <?php priceList('mezoterapiya')?>
                </div>

                <!-- Accordion Плазмоліфтінг -->
                <div @click="expanded !== 2 ? expanded = 2 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 2 }">Плазмоліфтінг</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/plazmolifting/" target="_self">
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
                <!-- Content-Плазмоліфтінг -->
                <div x-show="expanded == 2" x-collapse class="flex justify-center m-10">
                    <?php priceList('plazmolifting')?>
                </div>

                <!-- Accordion Біорепарація -->
                <div @click="expanded !== 3 ? expanded = 3 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 3 }">Біорепарація</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/bioreparacziya/" target="_self">
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
                <!-- Content-Біорепарація -->
                <div x-show="expanded == 3" x-collapse class="flex justify-center m-10">
                    <?php priceList('bioreparacziya')?>
                </div>

                <!-- Accordion Біоревіталізація -->
                <div @click="expanded !== 4 ? expanded = 4 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 4 }">Біоревіталізація</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/biorevitalizacziya/" target="_self">
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
                <!-- Content-Біоревіталізація -->
                <div x-show="expanded == 4" x-collapse class="flex justify-center m-10">
                    <?php priceList('biorevitalizacziya')?>
                </div>

                <!-- Accordion Векторний ліфтинг -->
                <div @click="expanded !== 5 ? expanded = 5 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 5 }">Векторний ліфтинг</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/vektornyj-liftyng/" target="_self">
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
                <!-- Content-Векторний ліфтинг -->
                <div x-show="expanded == 5" x-collapse class="flex justify-center m-10">
                    <?php priceList('vektornyj-liftyng')?>
                </div>

                <!-- Accordion Ботулінотерапія -->
                <div @click="expanded !== 6 ? expanded = 6 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 5 }">Ботулінотерапія</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/botulinoterapiya/" target="_self">
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
                <!-- Content-Ботулінотерапія -->
                <div x-show="expanded == 6" x-collapse class="flex justify-center m-10">
                    <?php priceList('botulinoterapiya')?>
                </div>
            </div>
        </div>

        <!-- Контурна пластика -->
        <div @click="expanded !== 3 ? expanded = 3 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 3 }">
                    Контурна пластика
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service/konturna-plastyka/" target="_self">
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

        <!-- Accordion-Контурна пластика -->
        <div x-show="expanded == 3" x-collapse class="ml-8">

            <div x-data="{ expanded: null }">
                <div class="flex justify-center m-10">
                    <?php priceList('konturna-plastyka')?>
                </div>
            </div>
        </div>

        <!-- Апаратна косметологія -->
        <div @click="expanded !== 4 ? expanded = 4 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 4 }">
                    Апаратна косметологія
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service_category/cosmetology/aparatna-kosmetologiya/" target="_self">
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

        <!-- Accordion-Апаратна косметологія -->
        <div x-show="expanded == 4" x-collapse class="ml-8">

            <div x-data="{ expanded: null }">

                <!-- Accordion Мікродермобразія -->
                <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Мікродермобразія</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/mikrodermobraziya/" target="_self">
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
                <!-- Content-Мікродермобразія -->
                <div x-show="expanded == 1" x-collapse class="flex justify-center m-10">
                    <?php priceList('mikrodermobraziya')?>
                </div>

                <!-- Accordion Кріодермія -->
                <div @click="expanded !== 2 ? expanded = 2 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 2 }">Кріодермія</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/kriodermiya/" target="_self">
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
                <!-- Content-Кріодермія -->
                <div x-show="expanded == 2" x-collapse class="flex justify-center m-10">
                    <?php priceList('kriodermiya')?>
                </div>

                <!-- Accordion Міостимуляція -->
                <div @click="expanded !== 3 ? expanded = 3 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 3 }">Міостимуляція</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/miostymulyacziya/" target="_self">
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
                <!-- Content-Міостимуляція -->
                <div x-show="expanded == 3" x-collapse class="flex justify-center m-10">
                    <?php priceList('miostymulyacziya')?>
                </div>
            </div>
        </div>

        <!-- Пілінги -->
        <div @click="expanded !== 5 ? expanded = 5 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 2 }">
                    Пілінги
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service_category/cosmetology/pilingy/" target="_self">
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

        <!-- Accordion-Пілінги -->
        <div x-show="expanded == 5" x-collapse class="ml-8">

            <div x-data="{ expanded: null }">

                <!-- Accordion Пілінги для обличчя та декольте -->
                <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Пілінги для обличчя та
                        декольте</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/pilingy-dlya-oblychchya-ta-dekolte/" target="_self">
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
                <!-- Content-Пілінги для обличчя та декольте -->
                <div x-show="expanded == 1" x-collapse class="flex justify-center m-10">
                    <?php priceList('pilingy-dlya-oblychchya-ta-dekolte')?>
                </div>

                <!-- Accordion Пілінги-біоревіталізанти для обличчя -->
                <div @click="expanded !== 2 ? expanded = 2 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 2 }">
                        Пілінги-біоревіталізанти для обличчя</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/pilingy-biorevitalizanty-dlya-oblychchya/" target="_self">
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
                <!-- Content-Пілінги-біоревіталізанти для обличчя -->
                <div x-show="expanded == 2" x-collapse class="flex justify-center m-10">
                    <?php priceList('pilingy-biorevitalizanty-dlya-oblychchya')?>
                </div>
            </div>
        </div>

        <!-- Догляд обличчя та декольте -->
        <div @click="expanded !== 6 ? expanded = 6 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 6 }">
                    Догляд обличчя та декольте
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service_category/cosmetology/dogliad-oblychchya-ta-dekolte/" target="_self">
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

        <!-- Accordion-Догляд обличчя та декольте -->
        <div x-show="expanded == 6" x-collapse class="ml-8">

            <div x-data="{ expanded: null }">
                <!-- Accordion Масаж обличчя та декольте -->
                <div @click="expanded !== 4 ? expanded = 4 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Масаж обличчя та
                        декольте</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/masazh-oblychchya-ta-dekolte-2/" target="_self">
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
                <!-- Content-Масаж обличчя та декольте -->
                <div x-show="expanded == 4" x-collapse class="flex justify-center m-10">
                    <?php priceList('masazh-oblychchya-ta-dekolte-2')?>
                </div>

                <!-- Accordion Чистка обличчя -->
                <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Чистка обличчя</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/chystka-oblychchya/" target="_self">
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
                <!-- Content-Чистка обличчя -->
                <div x-show="expanded == 1" x-collapse class="flex justify-center m-10">
                    <?php priceList('chystka-oblychchya')?>
                </div>

                <!-- Accordion Догляд за обличчям -->
                <div @click="expanded !== 2 ? expanded = 2 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 2 }">Догляд за обличчям
                    </div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/doglyad-za-oblychchyam/" target="_self">
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
                <!-- Content-Догляд за обличчям -->
                <div x-show="expanded == 2" x-collapse class="flex justify-center m-10">
                    <?php priceList('doglyad-za-oblychchyam')?>
                </div>

                <!-- Accordion Маски для обличчя -->
                <div @click="expanded !== 3 ? expanded = 3 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 3 }">Маски для обличчя</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/masky-dlya-oblychchya/" target="_self">
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
                <!-- Content-Маски для обличчя -->
                <div x-show="expanded == 3" x-collapse class="flex justify-center m-10">
                    <?php priceList('masky-dlya-oblychchya')?>
                </div>

                <!-- Accordion Альгінатні маски Derma Series -->
                <div @click="expanded !== 5 ? expanded = 5 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 5 }">Альгінатні маски Derma
                        Series</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/alginatni-masky-derma-series/" target="_self">
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
                <!-- Content-Альгінатні маски Derma Series -->
                <div x-show="expanded == 5" x-collapse class="flex justify-center m-10">
                    <?php priceList('alginatni-masky-derma-series')?>
                </div>
            </div>
        </div>

        <!-- Косметологія для чоловіків -->
        <div @click="expanded !== 7 ? expanded = 7 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 7 }">
                    Косметологія для чоловіків
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service/kosmetologiya-dlya-cholovikiv/" target="_self">
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

        <!-- Accordion-Косметологія для чоловіків -->
        <div x-show="expanded == 7" x-collapse class="ml-8">

            <div x-data="{ expanded: null }">
                <div class="flex justify-center m-10">
                    <?php priceList('kosmetologiya-dlya-cholovikiv')?>
                </div>
            </div>
        </div>

        <!-- Лікувальна косметологія для підлітків -->
        <div @click="expanded !== 8 ? expanded = 8 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 8 }">
                    Лікувальна косметологія для підлітків
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service/likuvalna-kosmetologiya-dlya-pidlitkiv/" target="_self">
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

        <!-- Accordion-Лікувальна косметологія для підлітків -->
        <div x-show="expanded == 8" x-collapse class="ml-8">

            <div x-data="{ expanded: null }">
                <div class="flex justify-center m-10">
                    <?php priceList('likuvalna-kosmetologiya-dlya-pidlitkiv')?>
                </div>
            </div>
        </div>

        <!-- SPA&WELLNESS -->
        <div @click="expanded !== 9 ? expanded = 9 : expanded = null" class="first-tab">

            <div class="flex flex-row justify-between pb-2">
                <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 9 }">
                    SPA&WELLNESS
                </div>
                <div class="flex flex-row items-center gap-10">
                    <div class="button-price">
                        <a href="/service_category/cosmetology/spawellness/" target="_self">
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

        <!-- Accordion-SPA&WELLNESS -->
        <div x-show="expanded == 9" x-collapse class="ml-8">

            <div x-data="{ expanded: null }">

                <!-- Accordion Догляд за тілом -->
                <div @click="expanded !== 1 ? expanded = 1 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 1 }">Догляд за тілом</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/doglyad-za-tilom/" target="_self">
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
                <!-- Content-Догляд за тілом -->
                <div x-show="expanded == 1" x-collapse class="flex justify-center m-10">
                    <?php priceList('doglyad-za-tilom')?>
                </div>

                <!-- Accordion Корекція форми обличчя -->
                <div @click="expanded !== 2 ? expanded = 2 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 2 }">Корекція форми обличчя
                    </div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/korekcziya-formy-oblychchya/" target="_self">
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
                <!-- Content-Корекція форми обличчя -->
                <div x-show="expanded == 2" x-collapse class="flex justify-center m-10">
                    <?php priceList('korekcziya-formy-oblychchya')?>
                </div>

                <!-- Accordion Депіляція -->
                <div @click="expanded !== 3 ? expanded = 3 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 3 }">Депіляція</div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/depilyacziya/" target="_self">
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
                <!-- Content-Депіляція -->
                <div x-show="expanded == 3" x-collapse class="flex justify-center m-10">
                    <?php priceList('depilyacziya')?>
                </div>

                <!-- Accordion Ліфтингові програми -->
                <div @click="expanded !== 4 ? expanded = 4 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 4 }">Ліфтингові програми
                    </div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/liftyngovi-programy/" target="_self">
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
                <!-- Content-Ліфтингові програми -->
                <div x-show="expanded == 4" x-collapse class="flex justify-center m-10">
                    <?php priceList('liftyngovi-programy')?>
                </div>

                <!-- Accordion SPA програми -->
                <div @click="expanded !== 5 ? expanded = 5 : expanded = null" class="second-tab">
                    <div class="flex items-center" x-bind:class="{ 'font-bold': expanded == 5 }">SPA програми
                    </div>
                    <div class="flex flex-row items-center gap-10">
                        <div class="button-price">
                            <a href="/service/spa-programy/" target="_self">
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
                <!-- Content-SPA програми -->
                <div x-show="expanded == 5" x-collapse class="flex justify-center m-10">
                    <?php priceList('spa-programy')?>
                </div>
            </div>
        </div>
    </div>

</article>
