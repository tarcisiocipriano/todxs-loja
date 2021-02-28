<article class="col-12">
  <h1><?php the_title(); ?></h1>
  <div><?php the_content(); ?></div>
  <?php if(comments_open() || get_comments_number()): ?>
    <div><?php comments_template(); ?></div>
  <?php endif; ?>
</article>