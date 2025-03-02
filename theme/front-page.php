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

        <div class="prose prose-_tw container max-w-content mx-auto">
            <h1 class="text-center mt-8">ПОСЛУГИ</h1>
            <div class="flex max-md:flex-col flex-row justify-between max-sm:mx-4">
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
            <h1 class="text-center pt-8 mt-8 border-t border-gray-400">НАШІ ФАХІВЦІ</h1>
            <div class="container max-w-content mx-auto px-4">
                <div x-data="carousel()" x-init="init()" class="relative overflow-hidden group">
                    <div x-ref="container"
                        class="md:flex md:overflow-x-scroll scroll-snap-x md:space-x-4 space-y-4 md:space-y-0 no-scrollbar">
                        <?php
					// WP_Query arguments
$args = array(
	'post_type'              => array( 'specialist' ),
	'post_status'            => array( 'publish' ),
	/*
	'tax_query' => array(
		array(
			'taxonomy' => 'specialist-category',
			'field'    => 'slug',
			'terms'    => 'stomatologiya'
		)
	),
	*/
);

// The Query
$query = new WP_Query( $args );

if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		?>
                        <div
                            class="ml-1 flex-auto grow-0 shrink-0 w-66 max-sm:w-96 justify-center snap-center overflow-hidden shadow-md">

                            <div class="px-2 py-3 flex flex-col text-center">
                                <div><?php if ( has_post_thumbnail() ) { ?>
                                    <figure class="!mb-4 !mt-0">
                                        <?php echo get_the_post_thumbnail(); ?>
                                    </figure>
                                    <?php } ?>
                                </div>
                                <div class="text-lg font-semibold"><?php the_title(); ?></div>
                                <div class="text-sm my-2"><?php if ( get_field('specialty') ) :
                                echo get_field('specialty');
                                endif; ?>
                                </div>
                                <div class="mt-2">
                                    <a class="font-semibold" href="<?php the_permalink();?>">Докладніше</a>
                                </div>
                            </div>
                        </div>
                        <?php
	}
}
else {
	// Постов не найдено
}
?>
                    </div>
                    <div @click="scrollTo(prev)" x-show="prev !== null"
                        class="hidden md:block absolute top-1/2 left-0 bg-orange-block p-2 transition-transform ease-in-out transform -translate-x-full -translate-y-1/2 group-hover:translate-x-0 cursor-pointer">
                        <div class="text-white text-2xl font-bold">&lt;</div>
                    </div>
                    <div @click="scrollTo(next)" x-show="next !== null"
                        class="hidden md:block absolute top-1/2 right-0 bg-orange-block p-2 transition-transform ease-in-out transform translate-x-full -translate-y-1/2 group-hover:translate-x-0 cursor-pointer">
                        <div class="text-white text-2xl font-bold">&gt;</div>
                    </div>
                </div>
            </div>
            <h1 class="text-center pt-8 mt-8 border-t border-gray-400">ВІДГУКИ</h1>
            <div class="flex max-md:flex-col flex-row justify-between max-sm:mx-4">
                <div class="flex basis-1/4 m-2 p-2 max-md:border-0 border-r border-gray-200">
                    <?php
		   echo do_shortcode( '[site_reviews display=1 hide="title"]' );
		   ?>
                </div>
                <div class="flex basis-1/4 m-2 p-2 max-md:border-0 border-r border-gray-200">
                    <?php
		   echo do_shortcode( '[site_reviews display=1 offset=1 hide="title"]' );
		   ?>

                </div>
                <div class="flex basis-1/4 m-2 p-2 max-md:border-0 border-r border-gray-200">
                    <?php
		   echo do_shortcode( '[site_reviews display=1 offset=2 hide="title"]' );
		   ?>
                </div>
                <div class="flex basis-1/4 m-2 p-2 h-90 overflow-hidden hover:overflow-y-auto">
                    <?php
		   echo do_shortcode( '[site_reviews display=1 offset=3 hide="title"]' );
		   ?>
                </div>
            </div>
            <div class="flex justify-center mt-10">
                <a href="/reviews"><button type="button"
                        class="wp-block-button wp-block-button__link has-text-align-center wp-element-button">Всі
                        відгуки</button></a>

            </div>

        </div>

    </main><!-- #main -->
</section><!-- #primary -->


<?php






get_footer();