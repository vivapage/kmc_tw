<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kmc_tw
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('flex basis-[24%] border border-gray-200'); ?>>
    <div class="flex flex-col p-2 prose-figure:my-0 prose-img:my-0 relactive">
        <?php if ( has_post_thumbnail() ) : ?>
        <figure>
            <a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                <?php the_post_thumbnail('object-cover max-h-40 w-auto mx-auto'); ?>
            </a>
        </figure>
        <?php else : ?>
        <figure>
            <a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png"
                    alt="<?php the_title_attribute(); ?>" class="object-cover max-h-40 min-h-40" />
            </a>
        </figure>
        <?php endif; ?>

        <header class="entry-header">
            <?php the_title( sprintf( '<h3 class="text-sm"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );?>
        </header><!-- .entry-header -->

        <footer class="entry-footer">
            <?php //kmc_tw_entry_footer(); ?>
        </footer><!-- .entry-footer -->
    </div>

</article><!-- #post-${ID} -->