<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kmc_tw
 */

?>

<div class="w-40 h-32 m-[15px] overflow-hidden relative">
    <?php
				if ( is_sticky() && is_home() && ! is_paged() ) {
					printf( '%s', esc_html_x( 'Featured', 'post', 'kmc_tw' ) );
				}
				the_title( sprintf( '<a class="before:block before:top-0 before:left-0 before:right-0 before:bottom-0 before:absolute before:bg-green-hover before:opacity-[.3] before:z-[1]" href="%s" rel="bookmark"><span class="absolute text-center w-full top-1/2 -translate-y-1/2 text-white font-semibold z-[2] px-2" >', esc_url( get_permalink() ) , the_post_thumbnail('medium', array('class' => 'h-32 object-cover'))),'</span></a>' );
				?>
</div>
