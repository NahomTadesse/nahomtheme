<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nahomtheme
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
<!-- <button type="button">Dark Mode</button>
<script type="text/javascript">
var color = ["#222f3e"]
document.querySelector("button").addEventListener("click",function()){document.querySelector("body").style.background = color}) -->
<body <?php body_class(); ?>>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nahomtheme' ); ?></a>
	<nav id="site-navigation"  class="navbar navbar-expand-md navbar-dark top bg-dark">
    <a class="navbar-brand" href="#">
        <?php bloginfo('name'); ?>
    </a>
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'nahomtheme' ); ?></button
        <?php
            wp_nav_menu([
            'menu'            => 'primary-menu',
            'theme_location'  => 'menu-1',
            'container'       => 'div',
            'container_id'    => 'navbarCollapse',
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
</div>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			 <?php
			the_custom_logo();
			?>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
