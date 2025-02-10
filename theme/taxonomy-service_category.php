<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kmc_tw
 */

get_header();
?>

<section id="primary">
    <main id="main">

        <?php if ( have_posts() ) : ?>

        <header class="entry-header container max-w-content mx-auto max-sm:px-4 mb-4 relative">
            <?php
				$term = get_queried_object();
				$term_title = $term->name;
			?>
            <div class="absolute z-[1] mt-0">
                <h1 class="page-title text-gray-800 drop-shadow-[1px_1px_1px_rgba(255,255,255,1)]">
                    <?php echo $term_title; ?></h1>
            </div>
            <div class="absolute right-10 ml-0 max-sm:ml-0 max-sm:right-4 max-sm:top-20 max-sm:mt-4 max-sm:mr-4">
                <?php
				$image = get_field('image', $term);
				if ( $image ) {
					echo wp_get_attachment_image (( $image['id'] ),'full', "",  array("class" => "object-cover max-sm:mx-4 max-sm:h-50 h-120 max-w-full") );
			} else {
				?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="Placeholder"
                    class=" object-cover max-sm:mx-4 max-sm:h-50 h-120 max-w-full">
                <?php
			}
            ?>
            </div>
        </header><!-- .page-header -->
        <div class="prose prose-_tw container max-w-content mx-auto pt-130 pb-4"><?php echo term_description(); ?></div>
        <div class=" container max-w-content mx-auto">
            <div class="my-0 -mx-[30px] flex flex-wrap justify-center justify-items-center">
                <?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', 'services' );

				// End the loop.
			endwhile;
			?>
            </div>
        </div>
        <div class=" container max-w-content mx-auto mt-4 flex justify-center justify-items-center">
            <?php

			// Previous/next page navigation.
			kmc_tw_the_posts_navigation();
			?>
        </div>
        <?php

		else :

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>

    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();