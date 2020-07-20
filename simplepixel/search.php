<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package SimplePixel
 */

get_header();
?>
<div class="full-content">
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'simplepixel' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */?>
			<?php while ( have_posts() ) :
				the_post();?>

				<?php /**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */?>
				<?php get_template_part( 'template-parts/content', 'search' );?>

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
