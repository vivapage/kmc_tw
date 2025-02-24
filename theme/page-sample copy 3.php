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
        <?php
$args = array(
  		'post_type' => 'prices',
		'posts_per_page' => -1,
		'orderby'   => 'menu_order',
        'order'     => 'DESC',
		'meta_query' => array(

        array (
            'key' => 'posluga',
            'compare' => 'LIKE',
            'value' => '"291"'
        ))
);

	$query = new WP_Query( $args );
  echo '<div class="wp-block-table is-style-stripes"><table><tbody>';
if ( $query->have_posts() ) :
  while ( $query->have_posts() ) : $query->the_post();

		echo '<tr><td>';
		echo the_title();
		echo '</td>';
		echo '<td>';
		echo get_field('cost');
		echo ' грн.</td></tr>';
  endwhile;
endif;
echo'</tbody></table></div>';
        wp_reset_query( $query );
        ?>
    </main><!-- #main -->
</section><!-- #primary -->

<?php


get_footer();
