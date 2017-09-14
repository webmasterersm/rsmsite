<?php get_header() ?>

    <section id="slides">
        <ul class="slides-container">
            <?php 
                $query = new WP_Query(
                    array(
                        'post_type'         => 'slides',
                        'posts_per_page'     => 4
                    )
                ); query_posts( $query );

                while ( $query->have_posts() ) : $query->the_post();  ?>
                    <li>
                        <?php the_post_thumbnail(); ?>
                        <?php if(empty( get_field('mostrar_informacion') ))  { ?> 
                            <?php $url = get_field('slide_url'); if(!empty( $url ))  { ?> 
                                <a href="<?php the_field('slide_url'); ?>">
                            <?php } ?>
                                    <div class="descripcion">
                                        <h1 class="slide-title"><?php the_title(); ?></h1>
                                        <p><?php the_content(); ?></p>
                                    </div>
                            <?php if(!empty( $url ))  { ?> 
                                </a>
                            <?php } ?>
                        <?php } ?>
                    </li>
                <?php endwhile; 
            wp_reset_query(); ?>
        </ul>
        <nav class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-chevron-right"></i></a>
            <a href="#" class="prev"><i class="fa fa-chevron-left"></i></a>
        </nav>
    </section>
    <section class="section-radios">
        <div class="container">
            <div class="radio-am">
                <div class="radio">
                    <?php $logo_rsm = get_field('logo_rsm2', 'option'); ?>
                    <img src="<?php echo $logo_rsm['url']; ?>">
                </div>
                <audio controls src="http://paginas.moisespaulino.com:8069/stream?type=.mp3;"></audio>
            </div>
            <div class="radio-fm">
                <div class="radio">
                    <?php $logo_estudio = get_field('logo_estudio', 'option'); ?>
                    <img src="<?php echo $logo_estudio['url']; ?>">
                </div>
                <audio controls src="http://paginas.moisespaulino.com:8067/stream?type=.mp3;"></audio>
            </div>
        </div>
    </section>
    <section class="noticias-front">
        <div class="container">
            <div class="title-section">
                <h1>
                    <a href="<?php bloginfo('url'); ?>/prensa"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Sala de Prensa</a>
                </h1>
            </div>
            <?php 
                $query = new WP_Query(
                    array(
                        'post_type'         => 'post',
                        'posts_per_page'     => 6
                    )
                ); query_posts( $query );

                while ( $query->have_posts() ) : $query->the_post();  ?>
                    <div class="front-post">
                        <div class="post-img">
                            <a href="<?php the_permalink(); ?>" class="post-link">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                        </div>
                        <div class="post-description">
                            <div class="post-title">
                                <a href="<?php the_permalink(); ?>" class="post-link">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; 
            wp_reset_query(); ?>
        </div>
    </section>
    <section class="eventos">
        <div class="container">
            <div class="section-title">
                <a href="<?php bloginfo('url') ?>/evento">
                    <h1>
                        <i class="fa fa-calendar-o"></i>
                        Eventos
                    </h1>
                </a>
            </div>
            <?php $today = date('Y-m-d');
            $args = array(
                'post_type'         => 'eventos', 
                'posts_per_page'    => 4,
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

<?php get_footer() ?>