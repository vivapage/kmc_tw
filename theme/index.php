<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
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
            <?php
		if ( have_posts() ) {

			if ( is_home() && ! is_front_page() ) :
				?>
            <header class="entry-header">
                <h1 class="entry-title"><?php single_post_title(); ?></h1>
            </header><!-- .entry-header -->
            <?php
			endif;
			?>
            <div class="flex max-sm:flex-col flex-row justify-between flex-wrap gap-2">
                <?php

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/content' );
			}
			?>
            </div>
            <?php

			// Previous/next page navigation.
			kmc_tw_the_posts_navigation();

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>
        </div>
    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
