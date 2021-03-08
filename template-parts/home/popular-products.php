<!-- https://www.php.net/manual/pt_BR/function.strip-tags.php -->

<?php
  $popular_limit  = get_theme_mod('setting_popular_max_number', 6);
?>

<div class="container">
  <h2>Os populares</h2>
  <!-- <?php echo do_shortcode('[bestselling_products_slider autoplay="false" slide_to_show="5" slide_to_scroll="1" dots="false"]'); ?> -->
  <div class="slick-products slick-popular">
    <?php
      // function console_log( $data ){
      //   echo '<script>';
      //   echo 'console.log('. json_encode( $data ) .')';
      //   echo '</script>';
      // }
      $popular = do_shortcode('[products limit=" ' . $popular_limit . ' " orderby="popularity"]');
      echo strip_tags($popular, '<li><a><img><h2><span><bdi><del><ins>');
      // console_log( $original );
    ?>
  </div>


</div>