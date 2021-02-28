<article <?php post_class(); ?>>
  <h2>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h2>
  <?php if(has_post_thumbnail()): ?>
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('todxs-loja-blog', array('class' => 'img-fluid')); ?>
    </a>
  <?php endif; ?>
  <div>
    <p>Publicado por <?php the_author_posts_link(); ?> em <?php echo get_the_date(); ?>
      <?php if(has_category()): ?><br />Categorias: <span><?php the_category(' '); ?></span><?php endif; ?>
      <?php if(has_tag()): ?><br />Tags: <?php the_tags('', ', '); ?><?php endif; ?>
    </p>
  </div>
  <div><?php the_excerpt(); ?></div>
</article>