<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary')) :
          wp_nav_menu(array('theme_location' => 'primary','depth' => 4, 'menu_class' => 'nav navbar-nav' ,  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback', 'walker'  => new wp_bootstrap_navwalker()));
        endif;
      ?>
 
    </nav>
  </div>
</header>
