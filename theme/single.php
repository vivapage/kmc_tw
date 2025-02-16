<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
				get_template_part( 'template-parts/content/content', 'single' );
				

				// End the loop.
			endwhile;
			?>

    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();