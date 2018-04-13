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

		

		

	</div><!-- wrapper -->

		<section class="signups sections signups-pa">
			<div class="wrapper">
				<div class="property-alerts">
					<div class="pa-form-wrapper">
						<?php //get_template_part('inc/property-alerts'); ?>
						<?php dynamic_sidebar( 'property-alerts' ); ?>
						<!-- <script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-8824" src="//woodwilliamsrealty.idxbroker.com/idx/leadsignupwidget.php?widgetid=8824"></script> -->
					</div>
				</div>
			</div>

			
			
		</section>

		
		
	</footer><!-- #colophon -->

	<section class="signups sections signups-newsletter">
			<div class="wrapper">
				<div class="newsletter-signup ">
					<h2>SIGN UP FOR OUR NEWSLETTER</h2>
					<!-- Begin Constant Contact Inline Form Code -->
					<div class="ctct-inline-form" data-form-id="f72a271e-0ee2-4be9-8114-a81a3d3ffcf5"></div>
					<!-- End Constant Contact Inline Form Code -->
				</div>
			</div>
		</section>
		<section class="sections creds">
			<div class="wrapper">
				<div class="bottom">
					<a href="<?php bloginfo('url'); ?>/sitemap">sitemap</a>
				</div>
			</div>
		</section>

</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Begin Constant Contact Active Forms -->
<script> var _ctct_m = "d374fbbe4aee7c3ef9b6a4934cb5e873"; </script>
<script id="signupScript" src="//static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script>
<!-- End Constant Contact Active Forms -->
</body>
</html>
