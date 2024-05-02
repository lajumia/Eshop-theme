<?php
// Create table on theme activation
add_action("after_switch_theme", "mytheme_create_extra_table");

function mytheme_create_extra_table(){
    global $wpdb;
    $prefix = "eshop_";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

    $table_name = $prefix . "general";  //get the database table prefix to create my new table

    if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name)
    {
        $sql = "CREATE TABLE IF NOT EXISTS $table_name (
            id int(10) unsigned NOT NULL AUTO_INCREMENT,
            preloader TINYINT(1) DEFAULT 0,
            PRIMARY KEY  (id)
      
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
      
          dbDelta( $sql );
      
          $initial_data = array(
              'preloader' => '1'
              // Add more columns and data as needed
          );
      
          $wpdb->insert( $table_name, $initial_data );
    }
}