<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kmc_tw
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('prose prose-_tw'); ?>>

    <header class="entry-header container max-w-content mx-auto max-sm:px-4 relative">
        <div class="text-sm z-[1] text-gray-500">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?></div>

    </header><!-- .entry-header -->

    <div <?php kmc_tw_content_class( 'entry-content' ); ?>>
        <div class="flex flex-row max-sm:flex-col justify-between">
            <div class="flex basis-1/3 max-sm:mx-2 mx-8"><?php if ( has_post_thumbnail() ) { ?>
                <figure class="shadow-xl p-1">
                    <?php echo get_the_post_thumbnail(); ?>
                </figure>
                <?php } ?>
            </div>
            <div class="flex flex-col basis-2/3">
                <div>
                    <?php the_title( '<h2 class="entry-title text-3xl">', '</h2>' );	?>
                </div>
                <div class="text-xl my-2">
                    <?php
				if ( get_field('specialty')) {
					the_field('specialty');
				};
				?>
                </div>
                <div class="wp-block-buttons my-8">
                    <div class="wp-block-button"><a
                            class="wp-block-button__link has-text-align-center wp-element-button"
                            href="/zapysatysya-na-pryjom/">Записатися на прийом</a></div>
                </div>
                <div class="mt-4">
                    <?php
				if ( get_field('kategoriya')): ?>
                    <span class="font-bold">Категорія:&nbsp;</span>'
                    <?php the_field('kategoriya'); ?>
                    <?php
				endif;
				?>
                </div>
                <div class="mt-4">

                    <?php
				if ( get_field('dosvid')): ?>
                    <span class="font-bold">Досвід работи:&nbsp;</span>
                    <?php the_field('dosvid'); ?>
                    <?php
				endif;
				?>
                </div>
                <div class="mt-4">
                    <?php
				if ( get_field('osvita')): ?>
                    <span class="font-bold">Освіта:&nbsp;</span>
                    <?php the_field('osvita'); ?>
                    <?php
					endif;
                    ?>
                </div>
            </div>
        </div>
        <div>
            <?php
				if ( get_field('korotkyj_opyso_likarya')) {
					the_field('korotkyj_opyso_likarya');
				};
				?>
        </div>
        <div>
            <?php
				if ( get_field('kursy')): ?>
            <span class="font-bold">Курси:&nbsp;</span>
            <?php the_field('kursy'); ?>
            <?php
					endif;
				?>
        </div>
        <div>
            <?php
				if ( get_field('problemy')): ?>
            <span class="font-bold">Проблеми та захворювання, з якими фахівець допомагає впоратися:&nbsp;</span>
            <?php the_field('problemy'); ?>
            <?php
				endif;
				?>
        </div>
        <div>

            <?php if ( get_field('nagorody')): ?>
            <span class="font-bold">Нагороди:&nbsp;</span>
            <div class="acf-gallery">
                <?php
        // ACF - Gallery fields.
        $images = get_field( 'nagorody' );

        if ( $images ) :
            // Grab each image.
            foreach ( $images as $image ) :
                $image_id      = $image['ID'];
                $image_src     = $image['url'];
                $image_caption = $image['caption'];
                ?>
                <a href="<?php echo esc_url( $image_src ); ?>" title="<?php echo esc_html( $image_caption ); ?>"
                    class="thickbox">
                    <?php echo wp_get_attachment_image( $image_id, 'medium' ); ?>
                </a>
                <?php
            endforeach;
        endif;
        ?>
            </div>
            <!-- .acf-gallery -->
            <?php endif; ?>
        </div>
        <div>

            <?php
				if ( get_field('video')): ?>
            <span class="font-bold">Відео:&nbsp;</span>
            <?php the_field('video'); ?>
            <?php
				endif;
				?>
        </div>

    </div><!-- .entry-content -->

    <footer class=" entry-footer">
        <?php kmc_tw_entry_footer(); ?>
    </footer><!-- .entry-footer -->

</article><!-- #post-${ID} -->