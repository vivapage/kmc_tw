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
<?php add_revslider('slider','homepage'); ?>
<section id="primary">
    <main id="main">

        <?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/content', 'front' );
			}

			// Previous/next page navigation.
			kmc_tw_the_posts_navigation();

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>

        <div class="prose prose-_tw container max-w-content mx-auto px-4 mt-8">
            <h1 style="text-align: center;">ПОСЛУГИ</h1>
            <div class="flex max-md:flex-col flex-row justify-between">
                <div class="flex flex-col max-md:basis-full basis-1/2 justify-between">
                    <div class="flex max-sm:flex-col flex-row justify-between">
                        <div class="flex basis-1/2">
                            <img class="w-full object-cover !my-0"
                                src="<?php echo get_template_directory_uri();?>/images/stomatologia.jpg"
                                alt="Стоматологія">
                        </div>
                        <div class="flex basis-1/2 max-sm:min-h-[16rem]">
                            <div
                                class="block-menu m-2 p-2 w-full sm:max-h-[16rem] overflow-y-hidden hover:overflow-y-auto text-sm">
                                <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_7' ) ); ?>
                            </div>

                        </div>
                    </div>
                    <div class="flex max-sm:flex-col flex-row justify-between sm:flex-row-reverse">
                        <div class="flex basis-1/2">
                            <img class="w-full object-cover !my-0"
                                src="<?php echo get_template_directory_uri();?>/images/cosmetologia.jpg"
                                alt="Косметология">
                        </div>
                        <div class="flex basis-1/2 max-sm:min-h-[16rem]">
                            <div
                                class="block-menu m-2 p-2 w-full sm:max-h-[16rem] overflow-y-hidden hover:overflow-y-auto text-sm">
                                <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_9' ) ); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col max-md:basis-full basis-1/2 justify-between">
                    <div class="flex max-sm:flex-col flex-row justify-between">
                        <div class="flex basis-1/2">
                            <img class="w-full object-cover !my-0"
                                src="<?php echo get_template_directory_uri();?>/images/massage.jpg" alt="Массаж">
                        </div>
                        <div class="flex basis-1/2 max-sm:min-h-[16rem]">
                            <div
                                class="block-menu m-2 p-2 w-full sm:max-h-[16rem] overflow-y-hidden hover:overflow-y-auto text-sm">
                                <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_11' ) ); ?>

                            </div>
                        </div>
                    </div>
                    <div class="flex max-sm:flex-col flex-row justify-between sm:flex-row-reverse">
                        <div class="flex basis-1/2">
                            <img class="w-full object-cover !my-0"
                                src="<?php echo get_template_directory_uri();?>/images/psihologia.jpg" alt="Псіхологія">
                        </div>
                        <div class="flex basis-1/2 max-sm:min-h-[16rem]">
                            <div
                                class="block-menu m-2 p-2 w-full sm:max-h-[16rem] overflow-y-hidden hover:overflow-y-auto text-sm">
                                <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_10' ) ); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main><!-- #main -->
</section><!-- #primary -->


<?php





get_footer();