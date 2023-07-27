<?php
//Add style URL
function custom_link(){
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' );
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js');


}

add_action('wp_enqueue_scripts', 'custom_link');



//Add menu
function register_my_menu()
{
    register_nav_menus(
        array(
            'header-menu-one' => __('Header Menu One'),
            'header-menu-two' => __('Header Menu Two'),
            'footer-menu' => __('Footer Menu'),

        )
    );
}
add_action('init', 'register_my_menu');


// Support Image
add_theme_support('post-thumbnails');

//Add Logo
function theme_name_custom_logo_setup() {
    $defaults = array(
        'flex-height' => true,
        'flex-width'  => true,
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'theme_name_custom_logo_setup' );

function wpb_widgets_init() {

    register_sidebar( array(
        'name' => __( 'Member Themplate', 'wpb' ),
        'id' => 'member-themplate',
    ) );

    register_sidebar( array(
        'name' =>__( 'Front page sidebar', 'wpb'),
        'id' => 'sidebar-2',
        'description' => __( 'Appears on the static front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}

add_action( 'widgets_init', 'wpb_widgets_init' );


// Publications Post Type
function create_books_post_type() {
    $labels = array(
        'name' => 'Publications',
        'singular_name' => 'Publication',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Publication',
        'edit_item' => 'Edit Publication',
        'new_item' => 'New Publication',
        'view_item' => 'View Publication',
        'search_items' => 'Search Publications',
        'not_found' => 'No publications found',
        'not_found_in_trash' => 'No publications found in trash',
        'parent_item_colon' => 'Parent Publication:',
        'menu_name' => 'Publications',
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Custom post type for publications',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'publications'),
        'menu_icon' => 'dashicons-book',
    );

    register_post_type('publication', $args);
}
add_action('init', 'create_books_post_type');


add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

    /* Register dynamic sidebar 'new_sidebar' */

    register_sidebar(
        array(
            'id' => 'posts',
            'name' => __( 'Posts' ),
        )
    );

    /* Repeat the code pattern above for additional sidebars. */

}