<?php
/**
 * Template Name: Contact
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>
<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); 

			$formDesc = get_field('form_intro_description');
			$form = get_field('form');
			$formOutput = '[gravityform id="'.$form.'" title="false" description="false"]';

			// echo '<pre>';
			// print_r($form);
			// echo '</pre>';

			?>

				<div class="intro">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</header><!-- .entry-header -->
						<div class="left contact">
							<div class="entry-content">
								<?php the_content(); ?>
							</div><!-- .entry-content -->
						</div>
						<div class="right">
							<div class="entry-content">
								<?php if($formDesc) {echo do_shortcode($formOutput);} ?>
							</div><!-- .entry-content -->
						</div>
						
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
