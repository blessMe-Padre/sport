<?php 
/*
Template Name: Главная страница
*/
get_header(); 
?>

<main>
      <h1 class="visually-hidden">Classic sport - магазин спортивных товаров</h1>
      <section class="popular">
        <div class="container">
          <h2 class="title">топ категорий</h2>

          <div class="popular__slider">
            <ul class="popular__list swiper-wrapper">
              <?php
                $product_categories = get_terms( 'product_cat', ['hide_empty' => 0] );

                if ( ! empty( $product_categories ) && ! is_wp_error( $product_categories ) ) {
                    foreach ( $product_categories as $product_category ) {
                        $thumbnail_id = get_term_meta( $product_category->term_id, 'thumbnail_id', true ); 
                        $image = wp_get_attachment_url( $thumbnail_id ); 
                        echo '<li class="popular__item swiper-slide swiper-slide-active">';
                        echo '<a href="' . esc_url( get_term_link( $product_category ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $product_category->name ) ) . '">';
                        if ( $image ) {
                            echo '<img width="345" height="400" src="' . esc_url( $image ) . '">';
                        }
                        echo '<p class="popular__item-text">' . esc_html( $product_category->name ) . '</p>';
                        echo '</a>';
                        echo '</li>';
                    }
                }
                ?>
            </ul>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </section>

      <section class="main">
        <div class="container">
          <h2 class="title">Категории товаров</h2>
          <div class="main__wrapper">

          <nav class="main__list">
            <?php wp_nav_menu([
              'theme_location' => 'side',
              'container' => '',
              'menu_class' => '',
              'menu_id' => '',
              ]);
            ?>
            </nav>

			<div class="main__content">
			<ul class="main__content-list">
      <?php
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => -1
        );

        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) : $loop->the_post();
                global $product;
                echo '<li class="main__content-item category-card">';
                echo '<a class="category-card__wrapper" href="'.get_permalink().'">';
                echo '<div class="category-card__img">';
                echo woocommerce_get_product_thumbnail();
                echo '</div>';
                echo '<p class="category-card__text">'.get_the_title().'</p>';
                echo '<p class="category-card__price">'.$product->get_price_html().'</p>';
                echo '</a>';
                woocommerce_template_loop_add_to_cart( $loop->post, $product );
                echo '</li>';
            endwhile;
        } else {
            echo __( 'No products found' );
        }
        wp_reset_postdata();
        ?>

			</ul>
			</div>
          </div>
        </div>
      </section>
</main>

<?php get_footer(); ?>