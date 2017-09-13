<?php
/**
 * Template Name: Cobertura
 *
 * @package WordPress
 * @subpackage RSM Megasite
 * @since RSM Megasite
 */

get_header();  ?>

<main class="main-cobertura">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); ?>
        <div class="page-name" style="background:url(<?php echo $thumb_url[0]; ?>)">
            <div class="title-page">
                <h1 class="title animated fadeInLeft"><?php the_title(); ?></h1>
                <h3 class="subtitle">Cobertura Especial</h3>
            </div>
        </div>
    <?php endwhile; ?>
    <section class="cobertura-section">
        <div class="cobertura">
            <div class="container">
                <?php $show = get_field('mostrar_cobertura', 'option'); if($show == true ) { ?>
                    <div class="cobertura-iframe">
                        <?php the_field('elemento_mostrar', 'option'); ?>
                    </div>
                <?php } ?>
                <div class="posts">
                    <?php $query = new WP_Query(array('post_type' => 'post', 'category_name' => 'huracan')); query_posts( $query );

                        while ( $query->have_posts() ) : $query->the_post();  ?>
                            <div class="post">
                                <div class="post-img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="post-description">
                                    <div class="post-title">
                                        <a href="<?php the_permalink(); ?>" class="post-link">
                                            <?php the_title(); ?>
                                        </a>
                                    </div>
                                    <div class="post-text">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="more">
                                        <a href="<?php the_permalink(); ?>">Leer más</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;

                    wp_reset_query(); ?>
                </div>
            </div>
        </div>
        <div class="container">
            
        </div>
    </section>
</main>

<?php get_footer() ?>