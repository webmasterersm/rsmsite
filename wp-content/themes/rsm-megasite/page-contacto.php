<?php
/**
 * Template Name: Contacto
 *
 * @package WordPress
 * @subpackage RSM Megasite
 * @since RSM Megasite
 */

get_header();  ?>

<main class="main-contact">
    <div class="container">
        <div class="form">
            <?php echo do_shortcode( '[contact-form-7 id="787" title="Contact Form"]' ); ?>
        </div>
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="info-rsm">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer() ?>