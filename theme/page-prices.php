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
        <header class="entry-header container max-w-content mx-auto max-sm:px-4 relative">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header>
        <div class="page-content">

            <div class="tab-wrapper" x-data="{ activeTab:  0 }">
                <div class="flex justify-between border-b border-gray-200 pb-2 mb-2">
                    <label @click="activeTab = 0" class="tab-control"
                        :class="{ 'active': activeTab === 0 }">Стоматологія</label>
                    <label @click="activeTab = 1" class="tab-control"
                        :class="{ 'active': activeTab === 1 }">Косметологія</label>
                    <label @click="activeTab = 2" class="tab-control" :class="{ 'active': activeTab === 2 }">Масаж та
                        реабілітація</label>
                    <label @click="activeTab = 3" class="tab-control"
                        :class="{ 'active': activeTab === 3 }">Психотерапія</label>
                </div>

                <div class="tab-panel" :class="{ 'active': activeTab === 0 }"
                    x-show.transition.in.opacity.duration.600="activeTab === 0">
                    <?php get_template_part( 'template-parts/content/prices', 'dentistry' );?>
                </div>
                <div class="tab-panel" :class="{ 'active': activeTab === 1 }"
                    x-show.transition.in.opacity.duration.600="activeTab === 1">
                    <?php get_template_part( 'template-parts/content/prices', 'cosmetology' ); ?>
                </div>
                <div class="tab-panel" :class="{ 'active': activeTab === 2 }"
                    x-show.transition.in.opacity.duration.600="activeTab === 2">
                    <?php get_template_part( 'template-parts/content/prices', 'massage' ); ?>
                </div>
                <div class="tab-panel" :class="{ 'active': activeTab === 3 }"
                    x-show.transition.in.opacity.duration.600="activeTab === 3">
                    <?php get_template_part( 'template-parts/content/prices', 'psychotherapy' ); ?>
                </div>
            </div>

    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
