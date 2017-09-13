<?php
/**
 * Template Name: Directores
 *
 * @package WordPress
 * @subpackage RSM Megasite
 * @since RSM Megasite
 */

get_header();  ?>

<main class="main-directores">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); ?>
        <div class="page-name" style="background:url(<?php echo $thumb_url[0]; ?>)">
            <div class="title-page">
                <h1 class="animated fadeInLeft"><?php the_title(); ?></h1>
            </div>
        </div>
    <?php endwhile; ?>
    <section class="directores">
        <div class="container">
            <?php 
                $the_query = new WP_Query( array(
                    'post_type'         => 'directores', 
                    'posts_per_page'    => -1,
                    'order'             => 'ASC'
                ));

                if ( $the_query->have_posts() ) : $count = 0; ?>

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>
                    
                    <div class="director">
                        <input type="checkbox" name="activeModal<?php echo $count; ?>" id="activeModal<?php echo $count; ?>">
                        <label for="activeModal<?php echo $count; ?>" id="openModal">
                            <div class="director-img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="director-biografia">
                                <div class="director-name">
                                    <?php the_title(); ?>
                                </div>
                            </div>
                        </label>
                        <div class="director-text modalDialog modalDialog<?php echo $count; ?>">
                            <section class="modal">
                                <label for="activeModal<?php echo $count; ?>" id="closeModal"> X </label>
                                <div class="modal-img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="modal-name">
                                    <?php the_title(); ?>
                                </div>
                                <p><?php the_content(); ?></p>
                            </section>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>