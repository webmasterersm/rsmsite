<?php
/**
 * Template Name: Historia RSM
 *
 * @package WordPress
 * @subpackage RSM Megasite
 * @since RSM Megasite
 */

get_header();  ?>

    <main class="main-historia">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); ?>
            <div class="page-name" style="background:url(<?php echo $thumb_url[0]; ?>)">
                <div class="title-page">
                    <h1 class="animated fadeInLeft"><?php the_title(); ?></h1>
                </div>
            </div>
        <?php endwhile; ?>
        <section class="timeline">
            <ul>
                <?php 
                    $year = get_field('ano_historia');
                    $the_query = new WP_Query( array(
                        'post_type'         => 'historia', 
                        'order'       => 'ASC',
                        'orderby'     => $year,
                        'posts_per_page'    => -1
                    ));    

                    if ( $the_query->have_posts() ) : ?>

                    <?php while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
                        <li>
                            <div>
                                <time><?php the_field('ano_historia'); ?></time> <?php the_content(); ?>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </ul>
        </section>
    </main>

<?php get_footer() ?>