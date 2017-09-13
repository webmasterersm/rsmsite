<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
        <style>
			html {
				margin-top: 0px !important;
			}
		</style>
		<script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-69728267-3', 'auto');
            ga('send', 'pageview');
        </script>
	</head>
	<body>
		<header class="header-desktop">
            <div class="bar-top">
                <div class="container">
                    <nav class="menu-top">
                        <?php wp_nav_menu( array('theme_location' => 'general_menu', 'container' => false, 'menu_id' => 'front-menu', 'menu_class' => 'front-menu menutop',)); ?>
                    </nav>
                    <div class="social-header">
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
            </div>
            <div class="bar-bottom">
                <div class="container">
                    <div class="logo">
                        <a href="<?php bloginfo('url'); ?>">
                            <?php $logo = get_field('logo_rsm', 'option'); ?>
                            <img src="<?php echo $logo['url']; ?>">
                        </a>
                    </div>
                    <div class="bar-right">
                        <nav class="menu-bottom">
                            <?php wp_nav_menu( array('theme_location' => 'main_menu', 'container' => false, 'menu_id' => 'primary-menu', 'menu_class' => 'primary-menu',)); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div class="mobile-app">
            <div class="container">
                <div class="desctiption-app">
                    <h4>Radio Santa María</h4>
                    <p>Google Play</p>
                    <p class="v2">Proximamente Versión 2 en IOS y Android</p>
                </div>
                <a href="https://play.google.com/store/apps/details?id=com.rsm.rsmapp&hl=es" class="btn-app">Descargar</a>
            </div>
        </div>
        <header class="header-mobile">
            <div class="container">
                <div class="logo">
                    <a href="<?php bloginfo('url'); ?>">
                        <?php $logo = get_field('logo_rsm', 'option'); ?>
                        <img src="<?php echo $logo['url']; ?>">
                    </a>
                </div>
                <div class="left-bar">
                    <div class="location-icon">
                        <span class="fa fa-map-marker"></span>
                    </div>
                    <div class="icon-menu">
                        <span class="fa fa-bars"></span>
                    </div>
                </div>
            </div>
            <nav class="mobile-menu">
                <div class="container">
                    <?php wp_nav_menu( array('theme_location' => 'mobile_menu', 'container' => false, 'menu_id' => 'primary-menu', 'menu_class' => 'primary-menu',)); ?>
                </div>
            </nav>
        </header>
        
            
			