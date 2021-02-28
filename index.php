<?php get_header(); ?>

<main class="content-area">
  <div class="container">
    <div class="row">

      <div class="col-12 col-md-8 col-lg-9">
        <!-- posts -->
        <?php if(have_posts()):
          while(have_posts()): the_post();
            get_template_part('template-parts/content/content');
          endwhile;
        ?>

        <!-- pagination -->
        <?php
          the_posts_pagination(array(
            'prev_text' => 'Anterior',
            'next_text' => 'Próximo'
          ));
        ?>

         <!-- alternative message -->
        <?php else: ?>
          <div class="col-12"><p>Nada encontrado</p></div>
        <?php endif ?>
      </div>

      <?php get_sidebar(); ?>

    </div>
  </div>
</main>

<?php get_footer(); ?>