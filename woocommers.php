<?php
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
add_theme_support( 'woocommerce' );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
add_theme_support('post-thumbnails', array('post', 'page', 'product'));
}

add_action( 'widgets_init', 'sport_widgets_init' );
function sport_widgets_init(){

	register_sidebar( array(
		'name'          => sprintf(__('сайдбар'), 'sport' ),
		'id'            => "sidebar-sport",
		'description'   => '',
		'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => "</li>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
		'before_sidebar' => '', // WP 5.6
		'after_sidebar'  => '', // WP 5.6
	) );
}

function get_category_products() {
    $category_id = $_POST['category_id'];
    
    $args = array(
        'post_type' => 'product',
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'terms' => $category_id,
            ),
        ),
    );
    
    $loop = new WP_Query($args);
    
    while ($loop->have_posts()) : $loop->the_post();
        global $product;
        
        echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
    endwhile;

    wp_reset_query();
    
    wp_die(); // this is required to terminate immediately and return a proper response
}

add_action('wp_ajax_get_category_products', 'get_category_products');
add_action('wp_ajax_nopriv_get_category_products', 'get_category_products');


function add_data_attributes_to_menu_links($atts, $item, $args) {
    if ($item->object == 'product_cat') {
        $atts['data-category-id'] = $item->object_id;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_data_attributes_to_menu_links', 10, 3);


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
