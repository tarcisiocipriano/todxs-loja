<?php
  $blog_posts = new WP_Query(array(
    'post_type'      => 'post',
    'posts_per_page' => 2
  ));
?>

<?php $showDeal = get_theme_mod('setting_blog_show', 0); if($showDeal): ?>

<div class="container">

  <h2>Blog</h2>

  <div class="row">

    <?php if($blog_posts->have_posts()): while($blog_posts->have_posts()): $blog_posts->the_post(); ?>

    <article class="col-12 col-md-6">

      <!-- image -->
      <a href="<?php the_permalink(); ?>">
        <?php
          if(has_post_thumbnail()):
            the_post_thumbnail('todxs-loja-blog', array('class' => 'img-fluid'));
          endif;
        ?>
      </a>
      
      <!-- title -->
      <h3>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h3>

      <!-- resume -->
      <div><?php the_excerpt(); ?></div>
      
    </article>

    <!-- alternative message  -->
    <?php endwhile; wp_reset_postdata(); else: ?>
      <p>Nenhuma postagem ainda</p>
    <?php endif ?>
    
  </div>

</div>

<?php endif; ?>