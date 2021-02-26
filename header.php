<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="page" class="site">

    <header>

      <section class="search">
        <?php echo do_shortcode('[wcas-search-form]'); ?>
      </section>

      <section class="top-bar">
        <div class="container">
          <div class="row">
            <div class="brand col-12 col-md-3 col-lg-2 text-center text-md-left">Logo</div>
            <div class="second-column col-12 col-md-9 col-lg-10">
              <div class="row">
                <div class="account col-12">
                  <div class="cart text-right">
                    <a href="<?php echo wc_get_cart_url(); ?>"><i class="fas fa-shopping-cart"></i></a>
                    <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                  </div>
                </div>
                <div class="col-12">
                  <nav class="main-menu navbar navbar-expand-md navbar-light" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button
                      class="navbar-toggler ml-auto"
                      type="button"
                      data-toggle="collapse"
                      data-target="#bs-example-navbar-collapse-1"
                      aria-controls="bs-example-navbar-collapse-1"
                      aria-expanded="false"
                      aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                      <?php
                        wp_nav_menu( array(
                          'theme_location'    => 'todxs_loja_main_menu',
                          'depth'             => 3,
                          'container'         => 'div',
                          'container_class'   => 'collapse navbar-collapse',
                          'container_id'      => 'bs-example-navbar-collapse-1',
                          'menu_class'        => 'nav navbar-nav',
                          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                          'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                      ?>
                  </nav>
                </div> <!-- col-12 -->
              </div> <!-- row -->
            </div> <!-- second-column -->
          </div> <!-- row -->
        </div> <!-- container -->
      </section>

    </header>