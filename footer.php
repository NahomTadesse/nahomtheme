<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nahomtheme
 */

?>

<!-- <nav id="site-navigationf"  class="navbar navbar-expand-md navbar-dark top bg-dark">
    <a class="navbar-brand" href="#">
        <?php bloginfo('name'); ?>
    </a>
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'footer menu', 'nahomtheme' ); ?></button
        <?php
            wp_nav_menu([
            'menu'            => 'footer menu',
            'theme_location'  => 'menu-1',
            'container'       => 'div',
            'container_id'    => 'navbarCollapse',
            'container_class' => 'collapse navbar-collapse',
            'menu_id'         => false,
            'menu_class'      => 'navbar-nav mr-auto',
            'depth'           => 0,
            'fallback_cb'     => 'functions::fallback',
            'walker'          => new nahom_NavBarFooter()
            ]);
        ?>

	</div> -->
    
    <!-- #content -->
</div>
	<footer id="colophon" class="site-footer white" >
    <div id="footer-sidebar" class="row secondary">
        <div class="col-md-3" id="footer-sidebar1">
        <?php
        if(is_active_sidebar('footer-sidebar-1')){
        dynamic_sidebar('footer-sidebar-1');
        }
        ?>
        </div>
        <div class="col-md-3" id="footer-sidebar2">
        <?php
        if(is_active_sidebar('footer-sidebar-2')){
        dynamic_sidebar('footer-sidebar-2');
        }
        ?>
        </div>
        <div class="col-md-3" id="footer-sidebar3">
        <?php
        if(is_active_sidebar('footer-sidebar-3')){
        dynamic_sidebar('footer-sidebar-3');
        }
        ?>
        </div>
        <div class="col-md-3" id="footer-sidebar4">
        <?php
        if(is_active_sidebar('footer-sidebar-4')){
        dynamic_sidebar('footer-sidebar-4');
        }
        ?>
        </div>
      </div>
    <p><h3 style="color:white;">powered by nahomtheme</h3></p>
    <br ><h6 style="color:white;">Copy Right ©2020 nahomtheme </h6></br>
		<!-- <div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'nahomtheme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'nahomtheme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'nahomtheme' ), 'nahomtheme', '<a href="http://underscores.me/">Underscores.me</a>' );
				?> -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->






<?php wp_footer(); ?>

</body>
</html>
