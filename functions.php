<?php
/*
* See twentynineteen for reference
*/

if ( ! function_exists( 'praxistheme_setup' ) ) :

  function praxistheme_setup(){
      /*
       * Switch default core markup for search form, comment form, and comments
       * to output valid HTML5.
       */
      add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
      ) );
      /**
      * Theme uses wp_nav_menu() on one location.
      */
      register_nav_menus(
          array('menu' => __( 'Header Menu','praxistheme') )
          );
      }

      /**
       * Add support for core custom logo. Output in HTML: <a href="[home]" class="custom-logo-link" rel="home"><img width="158" height="105" src="..." class="custom-logo" alt="WordPress_A"></a>
       *
       * @link https://codex.wordpress.org/Theme_Logo
       */
      add_theme_support(
        'custom-logo',
        array(
          'height'      => 190,
          'width'       => 190,
          'flex-width'  => false,
          'flex-height' => false,
        )
      );

      // Set up the WordPress core custom background feature. see underscore theme
      add_theme_support( 'custom-background', apply_filters( 'praxis_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
      ) ) );

endif;

add_action ('after_setup_theme','praxistheme_setup');
