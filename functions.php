<?php 

/* --------------------------------------------------------------------------
 * REGISTRATION SETTINGS
 ---------------------------------------------------------------------------*/

//MENU REGISTRATIONS//
function menu_register() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}

add_action( 'init', 'menu_register' );

//SIDEBAR REGISTRATIONS//
function sidebar_register() {

  /* Register the primary sidebar. */
  register_sidebar(
    array(
      'id' => 'main-sidebar',
      'name' => __( 'Main Sidebar', 'textdomain' ),
      'description' => __( 'Main Theme Sidebar.', 'textdomain' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<div class="widget-title"><h3>',
      'after_title' => '</h3></div>'
    )
  );

  register_sidebar( 
    array(
        'name' => 'Footer Sidebar 1',
        'id' => 'footer-sidebar-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
         ) );

  register_sidebar( 
    array(
        'name' => 'Footer Sidebar 2',
        'id' => 'footer-sidebar-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
  
  register_sidebar( 
    array(
        'name' => 'Footer Sidebar 3',
        'id' => 'footer-sidebar-3',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );

  /* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'sidebar_register' );


/* --------------------------------------------------------------------------
 * STYLE REGISTRATIONS
 ---------------------------------------------------------------------------*/

 
function wpt_register_css() {

	 //Bootstrap Registration
    wp_register_style( 'bootstrap',  get_bloginfo( 'template_directory' ) . '/includes/css/bootstrap.css' );
    wp_enqueue_style( 'bootstrap' );


    //CSS Animation Registration
    wp_register_style( 'animate.css', get_bloginfo( 'template_directory' ) . '/includes/css/animate.css' );
    wp_enqueue_style( 'animate.css' );


	  // Font Registrations
    wp_register_style( 'google-font-playfair', '//fonts.googleapis.com/css?family=Lato:300,400,700|Arimo:400,700|Playfair+Display:400,400italic,700|Cookie' );
    wp_register_style( 'google-font-monsterrat', '//fonts.googleapis.com/css?family=Montserrat:400,700' );
    wp_register_style( 'google-font-kaushan', '//fonts.googleapis.com/css?family=Kaushan+Script' );
    wp_register_style( 'google-font-droid', '//fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' );
    wp_register_style( 'google-font-roboto', '//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' );
    wp_register_style( 'google-font-oswald', '//fonts.googleapis.com/css?family=Oswald%3A300%2C400%2C700&#038;subsets=latin%2Clatin&#038;ver=4.4' );
    wp_register_style( 'font-icons', get_bloginfo( 'template_directory' ) . '/includes/css/font-icons.css' , array('google-font-monsterrat', 'google-font-kaushan', 'google-font-droid', 'google-font-roboto', 'google-font-oswald' ) );

    wp_enqueue_style( 'font-icons' );

    // Slider Revolutions 5.x CSS
    wp_register_style( 'rss-settings', get_bloginfo( 'template_directory' ) . '/includes/rs-plugin/css/settings.css' );
    wp_register_style( 'rss-layers', get_bloginfo( 'template_directory' ) . '/includes/rs-plugin/css/layers.css' );
    wp_register_style( 'rss-navigation', get_bloginfo( 'template_directory' ) . '/includes/rs-plugin/css/navigation.css' );
    

    // Theme Style Registrations
    wp_register_style( 'master-style', get_bloginfo( 'template_directory' ) . '/includes/css/master-style.css' );
    wp_register_style( 'dark.css', get_bloginfo( 'template_directory' ) . '/includes/css/dark.css' );
    wp_register_style( 'custom-style', get_bloginfo( 'template_directory' ) . '/includes/css/custom-style.css', array( 'rss-settings', 'rss-layers', 'rss-navigation', 'master-style', 'dark.css' ) );
    wp_enqueue_style( 'custom-style' );
}


add_action( 'wp_enqueue_scripts', 'wpt_register_css' );


/* --------------------------------------------------------------------------
 * SCRIPT REGISTRATIONS
 ---------------------------------------------------------------------------*/

function wpt_register_js() {
    //Bootstrap JS
    wp_register_script('jquery.bootstrap.min', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array( 'jquery' ), '3.3.5', true );
    wp_enqueue_script('jquery.bootstrap.min');

    // Slider Revolutions 5.x Core JS
    wp_register_script('themepunch.tools', get_bloginfo( 'template_directory' ) . '/includes/rs-plugin/js/jquery.themepunch.tools.min.js' );
    wp_register_script('themepunch.revolution', get_bloginfo( 'template_directory' ) . '/includes/rs-plugin/js/jquery.themepunch.revolution.min.js');

    // Slider Revolutions 5.x Extensions JS
    wp_register_script('extension.video', get_bloginfo( 'template_directory' ) . '/includes/rs-plugin/js/extensions/revolution.extension.video.min.js');
    wp_register_script('extension.slideanims', get_bloginfo( 'template_directory' ) . '/includes/rs-plugin/js/extensions/revolution.extension.slideanims.min.js');
    wp_register_script('extension.actions', get_bloginfo( 'template_directory' ) . '/includes/rs-plugin/js/extensions/revolution.extension.actions.min.js');
    wp_register_script('extension.layeranimation', get_bloginfo( 'template_directory' ) . '/includes/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js');
    wp_register_script('extension.kenburn', get_bloginfo( 'template_directory' ) . '/includes/rs-plugin/js/extensions/revolution.extension.kenburn.min.js');
    wp_register_script('extension.navigation', get_bloginfo( 'template_directory' ) . '/includes/rs-plugin/js/extensions/revolution.extension.navigation.min.js');
    wp_register_script('extension.migration', get_bloginfo( 'template_directory' ) . '/includes/rs-plugin/js/extensions/revolution.extension.migration.min.js');
    wp_register_script('extension.parallax', get_bloginfo( 'template_directory' ) . '/includes/rs-plugin/js/extensions/revolution.extension.parallax.min.js', array( 'themepunch.tools', 'themepunch.revolution', 'extension.video', 'extension.slideanims', 'extension.actions', 'extension.layeranimation', 'extension.kenburn', 'extension.navigation', 'extension.migration') );
    wp_enqueue_script('extension.parallax');

  
    //Custom Theme JS Script
    wp_register_script('vc-plugins.js', get_bloginfo( 'template_directory' ) . '/includes/js/vc-plugins.js' );
    wp_register_script('theme-scripts', get_bloginfo( 'template_directory' ) . '/includes/js/vc-functions.js', array( 'jquery', 'vc-plugins.js'), '1.0.0', true );
    wp_enqueue_script('theme-scripts');
}

add_action( 'init', 'wpt_register_js' );


/* --------------------------------------------------------------------------
 * ADMIN PANEL SETTINGS
 ---------------------------------------------------------------------------*/
 

require_once( dirname( __FILE__ ) . '/includes/admin/admin-init.php' );

function _gop( $option_name ) {
    global $vc_base;

    return isset( $vc_base[ $option_name ] ) ? $vc_base[ $option_name ] : null;
}

function wpt_enqueue_custom_admin_options_css() {
    wp_register_style(
        'redux-custom-css',
        get_bloginfo( 'template_directory' ) . '/includes/css/admin.css',
        array( 'redux-admin-css' ), // Be sure to include redux-admin-css so it's appended after the core css is applied
        '1.0.0',
        'all'
    );  
    wp_enqueue_style('redux-custom-css');
}

// This example assumes your opt_name is set to redux_demo, replace with your opt_name value
add_action( 'redux/page/vc_base/enqueue', 'wpt_enqueue_custom_admin_options_css' );

// function wpt_print_custom_styles(){
//   include( dirname( __FILE__ ) . '/includes/custom-styles.php' );
// }
// add_action( 'wp_head', 'wpt_print_custom_styles', 100 );

/* --------------------------------------------------------------------------
 * CUSTOM THEME FUNCTIONS
 ---------------------------------------------------------------------------*/

function vc_render_theme_header( $type = 'default-header', $extra_params = array() ) {
  $template = locate_template( array( 'template-parts/headers/' . $type . '.php' ) );
  if ( ! $template ) {
    $template = locate_template( array( 'template-parts/headers/default-header.php' ) );
    if ( ! $template ) {
      return;
    }
  }

  $menu_args = array(
    'theme_location' => 'header-menu',
  );

  include $template;
}

function vc_render_theme_slider( $type = 'default-slider', $extra_params = array() ) {
  $template = locate_template( array( 'template-parts/sliders/' . $type . '.php' ) );
  if ( ! $template ) {
    $template = locate_template( array( 'template-parts/sliders/default-slider.php' ) );
    if ( ! $template ) {
      return;
    }
  }

  include $template;
}


function vc_setup_theme(){
  add_theme_support( 'post-thumbnails', array( 'post' ) );

  add_image_size( 'vc-blog-thumbnail', 258, 169, true );
}
add_action( 'after_setup_theme', 'vc_setup_theme' );

function vc_breadcrum_category( $post_id ) {
    $category = get_the_category();
    echo '<a href="' . esc_url( get_category_link( $category[0]->term_id ) ) . '" rel="category">'.esc_html( $category[0]->name ) . '</a>';
}


if ( !function_exists('vc_post_categories') ) {

  function vc_post_categories( $post_id ) {

    $categories = get_the_category();
              if ( ! empty( $categories ) ) {
                foreach($categories as $category){
                      echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" rel="category">'.esc_html( $category->name ) . '</a>';
                }
              }

  }
}
