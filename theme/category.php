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

        <header class="page-header">
            <?php the_archive_title( '<h1 class="page-title">', '24234134</h1>', 'false' ); ?>
            <?php
$term = $wp_query->get_queried_object();
$term_title = $term->label //works with CPTs (Books)
?? $term->name //works with custom taxonomy terms (gets Small in size/small)
?? "untitled";
?>
            <h1><?php echo $term_title; ?></h1>



        </header><!-- .page-header -->

        <?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', 'excerpt' );

				// End the loop.
			endwhile;

			// Previous/next page navigation.
			kmc_tw_the_posts_navigation();

		else :

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>
    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();