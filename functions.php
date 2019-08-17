<?php
function register_my_menus() {
    register_nav_menus(
        array('menu' => __( 'Header Menu','praxistheme') )
        );
    }

add_action ('init', 'register_my_menus');
