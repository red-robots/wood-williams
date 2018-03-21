<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

					$pic = get_field('photo');
			    	$phone = get_field('phone');
			    	$email = get_field('email');
			    	$spam = antispambot($email);

				    	?>


					<article class="about">
						<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</header><!-- .entry-header -->
						<div class="left">
							
							<?php if( $pic ) { ?>
						    	<img src="<?php echo $pic['url']; ?>" alt="<?php echo $pic['alt']; ?>">
						    <?php } ?>
							<div class="single-info">
								<div class="email">
						    		<a href="<?php echo $spam; ?>"><?php echo $spam; ?></a>
						    	</div>
						    	<div class="email-mobile">
						    		<a href="<?php echo $spam; ?>"><i class="fal fa-envelope fa-lg"></i></a>
						    	</div>
						    	<?php if( $phone ) { ?>
						    		<div class="phone"><?php echo $phone; ?></div>
						    	<?php } ?>
					    	</div>

						</div>
						<div class="right">
							<div class="entry-content">
								<?php the_content(); ?>
							</div><!-- .entry-content -->
						</div>
						
					</article>

					
					
					

				<?php endwhile; // End of the loop.
				?>

				<?php get_template_part('inc/agent-list'); ?>


			</section>


		

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php

get_footer();
