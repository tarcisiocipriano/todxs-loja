<?php
  $arrivals_limit = get_theme_mod('setting_arrivals_max_number', 4);
?>

<div class="container">
  <h2>Novidades</h2>
  <?php echo do_shortcode('[products limit=" ' . $arrivals_limit . ' " orderby="date"]'); ?>
</div>