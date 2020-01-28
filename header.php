<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nahi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
</div>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			 <?php
			the_custom_logo();
			?>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nahi' ); ?></a>
	<nav id="site-navigation"  class="navbar navbar-expand-md  ">
    <a class="navbar-brand" href="#">
        <?php bloginfo('name'); ?>
    </a>
    <button class="navbar-toggler navbar-toggler-icon navbar-toggler-right bg-light" type = "button" data-toggle="collapse" data-target="#bs4navbar" aria-controls = "bs4navbar" aria-expanded="false" aria-label="Toggle navigation"><?php esc_html_e( '', 'nahi' ); ?></button>
        <?php
            wp_nav_menu([
            'menu'            => 'primary-menu',
            'theme_location'  => 'menu-1',
            'container'       => 'div',
            'container_id'    => 'bs4navbar',
            'container_class' => 'collapse navbar-collapse',
            'menu_id'         => false,
            'menu_class'      => 'navbar-nav mr-auto',
            'depth'           => 0,
            'fallback_cb'     => 'functions::fallback',
            'walker'          => new nahom_NavBar()
            ]);
            
		?>
		 <div class="s">
			<?php get_search_form(); ?>
        </div>
		
			
        
		</nav><!-- #site-navigation -->


	<div id="content" class="site-content">
