<?php
  $popular_limit  = get_theme_mod('setting_popular_max_number', 4);
?>

<div class="container">
  <h2>Os populares</h2>
  <?php echo do_shortcode('[products limit=" ' . $popular_limit . ' " orderby="popularity"]'); ?>
</div>