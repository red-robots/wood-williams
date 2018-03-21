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
 
	$banner = get_field('main_banner');
	$text = get_field('search_text');
 	$aboutTitle = get_field('about_title');
 	$aboutPhoto = get_field('photo');
 	$aboutText = get_field('text');
 	$aboutlink = get_field('read_more_link');

wp_reset_postdata();


?>
<div class="homebanner" style="background-image: url(<?php echo $banner['url'] ?>);">
	<!-- <img src="<?php echo $banner['url'] ?>" alt="<?php echo $banner['alt'] ?>"> -->
	<section class="searchbox sections">
		<h2><?php echo $text; ?></h2>
	</section>
</div>

<section class="featured-listings sections">
	<h2>Featured Listings</h2>
	<?php // put featured listings here. ?>
</section>

<section class="property-alerts sections">
	<?php get_template_part('inc/property-alerts'); ?>
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
		        
		    <?php $wp_query->the_post(); ?>	
		    
		    <h3><?php the_title(); ?></h3>
		    	<?php the_excerpt(); ?>
		    	<div class="btn-full orange-grad">
		    		<a href="<?php the_permalink(); ?>">READ MORE</a>
		    	</div>
		    <?php endwhile; ?>
		<?php endif; ?>
	</div>
	<div class="right sections">
		<h2><?php echo $aboutTitle; ?></h2>
		<?php echo $aboutText; ?>
		<div class="btn-full orange-grad">
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
