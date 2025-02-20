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
                                <div x-data="{ 'showModal': false }" @keydown.escape="showModal = false">
                                    <!-- Trigger for Modal -->
                                    <button type="button" @click="showModal = true"
                                        class="wp-block-button wp-block-button__link has-text-align-center wp-element-button">Записатися
                                        на
                                        прийом</button>

                                    <!-- Modal -->
                                    <div class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black/20 backdrop-blur-md"
                                        x-show="showModal">
                                        <!-- Modal inner -->
                                        <div class="md:min-w-130 max-sm:w-80 px-6 py-4 mx-auto text-left bg-white rounded shadow-lg"
                                            @click.away="showModal = false"
                                            x-transition:enter="motion-safe:ease-out duration-300"
                                            x-transition:enter-start="opacity-0 scale-90"
                                            x-transition:enter-end="opacity-100 scale-100">
                                            <!-- Title / Close-->
                                            <div class="flex items-center justify-between">
                                                <button type="button" class="z-50 cursor-pointer"
                                                    @click="showModal = false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <!-- content -->
                                            <div>
                                                <?php echo do_shortcode( '[wpforms id="3546" title="true"]' );?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                <div x-data="{ 'showModal': false }" @keydown.escape="showModal = false">
                                    <!-- Trigger for Modal -->
                                    <button type="button" @click="showModal = true"
                                        class="wp-block-button wp-block-button__link has-text-align-center wp-element-button">Записатися
                                        на
                                        прийом</button>

                                    <!-- Modal -->
                                    <div class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black/20 backdrop-blur-md"
                                        x-show="showModal">
                                        <!-- Modal inner -->
                                        <div class="md:min-w-130 max-sm:w-80 px-6 py-4 mx-auto text-left bg-white rounded shadow-lg"
                                            @click.away="showModal = false"
                                            x-transition:enter="motion-safe:ease-out duration-300"
                                            x-transition:enter-start="opacity-0 scale-90"
                                            x-transition:enter-end="opacity-100 scale-100">
                                            <!-- Title / Close-->
                                            <div class="flex items-center justify-between">
                                                <button type="button" class="z-50 cursor-pointer"
                                                    @click="showModal = false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <!-- content -->
                                            <div>
                                                <?php echo do_shortcode( '[wpforms id="3546" title="true"]' );?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                <div x-data="{ 'showModal': false }" @keydown.escape="showModal = false">
                                    <!-- Trigger for Modal -->
                                    <button type="button" @click="showModal = true"
                                        class="wp-block-button wp-block-button__link has-text-align-center wp-element-button">Записатися
                                        на
                                        прийом</button>

                                    <!-- Modal -->
                                    <div class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black/20 backdrop-blur-md"
                                        x-show="showModal">
                                        <!-- Modal inner -->
                                        <div class="md:min-w-130 max-sm:w-80 px-6 py-4 mx-auto text-left bg-white rounded shadow-lg"
                                            @click.away="showModal = false"
                                            x-transition:enter="motion-safe:ease-out duration-300"
                                            x-transition:enter-start="opacity-0 scale-90"
                                            x-transition:enter-end="opacity-100 scale-100">
                                            <!-- Title / Close-->
                                            <div class="flex items-center justify-between">
                                                <button type="button" class="z-50 cursor-pointer"
                                                    @click="showModal = false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <!-- content -->
                                            <div>
                                                <?php echo do_shortcode( '[wpforms id="3546" title="true"]' );?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                <div x-data="{ 'showModal': false }" @keydown.escape="showModal = false">
                                    <!-- Trigger for Modal -->
                                    <button type="button" @click="showModal = true"
                                        class="wp-block-button wp-block-button__link has-text-align-center wp-element-button">Записатися
                                        на
                                        прийом</button>

                                    <!-- Modal -->
                                    <div class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black/20 backdrop-blur-md"
                                        x-show="showModal">
                                        <!-- Modal inner -->
                                        <div class="md:min-w-130 max-sm:w-80 px-6 py-4 mx-auto text-left bg-white rounded shadow-lg"
                                            @click.away="showModal = false"
                                            x-transition:enter="motion-safe:ease-out duration-300"
                                            x-transition:enter-start="opacity-0 scale-90"
                                            x-transition:enter-end="opacity-100 scale-100">
                                            <!-- Title / Close-->
                                            <div class="flex items-center justify-between">
                                                <button type="button" class="z-50 cursor-pointer"
                                                    @click="showModal = false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <!-- content -->
                                            <div>
                                                <?php echo do_shortcode( '[wpforms id="3546" title="true"]' );?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                </div>
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