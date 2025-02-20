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
    <main id="main" <?php post_class('entry-content prose prose-_tw'); ?>>
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
                    <div class="md:min-w-130 max-sm:w-80 px-6 py-4 mx-auto text-left bg-white rounded shadow-lg"
                        @click.away="showModal = false" x-transition:enter="motion-safe:ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                        <!-- Title / Close-->
                        <div class="flex items-center justify-between">
                            <h3 class="mr-3 text-black max-w-none">Записатися на прийом </h3>

                            <button type="button" class="z-50 cursor-pointer" @click="showModal = false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <!-- content -->
                        <div><?php echo do_shortcode( '[wpforms id="1620" title="false"]' );?></div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- #main -->
</section><!-- #primary -->

<?php


get_footer();