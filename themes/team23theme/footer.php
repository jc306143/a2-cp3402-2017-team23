<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Humescores
 */

?>

	</div><!-- #content -->

	<?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
<<<<<<< HEAD
		<div class="site-footer__wrap">
			<?php
			// Make sure there is a social menu to display.
			if ( has_nav_menu( 'social' ) ) { ?>
			<nav class="social-menu">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'social',
						'menu_class'     => 'social-links-menu',
						'depth'          => 1,
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>' . humescores_get_svg( array( 'icon' => 'chain' ) ),
					) );
				?>
			</nav><!-- .social-menu -->
			<?php } ?>

			<div class="site-info">
				<div><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'humescores' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'humescores' ), 'WordPress' ); ?></a></div>
				<div><?php printf( esc_html__( 'Theme: %1$s by %2$s', 'team23theme' ), 'team23theme', '<a href="https://github.com/CP3402-2017-1/a2-cp3402-2017-team23" rel="designer">CP3402 team23</a>' ); ?></div>
			</div><!-- .site-info -->
		</div><!-- .site-footer__wrap -->
=======
		<?php
		// Make sure there is a social menu to display.
		if ( has_nav_menu( 'social' ) ) { ?>
		<nav class="social-menu">
		<?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
		</nav><!-- .social-menu -->
		<?php } ?>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'humescores' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'humescores' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'humescores' ), 'humescores', '<a href="https://mor10.com/courses" rel="designer">Morten Rand-Hendriksen</a>' ); ?>
		</div><!-- .site-info -->
>>>>>>> f68286663da7f5367baa93a5abd72d61afa52b3e
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
