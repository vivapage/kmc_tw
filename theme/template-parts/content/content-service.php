<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kmc_tw
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('prose prose-_tw'); ?>>
    <header class="entry-header container max-w-content mx-auto max-sm:px-4 relative">
        <div class="text-sm z-[1] text-gray-500 absolute -top-4 border-b border-gray-300">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?></div>
        <div class="absolute z-[1] mt-15 ">
            <?php the_title( '<h1 class="entry-title text-gray-800 drop-shadow-[1px_1px_1px_rgba(255,255,255,1)]">', '</h1>' ); ?>
        </div>
        <div class="absolute top-2 right-0 ml-80 max-sm:ml-0 max-sm:right-4 max-sm:top-26 max-sm:mt-4 max-sm:mr-4">
            <?php
if ( has_post_thumbnail() ) {
the_post_thumbnail(array( 'medium', 'class' => 'ml-80 object-cover max-sm:mx-4 max-sm:h-50 h-120 max-w-full' ));
}
else {
?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="Placeholder"
                class="object-cover max-sm:mx-4 max-sm:h-50 h-120 max-w-full">
            <?php
}
?>
            <?php //the_post_thumbnail(array( 'medium', 'class' => 'ml-80 object-cover max-sm:mx-4 max-sm:h-50 h-80 max-w-full' )); ?>
        </div>
    </header><!-- .entry-header -->


    <div class="container max-w-content mx-auto  pt-130 pb-4 flex max-sm:flex-col flex-row">
        <div
            class="max-sm:basis-full basis-3/4 max-sm:border-0 max-sm:pr-0 max-sm:mx-4 pr-4 mr-4 max-sm:mb-10 border-r-1 border-gray-300">
            <?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__( 'Continue reading<span class="sr-only"> "%s"</span>', 'kmc_tw' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div>' . __( 'Pages:', 'kmc_tw' ),
				'after'  => '</div>',
			)
		);
		?>
            <h2 class="mt-8 pt-8 border-t border-gray-200">Ціни</h2>
            <?php
    global $post;
    $post_slug = $post->post_name;
priceList($post_slug)
            ?>
            <div class="wp-block-buttons mt-4 mb-6 text-center">
                <div class="wp-block-button"><a class="wp-block-button__link has-text-align-center wp-element-button"
                        href="/prices/">Всі ціни</a></div>
            </div>

        </div>
        <div class="max-sm:basis-full basis-1/4 mx-auto">
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons mt-4 mb-6">
                <!-- wp:button {"textAlign":"center"} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-text-align-center wp-element-button"
                        href="/zapysatysya-na-pryjom/">Записатися на прийом</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->


            <?php
			$counter = 0;
				$terms = get_the_terms( $post->ID , 'service_category' );
				foreach ( $terms as $term ) {

						$cat = $term->name;
						$catlink = get_term_link( $term );

						$counter++;
					if ( $counter === 1 ) {
						$catlink2 = get_term_link( $term );
				$cat1 = $term->name;


				}
			}
			?>
            <div class="border-t border-gray-300">
                <a href="<?php echo $catlink2 ?>">
                    <h2><?php echo $cat1 ?> </h2>
                </a>
                <a href="<?php echo $catlink ?>">
                    <h3><?php echo $cat ?></h3>
                </a>
            </div>
            <?php

			$posts = get_posts(array(
							'post_type'			=> 'service',
							'posts_per_page'	=> -1,
							'post_status' 		=> 'publish',
							'orderby' 			=> 'date',
							'order'				=> 'ASC',
							'tax_query' => array(
								array(
									'taxonomy' => 'service_category',
									'terms' => $term->term_id,
								),
								),
						));

						if ($posts) {
							foreach ($posts as $post) {
								setup_postdata($post);
								?>
            <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>

            <?php
							}
							wp_reset_postdata();
						}
				?>




        </div>
    </div>

    <!-- .entry-content -->

    <footer class="entry-footer">
        <?php kmc_tw_entry_footer(); ?>
    </footer><!-- .entry-footer -->


</article><!-- #post-${ID} -->