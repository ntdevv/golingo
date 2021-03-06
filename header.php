<!DOCTYPE html>
<html <?php language_attributes() ?>>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php wp_title(''); ?></title>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<?php include(partial("favicons.php")); ?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

		<?php wp_head(); ?>

		<?php // drop Google Analytics Here ?>

		<?php // end analytics ?>
	</head>

	<body <?php body_class(); ?>>

			<header class="header">
				<img class="header__logo"src="https://staging.golingo.co.uk/wp-content/uploads/2021/09/Golingo-logo.png" alt="Golingo Logo">
            		<div class="header__btns-container">
                		<nav class="header__btns">
					<?php wp_nav_menu(array(
				         'container' => true,                           // remove nav container
				         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
				         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
				         'menu_class' => 'header_btn',               // adding custom nav class
				         'theme_location' => 'main-nav',                 // where it's located in the theme
				         'before' => '',                                 // before the menu
			               'after' => '',                                  // after the menu
			               'link_before' => '',                            // before each link
			               'link_after' => '',                             // after each link
			               'depth' => 0,                                   // limit the depth of the nav
				         'fallback_cb' => ''                             // fallback function (if there is one)
					)); ?>
				</nav>
                		
                		
            		</div>
			</header>
					 <?php 
					// add_filter('nav_menu_css_class',function($classes, $item, $args){ $classes[] = 'sliding_menu-link';return $classes;},1,3);
					// wp_nav_menu(array(
				    //      'container' => false,                           // remove nav container
				    //      'container_class' => 'menu cf',                 // class of container (should you choose to use it)
				    //      'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
				    //      'menu_class' => 'sliding_menu-links',               // adding custom nav class
				    //      'theme_location' => 'main-nav',                 // where it's located in the theme
				    //      'before' => '',                                 // before the menu
			        //        'after' => '',                                  // after the menu
			        //        'link_before' => '',                            // before each link
			        //        'link_after' => '',                             // after each link
			        //        'depth' => 0,                                   // limit the depth of the nav
				    //      'fallback_cb' => '' ,                            // fallback function (if there is one)
				             
					// )); ?> 
        </div>
	</header>