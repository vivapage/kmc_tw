<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kmc_tw
 */

get_header();
?>


<section id="primary">
    <main id="main" <?php post_class('prose prose-_tw'); ?>>
        <div class="conteiner max-w-content mx-auto">
            <div x-data="{ 'showModal': false }" @keydown.escape="showModal = false">
                <!-- Trigger for Modal -->
                <button type="button" @click="showModal = true"
                    class="wp-block-button wp-block-button__link has-text-align-center wp-element-button">Записатися на
                    прийом</button>

                <!-- Modal -->
                <div class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black/20 backdrop-blur-md"
                    x-show="showModal">
                    <!-- Modal inner -->
                    <div class="max-w-3xl px-6 py-4 mx-auto text-left bg-white rounded shadow-lg"
                        @click.away="showModal = false" x-transition:enter="motion-safe:ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                        <!-- Title / Close-->
                        <div class="flex items-center justify-between">
                            <h5 class="mr-3 text-black max-w-none">Title</h5>

                            <button type="button" class="z-50 cursor-pointer" @click="showModal = false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <!-- content -->
                        <div>Content goes here</div>
                    </div>
                </div>
            </div>







            <div x-data="{modalIsOpen: false}">
                <button x-on:click="modalIsOpen = true" type="button"
                    class="wp-block-button wp-block-button__link has-text-align-center wp-element-button">Записатися на
                    прийом</button>
                <div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms
                    x-trap.inert.noscroll="modalIsOpen" x-on:keydown.esc.window="modalIsOpen = false"
                    x-on:click.self="modalIsOpen = false"
                    class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8"
                    role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
                    <!-- Modal Dialog -->
                    <div x-show="modalIsOpen"
                        x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
                        x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100"
                        class="flex max-w-lg flex-col gap-4 overflow-hidden rounded-radius border border-outline bg-surface text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">
                        <!-- Dialog Header -->
                        <div
                            class="flex items-center justify-between border-b border-outline bg-surface-alt/60 p-4 dark:border-outline-dark dark:bg-surface-dark/20">
                            <h3 id="defaultModalTitle"
                                class="font-semibold tracking-wide text-on-surface-strong dark:text-on-surface-dark-strong">
                                Special Offer</h3>
                            <button x-on:click="modalIsOpen = false" aria-label="close modal">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                    stroke="currentColor" fill="none" stroke-width="1.4" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <!-- Dialog Body -->
                        <div class="px-4 py-8">
                            <p>As a token of appreciation, we have an exclusive offer just for you. Upgrade your account
                                now
                                to unlock premium features and enjoy a seamless experience.</p>
                        </div>
                        <!-- Dialog Footer -->
                        <div
                            class="flex flex-col-reverse justify-between gap-2 border-t border-outline bg-surface-alt/60 p-4 dark:border-outline-dark dark:bg-surface-dark/20 sm:flex-row sm:items-center md:justify-end">
                            <button x-on:click="modalIsOpen = false" type="button"
                                class="whitespace-nowrap rounded-radius px-4 py-2 text-center text-sm font-medium tracking-wide text-on-surface transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 dark:text-on-surface-dark dark:focus-visible:outline-primary-dark">Remind
                                me later</button>
                            <button x-on:click="modalIsOpen = false" type="button"
                                class="whitespace-nowrap rounded-radius bg-primary border border-primary dark:border-primary-dark px-4 py-2 text-center text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 dark:bg-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">Upgrade
                                Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- #main -->
</section><!-- #primary -->

<?php


get_footer();