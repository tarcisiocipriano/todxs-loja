<?php
  $arrivals_limit = get_theme_mod('setting_arrivals_max_number', 6);
?>

<div class="container">
  <h2>Novidades</h2>
  <div class="slick-products slick-arrivals">
    <?php
      $arrivals = do_shortcode('[products limit=" ' . $arrivals_limit . ' " orderby="date"]');
      echo strip_tags($arrivals, '<li><a><img><h2><span><bdi><del><ins>');
    ?>
  </div>
</div>
