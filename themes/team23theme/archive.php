<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Humescores
 */

get_header(); ?>

<?php
if ( have_posts() ) : ?>

	<header class="page-header">
		<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
		?>
	</header><!-- .page-header -->

<?php
else :

	get_template_part( 'template-parts/content', 'none' );
	return;

endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_pagination( array(
<<<<<<< HEAD
				'prev_text' => humescores_get_svg( array( 'icon' => 'arrow-long-left', 'fallback' => true ) ) . __( 'Newer', 'humescores' ),
				'next_text' => __( 'Older', 'humescores' ) . humescores_get_svg( array( 'icon' => 'arrow-long-right' , 'fallback' => true ) ),
=======
				'prev_text' => __( 'Newer', 'humescores' ),
				'next_text' => __( 'Older', 'humescores' ),
>>>>>>> f68286663da7f5367baa93a5abd72d61afa52b3e
				'before_page_number' => '<span class="screen-reader-text">' . __( 'Page ', 'humescores' ) . '</span>',
			));

		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
