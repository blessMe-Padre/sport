<?php
 // правильный способ подключить стили и скрипты темы
 add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );

 // добавляет возможность выбрать кастомныи лого из админки
add_theme_support( 'custom-logo');

// добавляет возможность выбрать кастомныи лого из админки
add_theme_support( 'custom-logo');

// подключение и настройка меню через админку
add_action('after_setup_theme', 'add_menu');

// добавляет возможность выбрать img у записи(post) из админки
add_theme_support( 'post-thumbnails', array('post'));


 function theme_add_scripts() {

    // подключаем файл fontello.css
    wp_enqueue_style( 'fontello-css', get_template_directory_uri() . '/assets/css/fontello.css');

    // подключаем файл normalize.css
    wp_enqueue_style( 'normalize-css', get_template_directory_uri() . '/assets/css/normalize.css');

    // подключаем файл swiper-bundle.min.css
    wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/assets/css/swiper.scss');

    // подключаем основной файл стилей темы
    wp_enqueue_style( 'style', get_stylesheet_uri());

    //---------------------------------------------------------------------------------------------------------------------------------------------
    // подключаем js файл swiper-bundle.min.js
        wp_enqueue_script( 'swiper', get_template_directory_uri() .
        '/assets/js/swiper-bundle.min.js', false, null, 'footer' );

    // подключаем основной main.min.js файл
    wp_enqueue_script( '', get_template_directory_uri() .
    '/assets/js/main.min.js', false, null, 'footer' );
}

function add_menu() {
    register_nav_menu( 'top', 'главное меню сайта' );
    register_nav_menu( 'bottom', 'меню в футере' );
    register_nav_menu( 'side', 'сайд меню' );
}

if ( class_exists( 'WooCommerce' ) ) {
    require_once(get_template_directory() . '/woocommers.php');
    }

add_action('customize_register', 'dco_customize_register');
add_action('customize_register', 'dco_customize_register_header');

function dco_customize_register($wp_customize) {
    //FOOTER
    $wp_customize->add_section('footer', array(
        'title' => 'Слоган в подвале',
        'priority' => 1,
    ));
    
    //footer text
    $setting_name = 'footer_text';
    $wp_customize->add_setting($setting_name, array(
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage'
    ));
    
    $wp_customize->add_control($setting_name, array(
        'section' => 'footer',
        'type' => 'textarea',
        'label' => 'Текст в подвале',
    ));
    
    $wp_customize->selective_refresh->add_partial($setting_name, array(
       'selector' => '.footer-desc',
        'render_callback' => function() use ($setting_name) {
            return nl2br(get_theme_mod($setting_name));
        }
    ));
}


function dco_customize_register_header($wp_customize) {
    //header
        $wp_customize->add_section('header', array(
        'title' => 'Телефон на сайте',
        'priority' => 1,
    ));
    
    $setting_name = 'header_phone';
    $wp_customize->add_setting($setting_name, array(
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage'
    ));
    
    $wp_customize->add_control($setting_name, array(
        'section' => 'header',
        'type' => 'textarea',
        'label' => 'Номер телефона',
    ));
    
    $wp_customize->selective_refresh->add_partial($setting_name, array(
       'selector' => '.footer-desc',
        'render_callback' => function() use ($setting_name) {
            return nl2br(get_theme_mod($setting_name));
        }
    ));
}

?>