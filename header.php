<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name'); ?></title>
        <script src="<?php bloginfo('url'); ?>/audiojs/audio.min.js"></script>
        <?php wp_head(); ?>
        <style>
			html {
				margin-top: 0px !important;
			}
		</style>
        <script>
            audiojs.events.ready(function() {
                var as = audiojs.createAll();
            });
        </script>
	</head>
	<body>
		<header class="header-top navbar-fixed">
			<nav class="menu-top verde-rsm">
				<div class="row nav-wrapper">
					<div class="logo z-depth-1 col s1.5">
						<a href="<?php bloginfo('url'); ?>" class="brand-logo left">
                            <?php $logo = get_field('logo_rsm', 'option'); ?>
                            <img src="<?php echo $logo['url']; ?>">
                        </a>
					</div>
                    <ul id="slide-out" class="side-nav">
                        <?php wp_nav_menu( array('theme_location' => 'general_menu', 'container' => false, 'menu_id' => 'primary-menu', 'menu_class' => 'primary-menu',)); ?>
                    </ul>
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
					<div class="col s12 m4 menu-top-content left">
						<?php wp_nav_menu( array('theme_location' => 'primary_menu', 'container' => false, 'menu_id' => 'primary-menu', 'menu_class' => 'primary-menu',)); ?>
					</div>
                    <div class="menu-top-right right">
						<?php 
                            if (has_nav_menu( 'primary_menu' )) {  
                                
                                wp_nav_menu( 
                                    $arg = array(
                                        'theme_location' => 'institucional_menu',
                                        'container' => false    ,
                                        'menu_id' => 'institucional-menu',
                                        'menu_class' => 'institucional-menu'
                                    )
                                ); 
                            } 
                        ?>
					</div>
                    <div class="search-btn right">
                        <a class="waves-effect waves-light modal-trigger" href="#modal1"><i class="fa fa-search fa-2x"></i></a>
                        <div id="modal1" class="modal">
                            <div class="modal-content">
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                    </div>
				</div>
			</nav>
        </header>
        <header class="header-bottom navbar-fixed">
            <nav class="menu-bottom">
                <div class="row">
                    <div class="col s12 m6 menu offset-m1 left">
                        <?php wp_nav_menu( array('theme_location' => 'front_menu', 'container' => false, 'menu_id' => 'front-menu', 'menu_class' => 'front-menu menutop',)); ?>
                    </div>
                    <div class="escuchanos right">
                        <ul>
                            <li class="bg-title">Escuchanos</li>
                            <li>
                                <a href="<?php bloginfo('url'); ?>/rsm-en-vivo" class="waves-effect waves-light">
                                    <?php $logo = get_field('isotipo_rsm', 'option'); ?>
                                    <img src="<?php echo $logo['url']; ?>">
                                </a> 
                            </li>
                            <li>
                                <a href="<?php bloginfo('url'); ?>/estudio979-fmenvivo" class="waves-effect waves-light">
                                    <?php $logo = get_field('isotipo_estudio', 'option'); ?>
                                    <img src="<?php echo $logo['url']; ?>">
                                </a> 
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
			