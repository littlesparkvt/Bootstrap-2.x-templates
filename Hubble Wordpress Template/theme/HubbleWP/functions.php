<?php
// I've included some basic functionality here just to save you some time from having to add all this yourself.

if ( !function_exists( 'optionsframework_init' ) ) {

/*-----------------------------------------------------------------------------------*/
/* Options Framework Theme
/*-----------------------------------------------------------------------------------*/

/* Set the file path based on whether the Options Framework Theme is a parent theme or child theme */

if ( STYLESHEETPATH == TEMPLATEPATH ) {
    define('OPTIONS_FRAMEWORK_URL', TEMPLATEPATH . '/admin/');
    define('OPTIONS_FRAMEWORK_DIRECTORY', get_bloginfo('template_directory') . '/admin/');
} else {
    define('OPTIONS_FRAMEWORK_URL', STYLESHEETPATH . '/admin/');
    define('OPTIONS_FRAMEWORK_DIRECTORY', get_bloginfo('stylesheet_directory') . '/admin/');
}

require_once (OPTIONS_FRAMEWORK_URL . 'options-framework.php');

}

// thumbnails
add_theme_support( 'post-thumbnails' );
// custom menus
add_theme_support( 'menus' );
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
// This theme uses wp_nav_menu() in one location.
    register_nav_menu( 'primary', __( 'Primary Menu', 'hubble' ) );
}
// registers the sidebar
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Sidebar',
'before_widget' => '<li class="widget">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widgettitle">',
'after_title' => '</h3>',
));
// A little credit on the dashboard footer... You can get rid of this or change it if you'd like. But if you feel like you want to support the creator, please leave it. I'd appreciate it. It's not like anyone is really going to see it anyways.
function remove_footer_admin () {
echo 'Fueled by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | Designed by <a href="http://www.littlesparkvt.com" target="_blank">Little Spark VT</a></p>';
}
add_filter('admin_footer_text', 'remove_footer_admin');
// enables threaded comments
function enable_threaded_comments(){
if (!is_admin()) {
if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
wp_enqueue_script('comment-reply');
}
}
add_action('get_header', 'enable_threaded_comments');



// PORTFOLIO

add_action( 'init', 'create_post_type' );
function create_post_type() {
register_post_type( 'portfolio',
array(
'labels' => array(
'name' => __( 'Portfolio' ),
'singular_name' => __( 'Portfolio' ),
'add_new' => _x('Add New Project', 'portfolio item'),
'add_new_item' => __('New Portfolio Project'),
'edit_item' => __('Edit Portfolio Project'),
'new_item' => __('New Portfolio Project'),
'view_item' => __('View Portfolio Project'),
'search_items' => __('Search Your Portfolio'),
'not_found' =>  __('Nothing found'),
'not_found_in_trash' => __('Nothing found in Trash'),
),
'public' => true,
'has_archive' => true,
'publicly_queryable' => true,
'show_ui' => true,
'query_var' => true,
'rewrite' => array('slug' => 'portfolio'),
'capability_type' => 'post',
'supports' => array('title','editor','thumbnail','comments','excerpt'),
'taxonomies' => array( 'category '),
'menu_icon' => get_stylesheet_directory_uri() . '/images/portfolio.png',
'can_export' => true,
)
);
}

register_taxonomy("projects", array("portfolio"), array("hierarchical" => true, "label" => "Project Category", "singular_label" => "Category: ", "rewrite" => true));

// SIDEBARS

if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'footer1',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
));
}

if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'footer2',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
));
}

if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'footer3',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
));
}

if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'footer4',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
));
}


//  Register a Custom Post Type (Slide) 
// add_action('init', 'slide_init');
// function slide_init() {
//     $labels = array(
//         'name' => _x('Slides', 'post type general name'),
//         'singular_name' => _x('Slide', 'post type singular name'),
//         'add_new' => _x('Add New', 'slide'),
//         'add_new_item' => __('Add New Slide'),
//         'edit_item' => __('Edit Slide'),
//         'new_item' => __('New Slide'),
//         'view_item' => __('View Slide'),
//         'search_items' => __('Search Slides'),
//         'not_found' => __('No slides found'),
//         'not_found_in_trash' => __('No slides found in Trash'), 
//         'parent_item_colon' => '',
//         'menu_name' => 'Slides'
//     );
//     $args = array(
//         'labels' => $labels,
//         'public' => true,
//         'publicly_queryable' => true,
//         'show_ui' => true, 
//         'show_in_menu' => true, 
//         'query_var' => true,
//         'rewrite' => true,
//         'capability_type' => 'post',
//         'has_archive' => true, 
//         'hierarchical' => false,
//         'menu_position' => null,
//         'supports' => array('title', 'editor', 'thumbnail')
//     ); 
//     register_post_type('slide', $args);
// }

// /* Update Slide Messages */
// add_filter('post_updated_messages', 'slide_updated_messages');
// function slide_updated_messages($messages) {
//     global $post, $post_ID;
//     $messages['slide'] = array(
//         0 => '',
//         1 => sprintf(__('Slide updated.'), esc_url(get_permalink($post_ID))),
//         2 => __('Custom field updated.'),
//         3 => __('Custom field deleted.'),
//         4 => __('Slide updated.'),
//         5 => isset($_GET['revision']) ? sprintf(__('Slide restored to revision from %s'), wp_post_revision_title((int) $_GET['revision'], false)) : false,
//         6 => sprintf(__('Slide published.'), esc_url(get_permalink($post_ID))),
//         7 => __('Slide saved.'),
//         8 => sprintf(__('Slide submitted.'), esc_url(add_query_arg('preview', 'true', get_permalink($post_ID)))),
//         9 => sprintf(__('Slide scheduled for: <strong>%1$s</strong>. '), date_i18n(__('M j, Y @ G:i'), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
//         10 => sprintf(__('Slide draft updated.'), esc_url(add_query_arg('preview', 'true', get_permalink($post_ID)))),
//     );
//     return $messages;
// }

// /* Update Slide Help */
// add_action('contextual_help', 'slide_help_text', 10, 3);
// function slide_help_text($contextual_help, $screen_id, $screen) {
//     if ('slide' == $screen->id) {
//         $contextual_help =
//         '<p>' . __('Things to remember when adding a slide:') . '</p>' .
//         '<ul>' .
//         '<li>' . __('Give the slide a title. The title will be used as the slide\'s headline.') . '</li>' .
//         '<li>' . __('Attach a Featured Image to give the slide its background.') . '</li>' .
//         '<li>' . __('Enter text into the Visual or HTML area. The text will appear within each slide during transitions.') . '</li>' .
//         '</ul>';
//     }
//     elseif ('edit-slide' == $screen->id) {
//         $contextual_help = '<p>' . __('A list of all slides appears below. To edit a slide, click on the slide\'s title.') . '</p>';
//     }
//     return $contextual_help;
// }


// if (function_exists('add_theme_support')) {
//     add_theme_support('post-thumbnails');
// }












/*
 * Helper function to return the theme option value. If no value has been saved, it returns $default.
 * Needed because options are saved as serialized strings.
 *
 * This code allows the theme to work without errors if the Options Framework plugin has been disabled.
 */
if ( !function_exists( 'of_get_option' ) ) {
function of_get_option($name, $default = false) {
    $optionsframework_settings = get_option('optionsframework');
    // Gets the unique option id
    $option_name = $optionsframework_settings['id'];
    if ( get_option($option_name) ) {
        $options = get_option($option_name);
    }
    if ( isset($options[$name]) ) {
        return $options[$name];
    } else {
        return $default;
    }
}

}




?>