<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kmc_tw
 */

use WP_CLI\Iterators\Query;

get_header();
?>

<section id="primary">
    <main id="main">

        <header class="page-header">

            <?php post_type_archive_title('<h1 class="page-title">', '</h1>', 'false');?>



        </header><!-- .page-header -->
        <div class="page-content prose prose-_tw">
            <h2>Cтоматологія</h2>
            <div class="flex max-sm:flex-col flex-row flex-wrap ustify-between">


                <?php
		$posts = get_posts(array(
			'posts_per_page'    => -1,
			'post_type'         => 'specialist',
			'tax_query' => array(
				array(
					'taxonomy' => 'specialist-category',
					'field' => 'slug',
					'terms' => 'stomatologiya'
				),
			),
		));
		if( $posts ): ?>
                <?php foreach( $posts as $post ):
				setup_postdata( $post );
				?>
                <div class="flex basis-1/3 max-sm:basis-full shadow-lg">
                    <div class="flex flex-col m-4">
                        <a href="<?php the_permalink(); ?>">
                            <img class="w-full object-cover !my-0" src="<?php the_post_thumbnail_url(); ?>"
                                alt="<?php the_title(); ?>"></a>

                        <div class="text-center mt-2">
                            <a href="<?php the_permalink(); ?>">
                                <div class="font-bold"><?php the_title(); ?></div>
                            </a>
                            <div><?php the_field('specialty'); ?></div>
                            <div class="mt-4"><a href="<?php the_permalink(); ?>" class="font-bold">Детальніше</a></div>

                            <div class="wp-block-buttons mt-4 mb-6">
                                <!-- wp:button {"textAlign":"center"} -->
                                <div class="wp-block-button"><a
                                        class="wp-block-button__link has-text-align-center wp-element-button"
                                        href="/zapysatysya-na-pryjom/">Записатися на прийом</a></div>
                                <!-- /wp:button -->
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>
            <h2>Косметологія</h2>
            <div class="flex max-sm:flex-col flex-row flex-wrap ustify-between">


                <?php
		$posts = get_posts(array(
			'posts_per_page'    => -1,
			'post_type'         => 'specialist',
			'tax_query' => array(
				array(
					'taxonomy' => 'specialist-category',
					'field' => 'slug',
					'terms' => 'kosmetologiya'
				),
			),
		));
		if( $posts ): ?>
                <?php foreach( $posts as $post ):
				setup_postdata( $post );
				?>
                <div class="flex basis-1/3 max-sm:basis-full shadow-lg">
                    <div class="flex flex-col m-4">
                        <a href="<?php the_permalink(); ?>">
                            <img class="w-full object-cover !my-0" src="<?php the_post_thumbnail_url(); ?>"
                                alt="<?php the_title(); ?>"></a>

                        <div class="text-center mt-2">
                            <a href="<?php the_permalink(); ?>">
                                <div class="font-bold"><?php the_title(); ?></div>
                            </a>
                            <div><?php the_field('specialty'); ?></div>
                            <div class="mt-4"><a href="<?php the_permalink(); ?>" class="font-bold">Детальніше</a></div>

                            <div class="wp-block-buttons mt-4 mb-6">
                                <!-- wp:button {"textAlign":"center"} -->
                                <div class="wp-block-button"><a
                                        class="wp-block-button__link has-text-align-center wp-element-button"
                                        href="/zapysatysya-na-pryjom/">Записатися на прийом</a></div>
                                <!-- /wp:button -->
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>
            <h2>Масаж</h2>
            <div class="flex max-sm:flex-col flex-row flex-wrap ustify-between">


                <?php
		$posts = get_posts(array(
			'posts_per_page'    => -1,
			'post_type'         => 'specialist',
			'tax_query' => array(
				array(
					'taxonomy' => 'specialist-category',
					'field' => 'slug',
					'terms' => 'masazh'
				),
			),
		));
		if( $posts ): ?>
                <?php foreach( $posts as $post ):
				setup_postdata( $post );
				?>
                <div class="flex basis-1/3 max-sm:basis-full shadow-lg">
                    <div class="flex flex-col m-4">
                        <a href="<?php the_permalink(); ?>">
                            <img class="w-full object-cover !my-0" src="<?php the_post_thumbnail_url(); ?>"
                                alt="<?php the_title(); ?>"></a>

                        <div class="text-center mt-2">
                            <a href="<?php the_permalink(); ?>">
                                <div class="font-bold"><?php the_title(); ?></div>
                            </a>
                            <div><?php the_field('specialty'); ?></div>
                            <div class="mt-4"><a href="<?php the_permalink(); ?>" class="font-bold">Детальніше</a></div>

                            <div class="wp-block-buttons mt-4 mb-6">
                                <!-- wp:button {"textAlign":"center"} -->
                                <div class="wp-block-button"><a
                                        class="wp-block-button__link has-text-align-center wp-element-button"
                                        href="/zapysatysya-na-pryjom/">Записатися на прийом</a></div>
                                <!-- /wp:button -->
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>
            <h2>Психотерапія</h2>
            <div class="flex max-sm:flex-col flex-row flex-wrap ustify-between">


                <?php
		$posts = get_posts(array(
			'posts_per_page'    => -1,
			'post_type'         => 'specialist',
			'tax_query' => array(
				array(
					'taxonomy' => 'specialist-category',
					'field' => 'slug',
					'terms' => 'psyhoterapiya'
				),
			),
		));
		if( $posts ): ?>
                <?php foreach( $posts as $post ):
				setup_postdata( $post );
				?>
                <div class="flex basis-1/3 max-sm:basis-full shadow-lg">
                    <div class="flex flex-col m-4">
                        <a href="<?php the_permalink(); ?>">
                            <img class="w-full object-cover !my-0" src="<?php the_post_thumbnail_url(); ?>"
                                alt="<?php the_title(); ?>"></a>

                        <div class="text-center mt-2">
                            <a href="<?php the_permalink(); ?>">
                                <div class="font-bold"><?php the_title(); ?></div>
                            </a>
                            <div><?php the_field('specialty'); ?></div>
                            <div class="mt-4"><a href="<?php the_permalink(); ?>" class="font-bold">Детальніше</a></div>

                            <div class="wp-block-buttons mt-4 mb-6">
                                <!-- wp:button {"textAlign":"center"} -->
                                <div class="wp-block-button"><a
                                        class="wp-block-button__link has-text-align-center wp-element-button"
                                        href="/zapysatysya-na-pryjom/">Записатися на прийом</a></div>
                                <!-- /wp:button -->
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>
        </div>

    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
