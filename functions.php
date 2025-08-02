<?php

define( 'sprintcodes_VERSION', '0.0.9' );
add_theme_support( 'post-thumbnails' );

if (function_exists('add_image_size')) {
  add_image_size( 'small_thumbnail', 350, 200, true );
  add_image_size( 'small_thumbnail_vertical', 255, 340, true );
}

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Functions
require(get_template_directory() . '/functions/functions/scripts-footer.php' );
require(get_template_directory() . '/functions/functions/widgets.php' );
require(get_template_directory() . '/functions/functions/login-style.php' );
require(get_template_directory() . '/functions/functions/pagination.php' );

// ACF
require(get_template_directory() . '/functions/acf/scripts-header.php' );
require(get_template_directory() . '/functions/acf/scripts-footer.php' );
require(get_template_directory() . '/functions/acf/tutorial.php' );
require(get_template_directory() . '/functions/acf/config-page.php' );

// FAQ
require(get_template_directory() . '/functions/functions/custompost/faq.php' );

add_filter( 'use_widgets_block_editor', '__return_false' );

function isMobile() {
  return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
function add_additional_class_on_a($classes, $item, $args) {
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);