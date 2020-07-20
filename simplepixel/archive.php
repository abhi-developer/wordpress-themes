<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SimplePixel
 */

get_header();
?>

<div class="full-content">
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */?>
			<?php while ( have_posts() ) :?>
				<?php the_post();?>

				<?php/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */?>
				<?php get_template_part( 'template-parts/content', 'archive' );?>

			<?php endwhile;?>

<div class="badge badge-secondary">
			<?php the_posts_navigation();?>
</div>
		<?php else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php get_sidebar();?>
	</div>
<?php get_footer();?>
