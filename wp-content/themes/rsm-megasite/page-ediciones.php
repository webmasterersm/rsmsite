<?php
/**
 * Template Name: Ediciones
 *
 * @package WordPress
 * @subpackage RSM Megasite
 * @since RSM Megasite
 */

get_header();  ?>

<main class="main-ediciones">
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
    <section class="ediciones">
        <section class="cuentos">
            <div class="container">
                <div class="portada-img">
                    <img src="http://radiosantamaria.net/wp-content/uploads/2017/08/22-Book-MockUp.png" alt="">
                </div>
                <div class="cuento-description">
                    <div class="cuento-title">
                        <h1>
                            Concurso de Cuentos
                        </h1>
                    </div>
                    <div class="cuento-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est atque, molestiae adipisci pariatur amet corrupti repellendus obcaecati deleniti quidem suscipit non repudiandae dolorum illo tempora animi ratione possimus ducimus maxime, architecto incidunt. Cum eum illum, earum consequuntur. Itaque quisquam est pariatur minima necessitatibus incidunt doloremque numquam, non dolorum harum maiores et at rem architecto consectetur laboriosam aut quis magnam eum quam, quod, iusto dolor. Vero nostrum dolores recusandae delectus quibusdam explicabo blanditiis fugit saepe excepturi facere, quos autem minus nihil quaerat numquam neque beatae enim velit quo consequatur at culpa odit accusamus sequi. </p>
                        
                        <p>Illo nemo id ab architecto tempore perspiciatis! Repellat placeat asperiores eum qui, cum soluta accusantium architecto est, veniam, natus, illo hic possimus dolores magni error molestiae deleniti amet modi. Delectus ipsa quisquam nostrum ipsam quae laboriosam, saepe, eos eveniet nam similique iure aperiam possimus, fugit. Unde architecto, enim vel sequi quis, in nobis distinctio ducimus aliquid odio? In itaque doloribus quibusdam dolores quos temporibus eaque laborum, omnis quidem voluptatem beatae reiciendis cupiditate consequatur ipsam, error illo nihil unde sed quo, amet ut placeat. Provident temporibus voluptate voluptatem accusantium amet optio consequatur iure reiciendis, suscipit totam necessitatibus quis, qui officia, nesciunt ipsa, sunt id placeat iste explicabo ea.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="agenda">
            <div class="container">
                <div class="cuento-description">
                    <div class="cuento-title">
                        <h1>
                            Agenda Escolar Convivir
                        </h1>
                    </div>
                    <div class="cuento-text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est atque, molestiae adipisci pariatur amet corrupti repellendus obcaecati deleniti quidem suscipit non repudiandae dolorum illo tempora animi ratione possimus ducimus maxime, architecto incidunt. Cum eum illum, earum consequuntur. Itaque quisquam est pariatur minima necessitatibus incidunt doloremque numquam, non dolorum harum maiores et at rem architecto consectetur laboriosam aut quis magnam eum quam, quod, iusto dolor. Vero nostrum dolores recusandae delectus quibusdam explicabo blanditiis fugit saepe excepturi facere, quos autem minus nihil quaerat numquam neque beatae enim velit quo consequatur at culpa odit accusamus sequi.
                        </p>
                        
                        <p>
                            Illo nemo id ab architecto tempore perspiciatis! Repellat placeat asperiores eum qui, cum soluta accusantium architecto est, veniam, natus, illo hic possimus dolores magni error molestiae deleniti amet modi. Delectus ipsa quisquam nostrum ipsam quae laboriosam, saepe, eos eveniet nam similique iure aperiam possimus, fugit. Unde architecto, enim vel sequi quis, in nobis distinctio ducimus aliquid odio? In itaque doloribus quibusdam dolores quos temporibus eaque laborum, omnis quidem voluptatem beatae reiciendis cupiditate consequatur ipsam, error illo nihil unde sed quo, amet ut placeat. Provident temporibus voluptate voluptatem accusantium amet optio consequatur iure reiciendis, suscipit totam necessitatibus quis, qui officia, nesciunt ipsa, sunt id placeat iste explicabo ea.
                        </p>
                    </div>
                </div>
                <div class="portada-img">
                    <img src="http://radiosantamaria.net/wp-content/uploads/2017/08/portada-22-663x1024.jpg" alt="">
                </div>
            </div>
        </section>
        <section class="comics">
            <div class="container">
                <div class="section-title">
                    <h1>Historietas Educativas</h1>
                </div>
                <div class="comic-list">
                    <div class="comic">
                        <div class="imgBox">
                            <img src="http://radiosantamaria.net/wp-content/uploads/2017/08/portada-22-663x1024.jpg" alt="">
                        </div>
                        <div class="details">
                            <h3>Titulo 1</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum reprehenderit nemo repellat excepturi in doloremque, repellendus illo error voluptatum explicabo animi officia dolor nam dolores saepe, quisquam voluptate accusantium. Saepe?</p>
                        </div>
                    </div>
                    <div class="comic">
                        <div class="imgBox">
                            <img src="http://radiosantamaria.net/wp-content/uploads/2017/08/portada-22-663x1024.jpg" alt="">
                        </div>
                        <div class="details">
                            <h3>Titulo 2</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum reprehenderit nemo repellat excepturi in doloremque, repellendus illo error voluptatum explicabo animi officia dolor nam dolores saepe, quisquam voluptate accusantium. Saepe?</p>
                        </div>
                    </div>
                    <div class="comic">
                        <div class="imgBox">
                            <img src="http://radiosantamaria.net/wp-content/uploads/2017/08/portada-22-663x1024.jpg" alt="">
                        </div>
                        <div class="details">
                            <h3>Titulo 3</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum reprehenderit nemo repellat excepturi in doloremque, repellendus illo error voluptatum explicabo animi officia dolor nam dolores saepe, quisquam voluptate accusantium. Saepe?</p>
                        </div>
                    </div>
                    <div class="comic">
                        <div class="imgBox">
                            <img src="http://radiosantamaria.net/wp-content/uploads/2017/08/portada-22-663x1024.jpg" alt="">
                        </div>
                        <div class="details">
                            <h3>Titulo 4</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum reprehenderit nemo repellat excepturi in doloremque, repellendus illo error voluptatum explicabo animi officia dolor nam dolores saepe, quisquam voluptate accusantium. Saepe?</p>
                        </div>
                    </div>
                    <div class="comic">
                        <div class="imgBox">
                            <img src="http://radiosantamaria.net/wp-content/uploads/2017/08/portada-22-663x1024.jpg" alt="">
                        </div>
                        <div class="details">
                            <h3>Titulo 5</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum reprehenderit nemo repellat excepturi in doloremque, repellendus illo error voluptatum explicabo animi officia dolor nam dolores saepe, quisquam voluptate accusantium. Saepe?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
           <section class="almanaque">
            <div class="container">
                <div class="cuento-description">
                    <div class="cuento-title">
                        <h1>
                            Almanaque Escuela
                        </h1>
                    </div>
                    <div class="cuento-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est atque, molestiae adipisci pariatur amet corrupti repellendus obcaecati deleniti quidem suscipit non repudiandae dolorum illo tempora animi ratione possimus ducimus maxime, architecto incidunt. Cum eum illum, earum consequuntur. Itaque quisquam est pariatur minima necessitatibus incidunt doloremque numquam, non dolorum harum maiores et at rem architecto consectetur laboriosam aut quis magnam eum quam, quod, iusto dolor. Vero nostrum dolores recusandae delectus quibusdam explicabo blanditiis fugit saepe excepturi facere, quos autem minus nihil quaerat numquam neque beatae enim velit quo consequatur at culpa odit accusamus sequi. </p>
                        <p>Illo nemo id ab architecto tempore perspiciatis! Repellat placeat asperiores eum qui, cum soluta accusantium architecto est, veniam, natus, illo hic possimus dolores magni error molestiae deleniti amet modi. Delectus ipsa quisquam nostrum ipsam quae laboriosam, saepe, eos eveniet nam similique iure aperiam possimus, fugit. Unde architecto, enim vel sequi quis, in nobis distinctio ducimus aliquid odio? In itaque doloribus quibusdam dolores quos temporibus eaque laborum, omnis quidem voluptatem beatae reiciendis cupiditate consequatur ipsam, error illo nihil unde sed quo, amet ut placeat. Provident temporibus voluptate voluptatem accusantium amet optio consequatur iure reiciendis, suscipit totam necessitatibus quis, qui officia, nesciunt ipsa, sunt id placeat iste explicabo ea.</p>
                    </div>
                </div>
                <div class="portada-img">
                    <img src="http://radiosantamaria.net/wp-content/uploads/2017/08/almanaque.png" alt="">
                </div>
            </div>
        </section>
    </section>
</main>


<?php get_footer(); ?>