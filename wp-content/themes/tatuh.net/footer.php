<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package semplicemente
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
        <?php        
        $year = date('Y');
        ?>
        &copy; <?php echo $year ?> <a href='http://tatuh.net'>Татух.нет</a>
	<br>
	Россия, г. Москва, пл. Киевского вокзала, 2, ТЦ «Европейский»
	<br>
	e-mail: <a href="mailto:info@tatuh.net">info@tatuh.net</a>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>