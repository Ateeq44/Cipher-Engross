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


     $wp_customize->add_section('logo_settings', array(
        'title'    => __('Logo Settings', 'your-theme-textdomain'),
        'priority' => 30,
    ));

    // Add a control for logo size
    $wp_customize->add_setting('logo_size', array(
        'default'           => 'medium',
        'sanitize_callback' => 'sanitize_key',
    ));

    $wp_customize->add_control('logo_size', array(
        'label'   => __('Logo Size', 'your-theme-textdomain'),
        'section' => 'logo_settings',
        'type'    => 'radio',
        'choices' => array(
            'small'  => __('Small', 'your-theme-textdomain'),
            'medium' => __('Medium', 'your-theme-textdomain'),
            'large'  => __('Large', 'your-theme-textdomain'),
        ),
    ));
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


class Custom_Recent_Comments_Widget extends WP_Widget {

    // Widget setup.
    function __construct() {
        parent::__construct(
            'custom_recent_comments_widget',
            'Custom Recent Comments',
            array('description' => 'Display recent comments in the sidebar.')
        );
    }

    // How to display the widget on the screen.
    function widget($args, $instance) {
        echo $args['before_widget'];

        echo '<aside id="recent-comments" class="widget">';
        echo '<h2 class="widget-title">Recent Comments</h2>';
        echo '<ul>';

        // Get recent comments
        $comments_args = array(
            'number'      => 5,      // Number of comments to display
            'status'      => 'approve',
            'post_status' => 'publish',
        );

        $comments_query = new WP_Comment_Query;
        $comments = $comments_query->query($comments_args);

        // Display recent comments
        foreach ($comments as $comment) {
            echo '<li>';
            echo '<a href="' . esc_url(get_comment_link($comment)) . '">';
            echo esc_html(get_comment_author()) . ': ' . esc_html($comment->comment_content);
            echo '</a>';
            echo '</li>';
        }

        echo '</ul>';
        echo '</aside>';

        echo $args['after_widget'];
    }
}

// Register the widget
function register_custom_recent_comments_widget() {
    register_widget('Custom_Recent_Comments_Widget');
}

add_action('widgets_init', 'register_custom_recent_comments_widget');





 ?>