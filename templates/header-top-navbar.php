<header id="banner" class="row">
  <div class="twelve columns">
    <div class="fixed contain-to-grid">
      <nav id="nav-main" class="top-bar">
        <ul>
          <!-- Title Area -->
          <li class="name">
            <h1>
              <a class="brand" href="<?php echo home_url(); ?>/">
                <?php bloginfo('name'); ?>
              </a>
            </h1>
          </li>
          <li class="toggle-topbar"><a href="#"></a></li>
        </ul>
  
        <section>
          <!-- Left Nav Section -->
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'left')); // Choose menu class right or left. Left is default.
            endif;
          ?>
        </section>
      </nav>
    </div>
  </div>
</header>
