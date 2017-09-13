    <footer class="footer" style="background:url(http://megasite.radiosantamaria.net/wp-content/uploads/2017/07/FONDO-CONTACTO.jpg)">
        <div class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1573.075924611319!2d-70.51475206297698!3d19.219265883039935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb02b7aa723e9f3%3A0x1e4f019cf16a5343!2sRadio+Santa+Mar%C3%ADa%2C+21%2C+Concepci%C3%B3n+de+La+Vega+41000%2C+Rep%C3%BAblica+Dominicana!5e0!3m2!1ses!2ses!4v1500929787090" width="100%" height="450" frameborder="0" style="border:0" style="pointer-events:none;"></iframe>
        </div>
        <div class="container">
            <div class="rsm-contact">
                <div class="logo-footer">
                    <img src="http://megasite.radiosantamaria.net/wp-content/uploads/2017/07/Logo-RSM-V-1-1.png" alt="<?php bloginfo('name'); ?>">
                </div>
                <div class="contacto">
                    <div class="info">
                        <?php the_field('direccion', 'option');?><br>
                        <?php the_field('email', 'option'); ?><br>
                        <?php the_field('telefono', 'option'); ?>
                    </div>
                </div>
            </div>
            <div class="social-media">
                <div class="social">
                    <a href="<?php the_field('facebook', 'option'); ?>">
                        <span class="fa fa-facebook"></span>
                    </a>
                </div>
                <div class="social">
                    <a href="<?php the_field('twitter', 'option'); ?>">
                        <span class="fa fa-twitter"></span>
                    </a>
                </div>
                <div class="social">
                    <a href="<?php the_field('instagram', 'option'); ?>">
                        <span class="fa fa-instagram"></span>
                    </a> 
                </div>
                <div class="social">
                    <a href="<?php the_field('youtube', 'option'); ?>">
                        <span class="fa fa-youtube"></span>
                    </a> 
                </div>
            </div>
        </div>
    </footer>
    <script src="https://use.fontawesome.com/f44b1278eb.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/viewportchecker.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.superslides.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts-rsm.js"></script>
    </body>
</html>