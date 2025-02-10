<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kmc_tw
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mt-6'); ?>>



	<div <?php kmc_tw_content_class( 'entry-content' ); ?>>
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->


</article><!-- #post-${ID} -->
