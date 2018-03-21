<?php 

$title = get_field('cta_title', 'option');
$copy = get_field('cta_copy', 'option');
$link = get_field('cta_link', 'option');

$currentID = get_the_ID();

 ?>
<div class="cta-about">

	<div class="callout-box">
	  <h2><?php echo $title; ?></h2>
	    <div class="copy"><?php echo $copy; ?></div>
	  <div class="btn-full">
	    <a href="<?php echo $link ?>">CONTACT US</a>
	  </div>
  </div>

  
	  <?php
			$wp_query = new WP_Query();
			$wp_query->query(array(
			'post_type'=>'agent',
			'posts_per_page' => -1,
			'order' => 'menu_order',
			'post__not_in' => array($currentID)
		));
			if ($wp_query->have_posts()) : ?>
			<section class="agent-sidebar">
			<h2>Other Agents</h2>
			    <?php while ($wp_query->have_posts()) :  $wp_query->the_post(); 
			    	$pic = get_field('photo');
			    	$phone = get_field('phone');
			    	$email = get_field('email');
			    	$spam = antispambot($email);
			    	// echo '<pre>';
			    	// print_r($pic);
			    	// echo '</pre>';
			    ?>	

			    <div class="agent">
			    	<div class="pic">
			    		<?php if( $pic ) { ?>
					    	<img src="<?php echo $pic['sizes']['thumbnail']; ?>" alt="<?php echo $pic['alt']; ?>">
					    <?php } ?>
					    </div>
				    <div class="agent-info">
				    	<h2 class="agentl"><?php the_title(); ?></h2>
				    	<!-- <div class="email">
				    		<a href="<?php echo $spam; ?>"><?php echo $spam; ?></a>
				    	</div>
				    	<div class="email-mobile">
				    		<a href="<?php echo $spam; ?>"><i class="fal fa-envelope fa-lg"></i></a>
				    	</div>
				    	<?php if( $phone ) { ?>
				    		<div class="phone"><?php echo $phone; ?></div>
				    	<?php } ?> -->
				    	<div class="btn-full bottom">
				    		<a href="<?php the_permalink(); ?>">VIEW BIO</a>
				    	</div>
				    </div>
			    	
			    </div>

			<?php endwhile; ?>
			</section>
		<?php endif; ?>
</div>