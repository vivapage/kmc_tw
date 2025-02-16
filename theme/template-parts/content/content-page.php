<?php
/**
 * Template part for displaying pages
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

}
?>

        </div>
    </header><!-- .entry-header -->


    <div class="entry-content pt-135" <?php if ( !has_post_thumbnail() ) {
echo 'style="padding-top: 95px;"';
}?>>
        <?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div>' . __( 'Pages:', 'kmc_tw' ),
				'after'  => '</div>',
			)
		);
		?>
    </div><!-- .entry-content -->

    <?php if ( get_edit_post_link() ) : ?>
    <footer class="entry-footer">
        <?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers. */
						__( 'Edit <span class="sr-only">%s</span>', 'kmc_tw' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			?>
    </footer><!-- .entry-footer -->
    <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->