<?php get_header(); ?>

<div class="content-area">
  <main>
    <div class="container">
      <?php
        if(have_posts()):
          while(have_posts()): the_post();
          ?>
            <article <?php post_class(); ?>>
              <h2>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <a href="<?php the_permalink(); ?>">
                <?php
                  if(has_post_thumbnail()):
                    the_post_thumbnail('todxs-loja-blog', array('class' => 'img-fluid'));
                  endif;
                ?>
              </a>
              <div>
                <p>Publicado por <?php the_author_posts_link(); ?> em <?php echo get_the_date(); ?>
                  <?php if(has_category()): ?><br />Categorias: <span><?php the_category(' '); ?></span><?php endif; ?>
                  <?php if(has_tag()): ?><br />Tags: <?php the_tags('', ', '); ?><?php endif; ?>
                </p>
              </div>
              <div><?php the_excerpt(); ?></div>
            </article>
          <?php
          endwhile;
        else:
      ?>
      <p>Nothing to display</p>
      <?php endif ?>
    </div>
  </main>
</div>

<?php get_footer(); ?>