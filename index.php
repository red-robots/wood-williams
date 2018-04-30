 <?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); 

// Query Homepage
$post = get_post(33); 
setup_postdata( $post );

 	if(have_rows('slides')) : ?>
<div class="homebanner">

	<div class="flexslider">
        <ul class="slides">
       		<?php  while( have_rows('slides') ) : the_row();
				$banner = get_sub_field('image');
				// echo '<pre>';
				// print_r($banner);
				// echo '</pre>';
				$title = get_sub_field('title');
				$subtitle = get_sub_field('subtitle');
				$link = get_sub_field('link');


			 	$aboutTitle = get_field('about_title');
			 	$aboutPhoto = get_field('photo');
			 	$aboutText = get_field('text');
			 	$aboutlink = get_field('read_more_link');
			?>
            <!-- <li style="background-image: url(<?php echo $banner['url']; ?>);"> -->
            <li>
				<img src="<?php echo $banner['sizes']['homebanner']; ?>" class="mobile"></img>
				<section class="searchbox sections">
					<h2><?php echo $title; ?></h2>
					<h3><?php echo $subtitle; ?></h3>
				</section>
			</li>
		
<?php 

endwhile;?>
		</ul>
		
		
	</div>
	<div class="quicksearch-home"><?php dynamic_sidebar( 'quick-search' ); ?></div>
</div>
<?php
endif;
wp_reset_postdata(); ?>


<section class="featured-listings sections">
	<h2>Featured Listings</h2>
	<div class="wrapper"><?php //dynamic_sidebar( 'featured-listings' ); ?>
	<script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-45932" src="//woodwilliamsrealty.idxbroker.com/idx/carousel.php?widgetid=45932"></script>
		<!-- <script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-8827" src="//woodwilliamsrealty.idxbroker.com/idx/customslideshowjs.php?widgetid=8827"></script> -->
	</div>
	
</section>


<section class="property-alerts sections">
	<div class="wrapper">
		<div class="pa-form-wrapper">

		<h2>Sign up to receive Property Alerts</h2>
		<div class="button">
			<a href="https://woodwilliamsrealty.idxbroker.com/idx/search/emailupdatesignup">SIGN UP</a>
		</div>

			<?php //get_template_part('inc/property-alerts'); ?>
			<?php //dynamic_sidebar( 'property-alerts' ); ?>
			<!-- <div class="already">Already have an account? <a href="https://woodwilliamsrealty.idxbroker.com/idx/userlogin"><u>Login here.</u></a> </div> -->
		</div>
	</div>	
</section>


<section class="home-latest">
	<div class="left sections">
		<h2>Latest</h2>
		<?php
			$wp_query = new WP_Query();
			$wp_query->query(array(
			'post_type'=>'post',
			'posts_per_page' => 1
		));
			if ($wp_query->have_posts()) : ?>
		    <?php while ($wp_query->have_posts()) : ?>
		        
		    <?php $wp_query->the_post(); 

		    	$img = catch_that_image();

		    ?>	
		    <div class="blogstuff">
		    	<?php 
					if( has_post_thumbnail() ) {
						the_post_thumbnail();
					} elseif( $img ) { ?>
						<img src="<?php echo $img; ?>">
					<?php } ?>
		   		<h3><?php the_title(); ?></h3>
		    	<?php the_excerpt(); ?>
		    </div>
		    	<div class="btn-full orange-grad bottom">
		    		<a href="<?php the_permalink(); ?>">READ MORE</a>
		    	</div>
		    <?php endwhile; ?>
		<?php endif; ?>
	</div>
	<div class="right sections">
		<h2><?php echo $aboutTitle; ?></h2>
		<?php if($aboutPhoto) { ?>
			<div class="photo">
				<img src="<?php echo $aboutPhoto['url']; ?>" alt="<?php echo $aboutPhoto['alt']; ?>">
			</div>
		<?php } ?>
		<?php echo $aboutText; ?>
		<div class="btn-full orange-grad bottom">
    		<a href="<?php echo $aboutlink; ?>">READ MORE</a>
    	</div>
	</div>
</section>

	<div id="primary" class="content-area ">
		<main id="main" class="site-main" role="main">

	

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
