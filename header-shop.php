<!DOCTYPE html>
<html lang="zxx">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="copyright" content>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Eshop - eCommerce HTML5 Template.</title>
<!-- <script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-migrate-3.0.0.js"></script> -->
<link rel="icon" type="image/png" href="images/favicon.png">

<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">


<link rel="stylesheet" href="#" id="colors">
<?php wp_head();?>
</head>
<body <?php body_class(); ?>>

<?php
    global $wpdb;

    $table_name = 'eshop_general';

    $results = $wpdb->get_results( "SELECT preloader FROM $table_name" );

    foreach ( $results as $result ) {
        
        if($result->preloader == 1){
            echo '<div class="preloader">
            <div class="preloader-inner">
            <div class="preloader-icon">
            <span></span>
            <span></span>
            </div>
            </div>
            </div>';
        }
        }
        

?>

<!-- <div class="preloader">
<div class="preloader-inner">
<div class="preloader-icon">
<span></span>
<span></span>
</div>
</div>
</div> -->


<div class="color-plate ">
<a class="color-plate-icon"><i class="ti-paint-bucket"></i></a>
<h4>Eshop Colors</h4>
<p>Here is some awesome color's available on Eshop Template.</p>
<span class="color1"></span>
<span class="color2"></span>
<span class="color3"></span>
<span class="color4"></span>
<span class="color5"></span>
<span class="color6"></span>
<span class="color7"></span>
<span class="color8"></span>
<span class="color9"></span>
<span class="color10"></span>
<span class="color11"></span>
<span class="color12"></span>
</div>


<header class="header shop">

<div class="topbar">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-12 col-12">

<div class="top-left">
<ul class="list-main">
<li><i class="ti-headphone-alt"></i> +060 (800) 801-582</li>
<li><i class="ti-email"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7e0d0b0e0e110c0a3e0d16110e160b1c501d1113">[email&#160;protected]</a></li>
</ul>
</div>

</div>
<div class="col-lg-6 col-md-12 col-12">

<div class="right-content">
<ul class="list-main">
<li><i class="ti-location-pin"></i> Store location</li>
<li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li>
<li><i class="ti-user"></i> <a href="#">My account</a></li>
<li><i class="ti-power-off"></i><a href="login.html#">Login</a></li>
</ul>
</div>

</div>
</div>
</div>
</div>

<div class="middle-inner">
<div class="container">
<div class="row">
<div class="col-lg-2 col-md-2 col-12">

<div class="logo">
<a href="index.html"><img src="images/logo.png" alt="logo"></a>
</div>


<div class="search-top">
<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>

<div class="search-top">
<form class="search-form">
<input type="text" placeholder="Search here..." name="search">
<button value="search" type="submit"><i class="ti-search"></i></button>
</form>
</div>

</div>

<div class="mobile-nav"></div>
</div>
<div class="col-lg-8 col-md-7 col-12">
<div class="search-bar-top">
<div class="search-bar">
<select>
<option selected="selected">All Category</option>
<option>watch</option>
<option>mobile</option>
<option>kid’s item</option>
</select>
<form>
<input name="search" placeholder="Search Products Here....." type="search">
<button class="btnn"><i class="ti-search"></i></button>
</form>
</div>
</div>
</div>
<div class="col-lg-2 col-md-3 col-12">
<div class="right-bar">

<div class="sinlge-bar">
<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
</div>
<div class="sinlge-bar">
<a href="#" class="single-icon"><i class="ti-user"></i></a>
</div>
<div class="sinlge-bar shopping">
<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">2</span></a>

<div class="shopping-item">
<div class="dropdown-cart-header">
<span>2 Items</span>
<a href="#">View Cart</a>
</div>
<ul class="shopping-list">
<li>
<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
<a class="cart-img" href="#"><img src="images/product-1.jpg" alt="#"></a>
<h4><a href="#">Woman Ring</a></h4>
<p class="quantity">1x - <span class="amount">$99.00</span></p>
</li>
<li>
<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
<a class="cart-img" href="#"><img src="images/product-2.jpg" alt="#"></a>
<h4><a href="#">Woman Necklace</a></h4>
<p class="quantity">1x - <span class="amount">$35.00</span></p>
</li>
</ul>
<div class="bottom">
<div class="total">
<span>Total</span>
<span class="total-amount">$134.00</span>
</div>
<a href="checkout.html" class="btn animate">Checkout</a>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>

<div class="header-inner">
<div class="container">
<div class="cat-nav-head">
<div class="row">


<div class="col-lg-9 col-12">
<div class="menu-area">

<nav class="navbar navbar-expand-lg">
<div class="navbar-collapse">
<div class="nav-inner">
<ul class="nav main-menu menu navbar-nav">
<li class="active"><a href="#">Home<i class="ti-angle-down"></i></a>
<ul class="dropdown">
<li><a href="index.html">Home Ecommerce V1</a></li>
<li><a href="index2.html">Home Ecommerce V2</a></li>
<li><a href="index3.html">Home Ecommerce V3</a></li>
<li><a href="index4.html">Home Ecommerce V4</a></li>
</ul>
</li>
<li><a href="#">Product</a></li>
<li><a href="#">Service</a></li>
<li><a href="#">Shop<i class="ti-angle-down"></i><span class="new">New</span></a>
<ul class="dropdown">
<li><a href="shop-grid.html">Shop Grid</a></li>
<li><a href="shop-list.html">Shop List</a></li>
<li><a href="shop-single.html">shop Single</a></li>
<li><a href="cart.html">Cart</a></li>
<li><a href="checkout.html">Checkout</a></li>
</ul>
</li>
<li><a href="#">Pages<i class="ti-angle-down"></i></a>
<ul class="dropdown">
<li><a href="about-us.html">About Us</a></li>
<li><a href="login.html">Login</a></li>
<li><a href="register.html">Register</a></li>
<li><a href="mail-success.html">Mail Success</a></li>
<li><a href="404.html">404</a></li>
</ul>
</li>
<li><a href="#">Blog<i class="ti-angle-down"></i></a>
<ul class="dropdown">
<li><a href="blog-grid.html">Blog Grid</a></li>
<li><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
<li><a href="blog-single.html">Blog Single</a></li>
<li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
</ul>
</li>
<li><a href="contact.html">Contact Us</a></li>
</ul>
</div>
</div>
</nav>

</div>
</div>
</div>
</div>
</div>
</div>

</header>
