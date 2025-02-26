<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kmc_tw
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('prose prose-_tw'); ?>>

    <header class="entry-header container max-w-content mx-auto max-sm:px-4">
        <div class="flex justify-between">
            <div><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></div>

            <div><?php if ( has_post_thumbnail() ) : ?>
                <figure>
                    <a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                        <?php the_post_thumbnail('object-cover max-h-80 w-auto'); ?>
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
            </div>
        </div>



    </header><!-- .entry-header -->



    <div <?php kmc_tw_content_class( 'entry-content' ); ?>>

        <div class="flex justify-between max-sm:flex-col flex-row flex-wrap">
            <div class="basis-3/4 max-sm:border-0 max-sm:pr-0 pr-4 border-r border-gray-200">
                <?php
		the_content();
		?>
                <footer class="entry-footer container max-w-content mx-auto max-sm:px-4 relative">
                    <?php kmc_tw_entry_footer(); ?>
                </footer><!-- .entry-footer -->
                <div class="prose prose-_tw container max-w-content mx-auto pt-4 mt-4 border-t border-gray-200">
                    <?php

				if ( is_singular( 'post' ) ) {
					// Previous/next post navigation.
					the_post_navigation(
						array(
							'next_text' => '<span aria-hidden="true">' . __( 'Next Post', 'kmc_tw' ) . '</span> ' .
								'<span class="sr-only">' . __( 'Next post:', 'kmc_tw' ) . '</span> <br/>' .
								'<span>%title</span>',
							'prev_text' => '<span aria-hidden="true">' . __( 'Previous Post', 'kmc_tw' ) . '</span> ' .
								'<span class="sr-only">' . __( 'Previous post:', 'kmc_tw' ) . '</span> <br/>' .
								'<span>%title</span>',
						)
					);
				}
				?></div>
            </div>
            <div class="basis-1/4 pl-4 max-sm:pl-0">
                <div class="side widget widget_block">
                    <h2 class="wp-block-heading">Акції</h2>
                </div>
                <?php

$posts = get_posts(array(
    'posts_per_page'    => -1,
    'post_type'         => 'promotion'
));

if( $posts ): ?>

                <ul>

                    <?php foreach( $posts as $post ):

        setup_postdata( $post );

        ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>

                    <?php endforeach; ?>

                </ul>

                <?php wp_reset_postdata(); ?>

                <?php endif; ?>
            </div>
        </div>

    </div>


    </div><!-- .entry-content -->




</article><!-- #post-${ID} -->
