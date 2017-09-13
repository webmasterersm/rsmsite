<?php
/**
 * Template Name: Organizaciones
 *
 * @package WordPress
 * @subpackage RSM Megasite
 * @since RSM Megasite
 */

get_header() ?>

<div class="container-fluid">
    <div class="bg">
        <?php $banner = get_field('imagen_organizaciones', 'option'); ?>
            <img src="<?php echo $banner['url']; ?>">
        <div class="container">
            <div class="title">
                <h1>Asociaciones</h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container content">
        <div class="title-organizaciones col-xs-12 col-sm-4 col-md-6">
            <h1><?php the_field('titulo_organizaciones', 'option'); ?></h1>
        </div>
        <div class="descripcion col-xs-12 col-sm-8 col-md-6">
            <p><?php the_field('descripcion_organizaciones', 'option'); ?></p>
        </div>
    </div>
</div>


<?php get_footer() ?>