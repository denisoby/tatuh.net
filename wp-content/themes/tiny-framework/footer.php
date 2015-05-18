<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #content and #page div elements.
 *
 * @package Tiny_Framework
 * @since Tiny Framework 1.0
 */
?>
	</div><!-- #content .site-content -->

	<?php tha_footer_before(); // custom action hook ?>

	<?php // Accessibility. Aria labelledby adds relationship between the footer and its heading. ?>

	<footer id="colophon" class="site-footer" role="contentinfo" aria-labelledby="footer-header" itemscope itemtype="http://schema.org/WPFooter">

		<?php tha_footer_top(); // custom action hook ?>

		<div class="site-info">
		<p>
                <!-- copyright -->
                <?php echo ( '&copy;'); ?> <?php echo date( 'Y' ); ?>
                <!-- site name -->
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
        	</p>

		<span id="site-admin-link"><?php wp_register('', ''); ?> <?php wp_loginout(); ?></span>

		</div><!-- .site-info -->		

		<?php tha_footer_bottom(); // custom action hook ?>

	</footer><!-- .site-footer -->

	<?php tha_footer_after(); // custom action hook ?>

</div><!-- #page .site -->

<?php tha_body_bottom(); // custom action hook ?>
<?php wp_footer(); ?>

</body>
</html>