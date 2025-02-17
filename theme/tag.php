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
        <div class="prose prose-_tw container max-w-content mx-auto">
            <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <?php
				$term = $wp_query->get_queried_object();
				$term_title = $term->label //works with CPTs (Books)
				?? $term->name //works with custom taxonomy terms (gets Small in size/small)
				?? "untitled";
			?>
                <h1 class="page-title"><?php echo $term_title; ?></h1>



            </header><!-- .page-header -->
            <div class="flex max-sm:flex-col flex-row justify-start flex-wrap gap-2">
                <?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content' );

				// End the loop.
			endwhile;
			?>
            </div>
            <?php

			// Previous/next page navigation.
			kmc_tw_the_posts_navigation();

		else :

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>
        </div>

    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
