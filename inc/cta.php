<?php 

$title = get_field('cta_title', 'option');
$copy = get_field('cta_copy', 'option');
$link = get_field('cta_link', 'option');

 ?>
<div class="cta-about">
  <h2><?php echo $title; ?></h2>
    <div class="copy"><?php echo $copy; ?></div>
  <div class="btn-full">
    <a href="<?php echo $link ?>">CONTACT US</a>
  </div>
</div>