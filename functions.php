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
   * Createing a custom widgets
   */

class Eshop_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Footer_widget', // Base ID
			esc_html__( 'Eshop Menu Widget', 'Eshop' ), // Name
			array( 'description' => esc_html__( 'Eshop Widget', 'Eshop' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
    
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : '';
		$menu = ! empty( $instance['menu'] ) ? $instance['menu'] : '';
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'Eshop' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		<label for="<?php echo esc_attr( $this->get_field_id( 'menu' ) ); ?>"><?php esc_attr_e( 'Select Menu:', 'Eshop' ); ?></label> 
		<select class="widefat">
        
        <option value="">__Select Menu___</option>

        <?php
        $menus = get_registered_nav_menus();
        foreach($menus as $id => $name ){
            ?>
            <option id="<?php echo esc_attr( $this->get_field_id( 'menu' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'menu' ) ); ?>" value=""><?php echo $name; ?></option>
            
            <?php
        }
        ?>      
    
       </select>
		
        </p>

		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
		$instance['menu'] = ( ! empty( $new_instance['menu'] ) ) ? sanitize_text_field( $new_instance['menu'] ) : '';
		
		return $instance;
	}

} // class Foo_Widget  



function Eshop_register_widget(){
    register_widget('Eshop_Widget');
}
add_action('widgets_init','Eshop_register_widget');