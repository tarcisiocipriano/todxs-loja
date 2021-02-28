<?php get_header(); ?>

<main class="content-area">
  <div class="container">
    <div class="row">
    
      <?php while(have_posts()): the_post(); ?>
        <article id="post-<?php the_ID(); ?>" class="col-12" <?php post_class(); ?>>
          <header>
            <h1><?php the_title(); ?></h1>
            <div>
              <p>Publicado por <?php the_author_posts_link(); ?> em <?php echo get_the_date(); ?>
                <?php if(has_category()): ?><br />Categorias: <span><?php the_category(' '); ?></span><?php endif; ?>
                <?php if(has_tag()): ?><br />Tags: <?php the_tags('', ', '); ?><?php endif; ?>
              </p>
            </div>
            <?php if(has_post_thumbnail()): the_post_thumbnail('todxs-loja-blog', array('class' => 'img-fluid')); endif; ?>
          </header>
          <div><?php the_content(); ?></div>
        </article>
      <?php if(comments_open() || get_comments_number()): ?>
        <div class="col-12"><?php comments_template(); ?></div>
      <?php endif; endwhile; ?>
      
    </div>
  </div>
</main>

<?php get_footer(); ?>