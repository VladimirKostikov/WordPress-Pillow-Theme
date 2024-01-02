<?php


function pillow_assets() {

    // CSS styles
    wp_enqueue_style('pillow-theme-all', get_template_directory_uri() . '/assets/css/all.css');
    wp_enqueue_style('pillow-theme-animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('pillow-theme-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('pillow-theme-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('pillow-theme-flaticon', get_template_directory_uri() . '/assets/css/flaticon.css');
    wp_enqueue_style('pillow-theme-icons', get_template_directory_uri() . '/assets/css/themify-icons.css');
    wp_enqueue_style('pillow-theme-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style('pillow-theme-slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('pillow-theme-style', get_template_directory_uri() . '/assets/css/style.css');


    // JS Scripts
    wp_enqueue_script('pillow-theme-jquery', get_template_directory_uri() . '/assets/js/jquery-1.12.1.min.js');
    wp_enqueue_script('pillow-theme-ajax', get_template_directory_uri() . '/assets/js/jquery.ajaxchimp.min.js');
    wp_enqueue_script('pillow-theme-form', get_template_directory_uri() . '/assets/js/jquery.form.js');
    wp_enqueue_script('pillow-theme-validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js');
    wp_enqueue_script('pillow-theme-mail', get_template_directory_uri() . '/assets/js/mail-script.js');
    wp_enqueue_script('pillow-theme-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
    wp_enqueue_script('pillow-theme-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js');
    wp_enqueue_script('pillow-theme-slick', get_template_directory_uri() . '/assets/js/slick.min.js');
    wp_enqueue_script('pillow-theme-carousel', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js');
    wp_enqueue_script('pillow-theme-waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js');
    wp_enqueue_script('pillow-theme-contacts', get_template_directory_uri() . '/assets/js/contact.js');
    wp_enqueue_script('pillow-theme-magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js');
    wp_enqueue_script('pillow-theme-custom', get_template_directory_uri() . '/assets/js/custom.js');
}

add_action('wp_enqueue_scripts', 'pillow_assets');

show_admin_bar(false);


require_once('carbon/options.php');


add_action( 'after_setup_theme', 'theme_menu_main' );

function theme_menu_main() {
	register_nav_menu( 'menu_main_header', 'Main menu in header' );
}


function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
 }
 add_filter('wp_nav_menu','add_menuclass');