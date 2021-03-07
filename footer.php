    
    <footer class="footer">

      <section class="footer__payment">
        <div class="container">
          <h4>Formas de pagamento</h4>
          <div class="payment-icons">
            <span class="icon icon--payment-mastercard"></span>
            <span class="icon icon--payment-visa"></span>
            <span class="icon icon--payment-american-express"></span>
            <span class="icon icon--payment-boleto"></span>
            <span class="icon icon--payment-hipercard"></span>
            <span class="icon icon--payment-elo"></span>
          </div>
        </div>
      </section>

      <section class="footer__widgets">
        <div class="container">
          <?php if(is_active_sidebar('todxs-loja-sidebar-footer-1')): dynamic_sidebar('todxs-loja-sidebar-footer-1'); endif; ?>
          <?php if(is_active_sidebar('todxs-loja-sidebar-footer-2')): dynamic_sidebar('todxs-loja-sidebar-footer-2'); endif; ?>
          <?php if(is_active_sidebar('todxs-loja-sidebar-footer-3')): dynamic_sidebar('todxs-loja-sidebar-footer-3'); endif; ?>
        </div>
      </section>

      <section class="footer__copyright">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 text-center text-md-left">
              <p><span>© <?php echo date("Y"); ?> - </span><?php echo get_theme_mod('setting_copyright_left', '© 2000 - <company> - All Rights Reserved.'); ?></p>
            </div>
            <nav class="col-12 col-md-6 text-center text-md-right">
              <p>Designed / Developed by - <strong>Tarcisio Cipriano</strong></p>
            </nav>
          </div> <!-- row -->
        </div> <!-- container -->
      </section>

    </footer>
  </div>
<?php wp_footer(); ?>
</body>
</html>