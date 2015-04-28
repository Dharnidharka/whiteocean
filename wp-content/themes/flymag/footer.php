<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package FlyMag
 */
?>

	</div><!-- #content -->
	<?php if ( is_active_sidebar( 'sidebar-4' ) || is_active_sidebar( 'sidebar-5' ) || is_active_sidebar( 'sidebar-6' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'flymag' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'flymag' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %2$s by %1$s.', 'flymag' ), 'FlyFreeMedia', '<a href="http://flyfreemedia.com/themes/flymag" rel="designer">FlyMag</a>' ); ?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
