<?php get_header('shop');?>

<div class="contaiiner">
    <div class="row">
        <div class="col-12">
        <?php
if ( have_posts() ) :
    // Start the loop.
    while ( have_posts() ) : the_post();
        // This is where you can display each product.
        // You can use functions like the_title(), the_content(), etc.
        ?>
        <div class="product">
            <h2><?php the_title(); ?></h2>
            <div class="product-content">
                <?php the_content(); ?>
            </div>
        </div>
        <?php
    // End the loop.
    endwhile;
else :
    // If no products are found, you can display a message.
    echo esc_html__( 'No products found', 'your-theme-textdomain' );
endif;
?>

        </div>
    </div>
</div>
<?php get_footer();?>
