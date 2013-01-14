<header class="row" role="banner">
  <div class="twelve columns">
    <h1>
      <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </h1>
  </div>
  
  <nav id="nav-main" class="twelve columns" role="navigation">
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav-bar'));
      endif;
    ?>
  </nav>
</header>