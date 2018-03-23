<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */
// Options
$scotName = get_field('scot_name', 'option');
$scotNumber = get_field('scot_number', 'option');
$scotEmail = get_field('scot_email', 'option');
$annName = get_field('ann_name', 'option');
$annNumber = get_field('ann_number', 'option');
$annEmail = get_field('ann_email', 'option');
$facebook = get_field('facebook_link', 'option');
$instagram = get_field('instagram_link', 'option');
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrapper">

		<section class="social">
			<?php if( $facebook ) { ?>
				<div class="icon">
					<a href="<?php echo $facebook ?>" target="_blank">
						<i class="fab fa-facebook-f fa-2x"></i>
					</a>
				</div>
			<?php } ?>
			<?php if( $instagram ) { ?>
				<div class="icon">
					<a href="<?php echo $instagram ?>" target="_blank">
						<i class="fab fa-instagram fa-2x"></i>
					</a>
				</div>
			<?php } ?>
		</section>
		
		<section class="footer-agents">
			<?php echo $scotName.' '.$scotNumber.' | '.$annName.' '.$annNumber; ?>
		</section>

		<section class="signups">
			<div class="left sections">
				<div class="pa-form-wrapper">
					<?php //get_template_part('inc/property-alerts'); ?>
					<?php dynamic_sidebar( 'property-alerts' ); ?>
				</div>
			</div>
			<div class="right sections">
				<h2>SIGN UP FOR OUR NEWSLETTER</h2>
			</div>
		</section>

		<div class="bottom">
			<a href="<?php bloginfo('url'); ?>/sitemap">sitemap</a>
		</div>

	</div><!-- wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
