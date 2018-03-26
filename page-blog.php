<?php
/**
 * Template Name: Blog
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>
<div class="wrapper">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				$wp_query = new WP_Query();
				$wp_query->query(array(
				'post_type'=>'post',
				'posts_per_page' => 10,
				'paged' => $paged,
			));
				if ($wp_query->have_posts()) : ?>

				<?php while ($wp_query->have_posts()) :  $wp_query->the_post(); 

					$img = catch_that_image();

					// echo '<pre>';
					// print_r($img);
					// echo '</pre>';

				?>

					<article class="post">
						<div class="the-date">
							<?php the_date('M j'); ?>
						</div>
						<div class="blogpost">
							<div class="img">
							<?php 
							if( has_post_thumbnail() ) {
								the_post_thumbnail();
							} elseif( $img ) { ?>
								<img src="<?php echo $img; ?>">
							<?php } ?>
							</div>
							<div class="content">
								<header class="post">
									<h2><?php the_title(); ?></h2>
								</header>
									<div class="excerpt"><?php the_excerpt(); ?></div>
								</div>
							</div>
						
						<div class="btn">
							<a href="<?php the_permalink(); ?>">READ MORE</a>
						</div>
					</article>

				<?php endwhile;

					pagi_posts_nav();

				endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>

</div>
<?php

get_footer();
