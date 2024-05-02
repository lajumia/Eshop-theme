<?php

// Script for register css and js 
include 'includes/scripts-register/register-scripts.php';
new RegisterScripts();

// Script for Theme Option
include 'includes/theme-options/theme-options.php';
new ThemeOption();

// Script for database
include 'includes/scripts-register/register-db.php';

// Script for woocommerce support
include 'includes/scripts-register/register-woocommerce.php';
new Eshop_Woo();


