<?php
 function nabil_customize_register($wp_customize){
    $wp_customize->add_section('nabil_header_area', array(
        'title' =>__('Header Area', 'nabil-theme-domain'), 
        'description' => "Here you can update your header area"
    ));
    $wp_customize -> add_setting('nabil_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/logo.png'
    ));
    $wp_customize -> add_control(new Wp_Customize_Image_Control($wp_customize, 'nabil_logo', array(
        'label' => 'logo upload',
        'description' => 'Here you can update your logo',
        'setting' => 'nabil_logo',
        'section' => 'nabil_header_area'
    )));
//menu positon
    $wp_customize -> add_section('nabil_menu_option', array(
        'title' => __('Menu Position Option', 'nabil-theme-domain'),
        'description' => 'Here you can change your menu'
    ));
    $wp_customize -> add_setting('nabil_menu_position', array(
        'default' => 'right_menu'
    ));
    $wp_customize -> add_control('nabil_menu_position', array(
        'label' => 'Menu Postion',
        'description' => 'Select your menu area', 
        'setting' => 'nabil_menu_position', 
        'section' => 'nabil_menu_option',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu',
        )
    ));
    
//footer option
    $wp_customize -> add_section('nabil_footer_option', array(
        'title' => __('Footer Option', 'nabil-theme-domain'),
        'description' => 'Here you can change your footer'
    ));
    $wp_customize -> add_setting('nabil_copyright_section', array(
        'default' => '&copy; copyright 2021 | Follow Nabil'
    ));
    $wp_customize -> add_control('nabil_copyright_section', array(
        'label' => 'Copyright text',
        'description' => 'Select your copyright area', 
        'setting' => 'nabil_copyright_section', 
        'section' => 'nabil_footer_option',
    ));
}
add_action('customize_register', 'nabil_customize_register');
