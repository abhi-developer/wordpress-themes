<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package SimplePixel
 */

get_header();
?>

<div class="full-content">
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'simplepixel' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'simplepixel' ) . '</span> <span class="nav-title">%title</span>',
				)
			);?>

<?php 
	if ( is_active_sidebar( 'simplepixel-above-commad' )  ) { ?>
        			<div class="all-ads">
            			<div class="ads-container">
                            <div class="ads-wrapper">
                				<div class="above-commad">
                					<?php if ( is_active_sidebar( 'simplepixel-above-commad' ) ) { ?>
                						<?php dynamic_sidebar( 'simplepixel-above-commad' ); ?>
                					<?php } ?>
                				</div>
                				</div>
                				</div>
                				</div>
<?php   
}//endif is_active_sidebar
?>

			<?php // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php get_sidebar();?>
	</div>

<?php get_footer();?>
