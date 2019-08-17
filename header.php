<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="wrapper">
        <header>
          <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
          <span id=”description”><?php bloginfo('description'); ?></span>
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
