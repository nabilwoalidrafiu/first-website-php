<?php
    // add_theme_support( 'title-tag');

    include_once('inc/default.php');
    include_once('inc/enqueue.php');
    //theme function
   include_once('inc/theme_function.php');
    //register menu
    register_nav_menu('main_menu', __('Main Menu', 'nabil-theme-domain'));



?>