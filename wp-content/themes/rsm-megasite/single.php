<?php 
/*
*
*Template Name: Single
*
*/

get_header() ?>

<main class="main-single">
    <div class="adspost-top">
        <?php $publicidad = get_field('publicidad_top', 'option'); ?>
        <img src="<?php echo $publicidad['url']; ?>" alt="">
    </div>
    <div class="container">
        <div class="section-single">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="post-single">
                    <h4><?php the_title(); ?></h4>
                    <div class="single-image">
                        <?php if($video = get_field('video_post')) { 
                        
                            echo $video; ?> 
                            
                        <?php } else { ?> 
                            <?php the_post_thumbnail(); ?>
                        <?php } ?>
                    </div>
                    <div class="single-content">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
        <div class="barpost-right">
            <div class="adspost-righttop">
                <?php $publicidad = get_field('publicidad_right_top', 'option'); ?>
                <img src="<?php echo $publicidad['url']; ?>" alt="">
            </div>
            <h2>MAS NOTICIAS</h2>
            <div class="posts-bar">
                <?php 
                    $year = get_field('ano_historia');
                    $the_query = new WP_Query( array(
                        'post_type'         => 'post', 
                        'offset'            => 2,
                        'posts_per_page'    => 2
                    ));    

                    if ( $the_query->have_posts() ) : ?>

                    <?php while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
                        <div class="post-bar">
                            <div class="post-barimg">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            </div>
                            <div class="post-bartitle">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class="adspost-rightbottom">
                <?php $publicidad = get_field('publicidad_right_bottom', 'option'); ?>
                <img src="<?php echo $publicidad['url']; ?>" alt="">
            </div>
        </div>
    </div>
</main>

<?php get_footer() ?>
