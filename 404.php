<?php get_header(); ?>

<main class="content-area">
  <div class="container">
    <div class="row">

      <div class="col-12 error-404">
        <header>
          <h1>Página não encontrada</h1>
          <p>Infelizmente, a página que você tentou acessar não existe nesse site.</p>
          <?php
            the_widget('WP_Widget_Recent_Posts', array(
              'title' => 'Dá uma olhada nos nossos últimos posts',
              'number' => 3
            ));
          ?>
        </header>
      </div>

    </div>
  </div>
</main>

<?php get_footer(); ?>