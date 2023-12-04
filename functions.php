<?php 

function theme_customizer_settings($wp_customize) {
    // Logo section
    $wp_customize->add_section('theme_logo_section', array(
        'title' => __('Logo', 'your_theme_textdomain'),
        'priority' => 30,
    ));

    // Logo upload control
    $wp_customize->add_setting('theme_logo', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'theme_logo', array(
        'label' => __('Upload Logo', 'your_theme_textdomain'),
        'section' => 'theme_logo_section',
        'settings' => 'theme_logo',
    )));
}

add_action('customize_register', 'theme_customizer_settings');


add_theme_support('post-thumbnails');


function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu'),
        )
    );
}
add_action('init', 'register_my_menus');






 ?>