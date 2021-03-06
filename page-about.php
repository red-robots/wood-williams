<?php
/**
 * Template Name: About
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>
<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main about" role="main">
			<section class="about">
				<?php
				while ( have_posts() ) : the_post(); 

				$image = get_field('top_image');
				?>

					<article class="about">
						<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</header><!-- .entry-header -->
						<div class="entry-content">
							<?php if( $image ) { ?>
								<div class="about-image">
									<img src="<?php echo $image['url']; ?>">
								</div>
							<?php } ?>
							<?php the_content(); ?>
						</div><!-- .entry-content -->
					</article>

					
					<?php get_template_part('inc/cta'); ?>
					

				<?php endwhile; // End of the loop.
				?>
			</section>


		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<section class="agents sections">
	<div class="wrapper">
		<h2 class="a-section">AGENTS</h2>
			<?php
				$wp_query = new WP_Query();
				$wp_query->query(array(
				'post_type'=>'agent',
				'posts_per_page' => -1,
				'order' => 'menu_order'
			));
				if ($wp_query->have_posts()) : ?>
				<section class="agent-wrap">
				    <?php while ($wp_query->have_posts()) :  $wp_query->the_post(); 
				    	$pic = get_field('photo');
				    	$phone = get_field('phone');
				    	$title = get_field('title');
				    	$email = get_field('email');
				    	$spam = antispambot($email);
				    	// echo '<pre>';
				    	// print_r($pic);
				    	// echo '</pre>';
				    ?>	
				    <div class="agent">
					    <?php if( $pic ) { ?>
					    	<img src="<?php echo $pic['sizes']['agent']; ?>" alt="<?php echo $pic['alt']; ?>">
					    <?php } ?>
					    <section class="info">
					    	<h2><?php the_title(); ?></h2>
					    	<?php if($title) { ?>
					    		<div class="title"><?php echo $title; ?></div>
					    	<?php } ?>
					    	<div class="email">
					    		<a href="<?php echo $spam; ?>"><?php echo $spam; ?></a>
					    	</div>
					    	<div class="email-mobile">
					    		<a href="<?php echo $spam; ?>"><i class="fal fa-envelope fa-lg"></i></a>
					    	</div>
					    	<?php if( $phone ) { ?>
					    		<div class="phone"><?php echo $phone; ?></div>
					    	<?php } ?>
					    	<div class="btn-full">
					    		<a href="<?php the_permalink(); ?>">VIEW BIO</a>
					    	</div>
					    </section>
					    <!-- <section class="bio">
					    	<?php the_content(); ?>
					    </section> -->
				    </div>
				    <?php endwhile; ?>
			    </section>
				<?php endif; ?>

	</div>
</section>	
<?php
get_footer();
