<?php

class ThemeOption{

    public function __construct()
    {
        add_action('admin_menu', [$this, 'theme_option_menu']);
        
    }

    public function theme_option_menu()
    {
        add_menu_page('Eshop Woocommerce Theme', 'Eshop Option', 'manage_options', 'theme-option','', 'dashicons-admin-generic', 61);  
        add_submenu_page('theme-option', 'General', 'General', 'manage_options', 'general', [$this, 'general_page']);
        remove_submenu_page('theme-option', 'theme-option');
    }

   

    public function general_page()
    {
        include_once 'general-page.php';
    }
 






    
}