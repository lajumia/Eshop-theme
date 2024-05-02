<?php 


class Eshop_Woo{

	public function __construct(){
        add_action( 'after_setup_theme', array( $this, 'eshop_add_woocommerce_support' ) );
        add_filter('woocommerce_breadcrumb_defaults', array($this, 'eshop_woo_breadcrumbs'));
        remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);
        remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
        remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
        add_filter('woocommerce_show_page_title','__return_false');
        add_filter('woocommerce_loop_add_to_cart_link', array($this, 'eshop_add_to_cart'),10,2);
        remove_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_thumbnail',10);
        remove_action('woocommerce_before_shop_loop_item_title','woocommerce_show_product_loop_sale_flash',10);
        add_action('woocommerce_before_shop_loop_item_title', array($this, 'eshop_product_thumbnail'), 10, 2);
        remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
        add_action('woocommerce_shop_loop_item_title', array($this, 'eshop_product_title'), 11);  
        //add_filter( 'loop_shop_columns', array($this,'custom_woocommerce_loop_columns', 999) );
        // remove_action( 'woocommerce_before_shop_loop', 'woocommerce_product_loop_start', 1 );
        // remove_action( 'woocommerce_after_shop_loop', 'woocommerce_product_loop_end', 1 );
        // add_action('woocommerce_before_shop_loop', array($this, 'custom_woocommerce_product_loop_start'), 10);
        // add_action('woocommerce_after_shop_loop', array($this, 'custom_woocommerce_product_loop_end'), 10);

		
	}
    public function eshop_add_woocommerce_support() {
        //Add WoocCommerce theme support to our theme
        add_theme_support( 'woocommerce' );
        // To enable gallery features add WooCommerce Product zoom effect, lightbox and slider support to our theme
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
    }

    public function eshop_woo_breadcrumbs() {

        return array(
            'delimiter'   => ' &#8594 ',
            'wrap_before' => '<ul class="bread-list">',
            'wrap_after'  => '</ul>',
            'before'      => '<li>',
            'after'       => '</li>',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
    }

    public function eshop_add_to_cart($button,$product){

        $product_id = $product->get_id();

    // Custom HTML for the button
    $button = sprintf(
        '
        <div class="button-head">
                           <div class="product-action">
                              <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                              <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                              <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                           </div>
                           <div class="product-action-2">
                              <a title="Add to cart"  href="%s" data-product_id="%s">Add to cart</a>
                           </div>
        </div>',
        esc_url( $product->add_to_cart_url() ),
        esc_attr( $product_id )
    );
    return $button;
    }


     public function eshop_product_thumbnail(){
        
        global $product;
        $product_id = $product->get_id();
        $product_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );
        $attachment_ids = $product->get_gallery_image_ids();
        $product_gallery_url = wp_get_attachment_image_src($attachment_ids[0], 'single-post-thumbnail');
        // wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );
        // print_r($attachment_ids[0]);   


        echo '<a href="product-details.html" previewlistener="true">
        <img class="default-img" src="'.$product_image_url[0] .'" alt="#">
        <img class="hover-img" src="'.$product_gallery_url[0].'" alt="#">
        </a>

       ';
     }

     public function eshop_product_title(){
        echo '<h3>'. get_the_title() .'</h3>';
     }





    





    
    
	
	
}// main class end








