<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--title tag gelöscht, weil WP die title tag funktion übernimmt. siehe functions.php add theme support-->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
<script>
  jQuery(document).ready(function($){
      // Öffne und schließe Responsive Navigation
      $('.menu-trigger').click(function(){
          $(this).toggleClass('active');
          $('#main').toggleClass('menu-open');
      });
  });
</script>
</head>

<body <?php body_class(); ?>>
    <div id="wrapper">
        <div class="header-wrapper">
        <header>

          <!-- Custom Logo section //-->
              <?php if(function_exists('the_custom_logo')) {
                the_custom_logo();
              } ?>
          <!-- Custom logo section end -->
        </header><!-- #header -->
        </div><!--header-container-->
        <?php if(has_nav_menu('menu')) : ?>
        			<div class="nav-wrapper">
        <nav id="main-menu">

				<a class='menu-trigger'>
        			<span>Menu</span>
        		</a>
        		<?php wp_nav_menu( array(
        			'theme-location' => 'menu',
        			'depth'	=> 2, // 1 = no dropdowns, 2 = with dropdowns.
        			'container'       => 'div',
        			'container_id'    => 'main',
         			'menu_class'      => 'menu main-menu'
          				)
          			); ?>
          </nav>
      </div><!--.container-->

          <?php endif; ?>
