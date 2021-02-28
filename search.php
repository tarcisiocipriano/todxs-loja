<?php get_header(); ?>

<main class="content-area">
  <div class="container">
    <div class="row">

      <div class="col-12">
        <h1>Resultados da pesquisa por: <?php echo get_search_query(); ?></h1>
        <?php get_search_form(); ?>
      </div>

      <?php if(have_posts()): while(have_posts()): the_post(); ?>
      
        <article class="col-12" <?php post_class(); ?>>
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

      <?php endwhile; ?>
      <div class="col-12">
        <?php
          the_posts_pagination(array(
            'prev_text' => 'Anterior',
            'next_text' => 'Próximo'
          ));
        ?>
      </div>
      <?php else: ?>
        <div class="col-12"><p>Nada encontrado para sua pesquisa.</p></div>
      <?php endif ?>

    </div>
  </div>
</main>

<?php get_footer(); ?>