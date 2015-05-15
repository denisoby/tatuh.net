<?php
/**
 * theme main footer template.
 */
?>


    <footer class="content-info" role="contentinfo">
      <div class="container">
        <p>
        	<!-- copyright -->
        	<?php echo ( '&copy;'); ?> <?php echo date( 'Y' ); ?>
        	<!-- site name -->
        	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></
        </p>
      </div>
    </footer>


</div><!-- .wrap -->

<?php wp_footer(); ?>

</body>
</html>