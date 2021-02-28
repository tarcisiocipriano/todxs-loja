<?php
  $arrivals_limit = get_theme_mod('set_new_arrivals_max_num', 4);
  $arrivals_col   = get_theme_mod('set_new_arrivals_max_col', 4);
?>

<div class="container">
  <h2>Novidades</h2>
  <?php echo do_shortcode('[products limit=" ' . $arrivals_limit . ' " columns=" ' . $arrivals_col . ' " orderby="date"]'); ?>
</div>