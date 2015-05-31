
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage xframe
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo" class="container">
			<div class="row">
				<div id="FooterOne" class="four columns"><?php dynamic_sidebar( 'footer_one') ?></div>
				<div id="FooterTwo" class="four columns"><?php dynamic_sidebar( 'footer_two') ?></div>
				<div id="FooterThree" class="four columns"><?php dynamic_sidebar( 'footer_three') ?></div>
				<div id="FooterFour" class="four columns"><?php dynamic_sidebar( 'footer_four') ?></div>
			</div>	
	</footer><!-- #colophon -->
	
	<div id="SubFooter" class="container">
		<div id="Copyright" class="floatLeft"><?php echo get_theme_mod('copyright'); ?></div>
		<div id="Credits" class="floatRight"><?php echo get_theme_mod('credits'); ?></div>			
	</div>
				
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>