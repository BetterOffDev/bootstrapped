<?php
/**
 * footer.php
 *
 * Includes closing of main content, footer content and closing of <body> & <html>
 *
 * @package bootstrapped
 */
?>

		</div><!-- #main_content -->
	</div><!--#wrap-->
	<footer>
		<div class="site-info">
			<p class="copyright">&copy; <?php echo date( "Y" ); echo " "; bloginfo( 'name' ); ?></p>
		</div><!-- .site-info -->
	</footer>
<?php wp_footer(); ?>

</body>
</html>
