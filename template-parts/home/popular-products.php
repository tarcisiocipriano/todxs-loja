<?php
  $popular_limit  = get_theme_mod('set_popular_max_num', 4);
  $popular_col    = get_theme_mod('set_popular_max_col', 4);
?>

<div class="container">
  <h2>Os populares</h2>
  <?php echo do_shortcode('[products limit=" ' . $popular_limit . ' " columns=" ' . $popular_col . ' " orderby="popularity"]'); ?>
</div>