<?php

class ThemeOption{
    // List of hook for Theme Option
    public function __construct()
    {
        add_action('admin_menu', [$this, 'theme_option_menu']);
        add_action( 'admin_post_nopriv_general_page_action', [$this,'process_general_page_data'] );
        add_action('admin_post_general_page_action', [$this,'process_general_page_data']);
       
        
    }
    
    // All page for Theme Option
    public function theme_option_menu()
    {
        add_menu_page('Eshop Woocommerce Theme', 'Eshop Option', 'manage_options', 'theme-option','', 'dashicons-admin-generic', 61); 
        
        add_submenu_page('theme-option', 'General', 'General', 'manage_options', 'general', [$this, 'general_page_form']);
        remove_submenu_page('theme-option', 'theme-option'); 
        
    }

   
    // HTML template for General Page
    public function general_page_form()
    {
        include_once 'general-page.php';
    }

    // CRUD functionality for General Page
    public function process_general_page_data()
    {  
    $preloader = $_POST['preloader'];
    global $wpdb;
    $table_name = 'eshop_general';
    $result = $wpdb->update($table_name, array('preloader' => $preloader),array('id'=>1));

    if($result === false) {
       
        //add_action('admin_notices', [$this, 'admin_error_notices']);
        wp_redirect(admin_url('admin.php?page=general&status=failed'));
    
    }else{

         
         //add_action('admin_notices', [$this, 'admin_success_notices']);
         wp_redirect(admin_url('admin.php?page=general&status=success'));
        
         
    }

    }


    public function admin_success_notices()
    {
        
        echo '<div class="notice notice-success is-dismissible"><p>Data saved successfully.</p></div>';
    }

    public function admin_error_notices()
    {
      
        echo '<div class="notice notice-error is-dismissible"><p>Error saving data.</p></div>';
    }
 






    
}//end class