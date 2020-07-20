<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SimplePixel
 */

?>

<?php 
	if ( is_active_sidebar( 'simplepixel-top-footad' )  ) { ?>
        			<div class="all-ads">
            			<div class="ads-container">
                            <div class="ads-wrapper">
                				<div class="top-footad">
                					<?php if ( is_active_sidebar( 'simplepixel-top-footad' ) ) { ?>
                						<?php dynamic_sidebar( 'simplepixel-top-footad' ); ?>
                					<?php } ?>
                				</div>
                				</div>
                				</div>
                				</div>
<?php   
}//endif is_active_sidebar
?>

	<footer id="colophon" class="site-footer">

<?php 
	if ( is_active_sidebar( 'simplepixel-footer-1' ) ||  is_active_sidebar( 'simplepixel-footer-2' )  || is_active_sidebar( 'simplepixel-footer-3' ) || is_active_sidebar( 'simplepixel-footer-4' )  ) { ?>
        			<div class="top-footer">
            			<div class="sp-container">
                            <div class="footer-block-wrapper">
                				<div class="footer-block-1 footer-block">
                					<?php if ( is_active_sidebar( 'simplepixel-footer-1' ) ) { ?>
                						<?php dynamic_sidebar( 'simplepixel-footer-1' ); ?>
                					<?php } ?>
                				</div>
                
                				<div class="footer-block-2 footer-block">
                					<?php if ( is_active_sidebar( 'simplepixel-footer-2' ) ) { ?>
                						<?php dynamic_sidebar( 'simplepixel-footer-2' ); ?>
                					<?php } ?>	
                				</div>
                
                				<div class="footer-block-3 footer-block">
                					<?php if ( is_active_sidebar( 'simplepixel-footer-3' ) ) { ?>
                						<?php dynamic_sidebar( 'simplepixel-footer-3' ); ?>
                					<?php } ?>	
                				</div>
								<div class="footer-block-4 footer-block">
                					<?php if ( is_active_sidebar( 'simplepixel-footer-4' ) ) { ?>
                						<?php dynamic_sidebar( 'simplepixel-footer-4' ); ?>
                					<?php } ?>	
                				</div>
                            </div> <!-- footer-block-wrapper -->
                         </div><!--sp-container-->
                    </div><!--top-footer-->
        <?php   
                }//endif is_active_sidebar
				?>

		<div class="site-info">
			<div class="footer-credit">

                <span class="copyright-symbol"> &copy; <?php echo date( 'Y' ) ?></span>
          

				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Powered by %2$s', 'simplepixel' ), 'simplepixel', '<a href="https://wordpress.org/">WordPress</a>' );
				?>
			
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s', 'simplepixel' ), 'SimplePixel', '<a href="https://www.abcart.in/">ABcart.in</a>' );
				?>
				
	<?php wp_nav_menu(
	array(
		'theme_location' => 'footer-menu',
	)
	);?>

			</div>
		</div><!-- .site-info -->


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
