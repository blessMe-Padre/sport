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
    // подключаем файл baguetteBox.css
    wp_enqueue_style( 'baguetteBox-css', get_template_directory_uri() . '/assets/css/baguetteBox.min.css');

    // подключаем файл fontello.css
    wp_enqueue_style( 'fontello-css', get_template_directory_uri() . '/assets/css/fontello.css');

    // подключаем файл fonts.css
    wp_enqueue_style( 'fonts-css', get_template_directory_uri() . '/assets/css/fonts.css');

    // подключаем файл normalize.css
    wp_enqueue_style( 'normalize-css', get_template_directory_uri() . '/assets/css/normalize.css');

    // подключаем файл swiper-bundle.min.css
    wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');

    // подключаем основной файл стилей темы
    wp_enqueue_style( 'style', get_stylesheet_uri());

    //---------------------------------------------------------------------------------------------------------------------------------------------

    // подключаем js файл baguetteBox
      wp_enqueue_script( 'baguetteBox', get_template_directory_uri() .
        '/assets/js/baguetteBox.min.js', false, null, 'footer' );

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
?>