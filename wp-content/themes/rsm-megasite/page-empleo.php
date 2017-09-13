<?php
/**
 * Template Name: Empleo
 *
 * @package WordPress
 * @subpackage RSM Megasite
 * @since RSM Megasite
 */

get_header();  ?>

<main class="main-empleo">
    <?php $thumb_id = get_post_thumbnail_id();
        $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); ?>
    <div class="page-name" style="background:url(<?php echo $thumb_url[0]; ?>)">
        <div class="title-page">
            <h1 class="animated fadeInLeft"><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="container">
        <div class="empleo-title">
            <h1>Formulario de solicitud de empleo</h1>
        </div>
        <div class="form">
            <?php echo do_shortcode( '[contact-form-7 id="358" title="Enviar curriculum"]' ); ?>
        </div>
    </div>
</main>

<?php get_footer() ?>