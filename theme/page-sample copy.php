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
    <main id="main">

        <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open, or we have at least one comment, load
				// the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.


?>
        <div class="container max-w-content mt-12 flex mx-auto items-center prose prose-_tw">

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
                        class="ml-2 flex-auto grow-0 shrink-0 w-67 max-sm:w-96 justify-center snap-center overflow-hidden shadow-md">

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
                                <a class="font-semibold" href="<?phpthe_permalink();?>">Докладніше</a>
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

        <?php
// Возвращаем оригинальные данные поста. Сбрасываем $post.
wp_reset_postdata();
?>


        <div class="modal" role="dialog" tabindex="-1" x-show="isModalOpen" x-on:click.away="isModalOpen = false"
            x-cloak x-transition>
            <div class="model-inner">
                <div class="modal-header">
                    <h3>Hello World</h3>
                    <button aria-label="Close" x-on:click="isModalOpen=false">✖</button>
                </div>
                <p>
                    Natus earum velit ab nobis eos. Sed et exercitationem voluptatum omnis
                    dolor voluptates. Velit ut ipsam sunt ipsam nostrum. Maiores officia
                    accusamus qui sapiente. Dolor qui vel placeat dolor nesciunt quo dolor
                    dolores. Quo accusamus hic atque nisi minima.
                </p>
            </div>
        </div>
        </div>
    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
