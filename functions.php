<?php 
/**
* Enqueue Stylesheet
*/

class Eshop_enqueue_style{

    /**
     * Enqueue style with Constuctor
     */
    function __construct(){
        add_action('wp_enqueue_scripts',array($this,'enqueue_style'));

    }


    /**
     * Register style
     */
    function enqueue_style(){
        wp_register_style('bootstrap-css',get_template_directory_uri()."/css/bootstrap.min.css");
        wp_enqueue_style('bootstrap-css');
        wp_register_style('fontawesome-css',get_template_directory_uri()."/css/font-awesome.min.css");
        wp_enqueue_style('fontawesome-css');
        wp_register_style('prettyPhoto-css',get_template_directory_uri()."/css/prettyPhoto.css");
        wp_enqueue_style('prettyPhoto-css');
        wp_register_style('price-range-css',get_template_directory_uri()."/css/price-range.css");
        wp_enqueue_style('price-range-css');
        wp_register_style('animate-css',get_template_directory_uri()."/css/animate.css");
        wp_enqueue_style('animate-css');
        wp_register_style('main-css',get_template_directory_uri()."/css/main.css");
        wp_enqueue_style('main-css');
        wp_register_style('responsive-css',get_template_directory_uri()."/css/responsive.css");
        wp_enqueue_style('responsive-css');
        wp_register_style('custom-css',get_template_directory_uri()."/css/Eshop-custom.css");
        wp_enqueue_style('custom-css');
    }
    
}
new Eshop_enqueue_style();

/**
 * Register Navigation Menu
 */

 class Eshop_nav_menu{

    function __construct(){
        add_action('after_setup_theme',array($this,'Eshop_menu_register'));
    }

        function Eshop_menu_register(){
            register_nav_menus(array(
                'primary_menu'=>__('Primary Menu','Eshop'),
                'service_menu'=>__('Service Menu','Eshop'),
                'quick_shop_menu'=>__('Quick Shop Menu','Eshop'),
                'policy_menu'=>__('Policy Menu','Eshop'),
                'about_shoper_menu'=>__('About Shoper Menu','Eshop')
                
            ));
        }
        

 }
 new Eshop_nav_menu();

 /**
  * Register Custom Widget
  */
  class Eshop_custom_sidebars{
       function __construct(){
        add_action('widgets_init',array($this,'Eshop_register_sidebars'));
       }

        function Eshop_register_sidebars() {
            /* Register the 'primary' sidebar. */
            register_sidebar(
                array(
                    'id'            => 'header-1',
                    'name'          => __( 'Header 1' ),
                    'description'   => __( 'A short description of the first header.' ),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h3 class="widget-title">',
                    'after_title'   => '</h3>'
                )
            );
            register_sidebar(
                array(
                    'id'            => 'header-2',
                    'name'          => __( 'Header 2' ),
                    'description'   => __( 'A short description of the first header.' ),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h3 class="widget-title">',
                    'after_title'   => '</h3>'
                )
            );
            register_sidebar(
                array(
                    'id'            => 'header-3',
                    'name'          => __( 'Header 3' ),
                    'description'   => __( 'A short description of the first header.' ),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h3 class="widget-title">',
                    'after_title'   => '</h3>'
                )
            );
            register_sidebar(
                array(
                    'id'            => 'header-4',
                    'name'          => __( 'Header 4' ),
                    'description'   => __( 'A short description of the first header.' ),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h3 class="widget-title">',
                    'after_title'   => '</h3>'
                )
            );
            register_sidebar(
                array(
                    'id'            => 'header-5',
                    'name'          => __( 'Header 5' ),
                    'description'   => __( 'A short description of the first header.' ),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h3 class="widget-title">',
                    'after_title'   => '</h3>'
                )
            );

}

}
  new Eshop_custom_sidebars();

  /**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function wporg_add_dashboard_widgets() {
    wp_add_dashboard_widget(
        'wporg_dashboard_widget',                          // Widget slug.
        esc_html__( 'Example Dashboard Widget', 'wporg' ), // Title.
        'wporg_dashboard_widget_render'                    // Display function.
    ); 
}
add_action( 'wp_dashboard_setup', 'wporg_add_dashboard_widgets' );
 
/**
 * Create the function to output the content of our Dashboard Widget.
 */
function wporg_dashboard_widget_render() {
    // Display whatever you want to show.
    esc_html_e( "Howdy! I'm a great Dashboard Widget.", "wporg" );
}