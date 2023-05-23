<?php
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
add_theme_support( 'woocommerce' );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
add_theme_support('post-thumbnails', array('post', 'page', 'product'));
}

add_action('wp_ajax_get_category_products', 'get_category_products');
add_action('wp_ajax_nopriv_get_category_products', 'get_category_products');

// страница товара
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta ');

// удаляет сайдбар со страницы товара
add_action( 'wp', 'bbloomer_remove_sidebar_product_pages' );
function bbloomer_remove_sidebar_product_pages() {
if ( is_product() ) {
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
}
if ( is_tax() ) {
    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
    }
}
