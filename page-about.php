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
				while ( have_posts() ) : the_post(); ?>


					<article class="about">
						<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</header><!-- .entry-header -->
						<div class="entry-content">
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
<?php
get_footer();
