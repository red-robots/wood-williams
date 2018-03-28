<?php
/**
 * Template Name: Property Search
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

<script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-44955" src="//www.scotwilliamsrealty.idxbroker.com/idx/mapwidgetjs.php?widgetid=44955"></script>

<div class="wrapper">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); ?>

				<div class="intro">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<?php the_content(); ?>
						</div><!-- .entry-content -->

						


					</article><!-- #post-## -->
				</div>	

			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php //get_sidebar(); ?>

</div>
<?php

get_footer();
