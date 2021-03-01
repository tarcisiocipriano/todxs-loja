<a href="<?php echo home_url('/'); ?>">
  <?php if(has_custom_logo()): ?>
    <?php the_custom_logo(); ?>
  <?php else: ?>
    <p class="site-title"><?php bloginfo('title'); ?></p>
    <span><?php bloginfo('description'); ?></span>
  <?php endif; ?>
</a>