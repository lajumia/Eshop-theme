<?php

class RegisterScripts{

    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'register_scripts'));
        add_action('admin_enqueue_scripts', array($this,'enqueue_custom_theme_options_styles'));

    }
    
    // Enqueue Scripts and Style
    public function register_scripts()
    {
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array());
        wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.min.css', array());
        wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array());
        wp_enqueue_style('jquery.fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array());
        wp_enqueue_style('themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css', array());
        wp_enqueue_style('niceselect', get_template_directory_uri() . '/assets/css/niceselect.css', array());
        wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array());
        wp_enqueue_style('flex-slider', get_template_directory_uri() . '/assets/css/flex-slider.min.css', array());
        wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl-carousel.css', array());
        wp_enqueue_style('slicknav', get_template_directory_uri() . '/assets/css/slicknav.min.css', array());
        wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css', array());
        wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array());
        wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array());
        wp_enqueue_style('color1', get_template_directory_uri() . '/assets/css/color1.css', array());
  
        
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), true);
        wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array('jquery'), true);
        wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), true); 
        wp_enqueue_script('colors', get_template_directory_uri() . '/assets/js/colors.js', array('jquery'), true);
        wp_enqueue_script('slicknav', get_template_directory_uri() . '/assets/js/slicknav.min.js', array('jquery'), true);
        wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl-carousel.js', array('jquery'), true);
        wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array('jquery'), true);
        wp_enqueue_script('facnybox', get_template_directory_uri() . '/assets/js/facnybox.min.js', array('jquery'), true);
        wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), true);
        wp_enqueue_script('finalcountdown', get_template_directory_uri() . '/assets/js/finalcountdown.min.js', array('jquery'), true);
        wp_enqueue_script('niceselect', get_template_directory_uri() . '/assets/js/nicesellect.js', array('jquery'), true);
        wp_enqueue_script('ytplayer', get_template_directory_uri() . '/assets/js/ytplayer.min.js', array('jquery'), true);
        wp_enqueue_script('flex-slider', get_template_directory_uri() . '/assets/js/flex-slider.js', array('jquery'), true);
        wp_enqueue_script('scrollup', get_template_directory_uri() . '/assets/js/scrollup.js', array('jquery'), true);
        wp_enqueue_script('onepage-nav', get_template_directory_uri() . '/assets/js/onepage-nav.min.js', array('jquery'), true);
        wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/easing.js', array('jquery'), true);
        wp_enqueue_script('active', get_template_directory_uri() . '/assets/js/active.js', array('jquery'), true);

    }


    function enqueue_custom_theme_options_styles($hook) 
    {
        if ( isset( $_GET['page'] )) {
            // Enqueue Core Admin Styles
            wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array());

            wp_enqueue_style('eshop-admin', get_template_directory_uri() . '/includes/theme-options/css/to.css', array());
        }
           
    }
    



}