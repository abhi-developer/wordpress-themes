<?php
/**
 * Template part for displaying results in Home pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SimplePixel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			simplepixel_posted_on();
			//simplepixel_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

<div class="post-list">

<?php if(has_post_thumbnail()):?>

<img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">

<?php endif?>

	<?php //simplepixel_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>

		<a href="<?php the_permalink();?>" class="btn btn-info">Continue reading...</a>
	</div><!-- .entry-summary -->
</div>
	<footer class="entry-footer">
		<?php //simplepixel_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
