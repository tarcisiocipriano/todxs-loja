    <footer class="footer">
      <section class="footer-widgets">
        <div class="container">
          <div class="row">
            <?php if(is_active_sidebar('todxs-loja-sidebar-footer-1')): ?>
              <div class="col-12 col-md-4">
                <?php dynamic_sidebar('todxs-loja-sidebar-footer-1'); ?>
              </div>
            <?php endif; ?>
            <?php if(is_active_sidebar('todxs-loja-sidebar-footer-2')): ?>
              <div class="col-12 col-md-4">
                <?php dynamic_sidebar('todxs-loja-sidebar-footer-2'); ?>
              </div>
            <?php endif; ?>
            <?php if(is_active_sidebar('todxs-loja-sidebar-footer-3')): ?>
              <div class="col-12 col-md-4">
                <?php dynamic_sidebar('todxs-loja-sidebar-footer-3'); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </section>
      <section class="copyright">
        <div class="container">
          <div class="row">
            <div class="copyright-text col-12 col-md-6">
              <p><?php echo get_theme_mod('set_copyright', 'Copyright X - All Rights Reserved.'); ?></p>
            </div>
            <nav class="footer-menu col-12 col-md-6 text-left text-md-right">
              <?php
                wp_nav_menu(
                  array(
                    'theme_location' => 'todxs_loja_footer_menu'
                  )
                );
              ?>
            </nav>
          </div> <!-- row -->
        </div> <!-- container -->
      </section>
    </footer>
  </div>
<?php wp_footer(); ?>
</body>
</html>