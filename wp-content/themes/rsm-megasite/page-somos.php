<?php
/**
 * Template Name: Quienes Somos
 *
 * @package WordPress
 * @subpackage RSM Megasite
 * @since RSM Megasite
 */

get_header();  ?>

<main class="main-about">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); ?>
        <div class="page-name" style="background:url(<?php echo $thumb_url[0]; ?>)">
            <div class="title-page">
                <h1 class="animated fadeInLeft"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="mision">
            <div class="container">
                <div class="mision-description">
                    <h1 class="title"><?php the_field('titulo_seccion2'); ?></h1>
                    <div class="mision-text">
                        <?php the_field('texto_seccion2'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="vision">
            <div class="container">
                <div class="vision-description">
                    <h1 class="title"><?php the_field('titulo_seccion3'); ?></h1>
                    <div class="vision-text">
                        <?php the_field('texto_seccion3'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="about" style="background:url(http://megasite.radiosantamaria.net/wp-content/uploads/2017/02/WP_20150715_007-copia.jpg)">
            <div class="container">
                <div class="about-description animated fadeInRight">
                    <h1 class="title"><?php the_field('titulo_seccion1'); ?></h1>
                    <div class="about-text">
                        <?php the_field('texto_seccion1'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="valores">
            <div class="container">
                <div class="valores-description">
                    <h1 class="title"><?php the_field('titulo_seccion4'); ?></h1>
                    <div class="valores-text">
                        <?php the_field('texto_seccion4'); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</main>

<?php get_footer() ?>