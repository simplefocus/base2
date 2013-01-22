<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="<?php echo get_template_directory_uri(); ?>/js/foundation/modernizr.foundation.js"></script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.8.2.min.js"><\/script>')</script>

  <?php wp_head(); ?>
  
  <script src="<?php echo get_template_directory_uri(); ?>/js/foundation/app.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/foundation/jquery.foundation.alerts-ck.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/foundation/jquery.foundation.buttons-ck.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/foundation/jquery.foundation.accordion-ck.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/foundation/jquery.foundation.navigation.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/foundation/jquery.foundation.forms-ck.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/foundation/jquery.foundation.mediaQueryToggle-ck.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/foundation/jquery.foundation.tabs-ck.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/foundation/jquery.foundation.topbar.js"></script>

  <?php if (wp_count_posts()->publish > 0) : ?>
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
  <?php endif; ?>
</head>
