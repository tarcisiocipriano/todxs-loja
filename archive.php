<?php get_header(); ?>

<main class="content-area">
  <div class="container">
    <div class="row">

      <div class="col-12">
        <?php the_archive_title('<h1 class="article-title">', '</h1>'); ?>
      </div>

      <?php if(have_posts()):
        while(have_posts()): the_post();
          get_template_part('template-parts/content/content', 'archive');
        endwhile;
      ?>

      <div class="col-12">
        <?php
          the_posts_pagination(array(
            'prev_text' => 'Anterior',
            'next_text' => 'Próximo'
          ));
        ?>
      </div>
      <?php else: ?>
        <div class="col-12"><p>Nada encontrado</p></div>
      <?php endif ?>

    </div>
  </div>
</main>

<?php get_footer(); ?>