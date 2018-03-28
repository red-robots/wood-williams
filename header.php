<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script>

<script type="text/javascript" src="//d1qfrurkpai25r.cloudfront.net/graphical/javascript/leaflet.js"></script>
<script type="text/javascript" src="//d1qfrurkpai25r.cloudfront.net/graphical/frontend/javascript/maps/plugins/leaflet.draw.js"></script>
<script type="text/javascript" src="//www.mapquestapi.com/sdk/leaflet/v2.2/mq-map.js?key=Gmjtd%7Cluub2h0rn0%2Crx%3Do5-lz1nh"></script>

<script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-44955" src="//www.scotwilliamsrealty.idxbroker.com/idx/mapwidgetjs.php?widgetid=44955"></script>


<?php wp_head(); 

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
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

<?php if( !is_front_page() ) { ?><div class="blue-header"><?php } ?>

	<section class="top-header">
		<div class="agentinfo">
			<?php echo $scotName.' '.$scotNumber.' | '.$annName.' '.$annNumber; ?>
		</div>
		<div class="socialheader">
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
		</div>
	</section>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acstarter' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper flexnav">
			
			<?php if(is_home()) { ?>
	            <h1 class="logo">
	            	<a href="<?php bloginfo('url'); ?>">
	            		<img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt="<?php bloginfo('name'); ?>">
	            	</a>
	            </h1>
	        <?php } else { ?>
	            <div class="logo">
	            	<a href="<?php bloginfo('url'); ?>">
	            		<img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt="<?php bloginfo('name'); ?>">
	            	</a>
	            </div>
	        <?php } ?>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'acstarter' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
	</div><!-- wrapper -->
	</header><!-- #masthead -->


<?php if( !is_front_page() ) { ?></div><?php } ?>

	<div id="content" class="site-content ">
