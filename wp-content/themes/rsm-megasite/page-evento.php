<?php
/**
 * Template Name: Eventos
 *
 * @package WordPress
 * @subpackage RSM Megasite
 * @since RSM Megasite
 */

get_header();  ?>

<main class="main-eventos">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); ?>
        <div class="page-name" style="background:url(<?php echo $thumb_url[0]; ?>)">
            <div class="title-page">
                <h1 class="animated fadeInLeft"><?php the_title(); ?></h1>
            </div>
        </div>
    <?php endwhile; ?>
    <section class="eventos">
        <div class="container">
            <?php $today = date('Y-m-d');
            $args = array(
                'post_type'         => 'eventos', 
                'posts_per_page'    => -1,
                'order'       => 'ASC',
                'orderby'     => 'meta_value',
                'meta_query'  => array(
                    'relation'    => 'AND',
                    array(
                        'key'     => 'event_date',
                        'value'   => $today,
                        'compare' => '>=',
                        'type'    => 'DATE'
                    ),
                ),
            );
            
            $wp_query = new WP_Query( $args );

            if ( $wp_query->have_posts() ) : 
                while( $wp_query->have_posts() ) : $wp_query->the_post(); 
                    $event = get_field('event_date'); 
                    $today = date('Y-m-d'); ?>
                    <div class="evento">
                        <div class="date_place">
                            <?php 
                                $date = get_field('event_date'); 
                                $date = new DateTime($date);
                            ?>
                            <div class="fecha"><?php echo $date->format('d/M'); ?></div>
                            <div class="event_time">
                                <?php the_field('hour_entry'); ?> - <?php the_field('departured_hour'); ?>
                            </div>
                        </div>
                        <div class="date_time">
                            <div class="event_place">
                                <?php the_title(); ?>
                            </div>
                            <div class="event_description">
                                <?php the_field('event_location'); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata();
            else: ?>
               <p>No eventos...</p>
        <?php endif; ?> 
        </div> 
    </section>
</main>

<?php get_footer() ?>