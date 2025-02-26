<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kmc_tw
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('prose prose-_tw'); ?>>

    <header class="entry-header">
        <?php
		if ( is_sticky() && is_home() && ! is_paged() ) {
			printf( '%s', esc_html_x( 'Featured', 'post', 'kmc_tw' ) );
		}
		the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		?>
    </header><!-- .entry-header -->



    <div <?php kmc_tw_content_class( 'entry-content' ); ?>>
        <?php kmc_tw_post_thumbnail(); ?>
        <?php the_excerpt(); ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php kmc_tw_entry_footer(); ?>
    </footer><!-- .entry-footer -->