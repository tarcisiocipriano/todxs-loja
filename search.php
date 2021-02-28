<?php get_header(); ?>

<main class="content-area">
  <div class="container">
    <div class="row">

      <div class="col-12">
        <h1>Resultados da pesquisa por: <?php echo get_search_query(); ?></h1>
        <?php get_search_form(); ?>
      </div>

      <?php if(have_posts()):
        while(have_posts()): the_post();
          get_template_part('template-parts/content/content', 'search');
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
        <div class="col-12"><p>Nada encontrado para sua pesquisa.</p></div>
      <?php endif ?>

    </div>
  </div>
</main>

<?php get_footer(); ?>