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
    <main id="main">

        <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open, or we have at least one comment, load
				// the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>
        <?php
// WP_Query arguments
$args = array(
	'post_type'              => array( 'specialist' ),
	'post_status'            => array( 'publish' ),
	'tax_query' => array(
		array(
			'taxonomy' => 'specialist-category',
			'field'    => 'slug',
			'terms'    => 'stomatologiya'
		)
	),
);

// The Query
$query = new WP_Query( $args );

if ( $query->have_posts() ) {
	echo '<ul>';
	while ( $query->have_posts() ) {
		$query->the_post();
		echo '<li>' . esc_html( get_the_title() ) . '</li>';
	}
	echo '</ul>';
}
else {
	// Постов не найдено
}

// Возвращаем оригинальные данные поста. Сбрасываем $post.
wp_reset_postdata();


?>

        <div class="container max-w-content mx-auto">

            <div class="mt-12 flex mx-auto items-center">
                <div x-data="carousel()" x-init="init()" class="relative overflow-hidden group">
                    <div x-ref="container"
                        class="md:-ml-4 md:flex md:overflow-x-scroll scroll-snap-x md:space-x-4 space-y-4 md:space-y-0 no-scrollbar">
                        <div
                            class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-67 max-sm:w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div><img src="/assets/images/andy-holmes-4iapyjvm714-unsplash-sm.jpg"></div>
                            <div class="px-2 py-3 flex justify-between">
                                <div class="text-lg font-semibold">Content Title</div>
                                <time>3/6/2021</time>
                            </div>
                        </div>
                        <div
                            class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-67 max-sm:w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div><img src="/assets/images/andy-holmes-4iapyjvm714-unsplash-sm.jpg"></div>
                            <div class="px-2 py-3 flex justify-between">
                                <div class="text-lg font-semibold">Content Title</div>
                                <time>3/6/2021</time>
                            </div>
                        </div>
                        <div
                            class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-67 max-sm:w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div><img src="/assets/images/andy-holmes-4iapyjvm714-unsplash-sm.jpg"></div>
                            <div class="px-2 py-3 flex justify-between">
                                <div class="text-lg font-semibold">Content Title</div>
                                <time>3/6/2021</time>
                            </div>
                        </div>
                        <div
                            class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-67 max-sm:w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div><img src="/assets/images/andy-holmes-4iapyjvm714-unsplash-sm.jpg"></div>
                            <div class="px-2 py-3 flex justify-between">
                                <div class="text-lg font-semibold">Content Title</div>
                                <time>3/6/2021</time>
                            </div>
                        </div>
                        <div
                            class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-67 max-sm:w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div><img src="/assets/images/andy-holmes-4iapyjvm714-unsplash-sm.jpg"></div>
                            <div class="px-2 py-3 flex justify-between">
                                <div class="text-lg font-semibold">Content Title</div>
                                <time>3/6/2021</time>
                            </div>
                        </div>
                        <div
                            class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-67 max-sm:w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div><img src="/assets/images/andy-holmes-4iapyjvm714-unsplash-sm.jpg"></div>
                            <div class="px-2 py-3 flex justify-between">
                                <div class="text-lg font-semibold">Content Title</div>
                                <time>3/6/2021</time>
                            </div>
                        </div>
                        <div
                            class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-67 max-sm:w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div><img src="/assets/images/andy-holmes-4iapyjvm714-unsplash-sm.jpg"></div>
                            <div class="px-2 py-3 flex justify-between">
                                <div class="text-lg font-semibold">Content Title</div>
                                <time>3/6/2021</time>
                            </div>
                        </div>
                        <div
                            class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-67 max-sm:w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div><img src="/assets/images/andy-holmes-4iapyjvm714-unsplash-sm.jpg"></div>
                            <div class="px-2 py-3 flex justify-between">
                                <div class="text-lg font-semibold">Content Title</div>
                                <time>3/6/2021</time>
                            </div>
                        </div>
                        <div
                            class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-67 max-sm:w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div><img src="/assets/images/andy-holmes-4iapyjvm714-unsplash-sm.jpg"></div>
                            <div class="px-2 py-3 flex justify-between">
                                <div class="text-lg font-semibold">Content Title</div>
                                <time>3/6/2021</time>
                            </div>
                        </div>
                        <div
                            class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-67 max-sm:w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div><img src="/assets/images/andy-holmes-4iapyjvm714-unsplash-sm.jpg"></div>
                            <div class="px-2 py-3 flex justify-between">
                                <div class="text-lg font-semibold">Content Title</div>
                                <time>3/6/2021</time>
                            </div>
                        </div>
                    </div>
                    <div @click="scrollTo(prev)" x-show="prev !== null"
                        class="hidden md:block absolute top-1/2 left-0 bg-white p-2 transition-transform ease-in-out transform -translate-x-full -translate-y-1/2 group-hover:translate-x-0 cursor-pointer">
                        <div>&lt;</div>
                    </div>
                    <div @click="scrollTo(next)" x-show="next !== null"
                        class="hidden md:block absolute top-1/2 right-0 bg-white p-2 transition-transform ease-in-out transform translate-x-full -translate-y-1/2 group-hover:translate-x-0 cursor-pointer">
                        <div>&gt;</div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
