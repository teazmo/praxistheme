<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--title tag gelöscht, weil WP die title tag funktion übernimmt. siehe functions.php add theme support-->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="wrapper">
        <header>
          <div class="header-container">
          <!-- Custom Logo section //-->
              <?php if(function_exists('the_custom_logo')) {
                the_custom_logo();
              } ?>
          <!-- Custom logo section end -->          
        </div><!--header-container-->
          <?php if(has_nav_menu('menu')) : ?>
                <nav id="menu">
                    <?php wp_nav_menu( array(
                      'theme-location' => 'menu',
                      'menu_class' => 'menu' //Fügt eine Klasse zum Menü hinzu
                      )
                    ); ?>
                  </nav>
          <?php endif; ?>
        </header><!-- #header -->

        <main>
          <div id="content">
