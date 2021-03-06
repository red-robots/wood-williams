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
// check to see if you have any
$ifSocial = $facebook . $instagram;
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrapper">
		<?php if($ifSocial) : ?>
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
		<?php endif; ?>
		
		<section class="footer-agents">
			<?php echo $scotName.' '.$scotNumber.' | '.$annName.' '.$annNumber; ?>
		</section>

		

		

	</div><!-- wrapper -->
<?php if( !is_front_page() ) : ?>
		<section class="signups sections signups-pa">
			<div class="wrapper">
				<div class="property-alerts">
					<div class="pa-form-wrapper">
						<?php //get_template_part('inc/property-alerts'); ?>
						<?php //dynamic_sidebar( 'property-alerts' ); ?>
						<!-- <script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-8824" src="//woodwilliamsrealty.idxbroker.com/idx/leadsignupwidget.php?widgetid=8824"></script> -->
						<!-- <div class="already">Already have an account? <a href="https://woodwilliamsrealty.idxbroker.com/idx/userlogin"><u>Login here.</u></a> </div> -->
						<h2>Sign up to receive Property Alerts</h2>
						<div class="button">
			<a href="https://woodwilliamsrealty.idxbroker.com/idx/search/emailupdatesignup">SIGN UP</a>
		</div>
					</div>
				</div>
			</div>

			
			
		</section>
<?php endif; ?>

		
		
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


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118449534-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118449534-1');
</script>

</body>
</html>
