<?php 
/*
Template Name: Главная страница
*/
get_header(); 
?>

<main>
      <h1 class="visually-hidden">Classic sport - магазин спортивных товаров</h1>
      <section class="sport">
            <h2 class="sport__title">все для спорта</h2>
      </section>
      <div class="page-wrapper container">
        <div class="page-wrapper__menu">
          <nav class="main__list main__list--main">
            <?php wp_nav_menu([
              'theme_location' => 'side',
              'container' => '',
              'menu_class' => '',
              'menu_id' => '',
               ]);
            ?>
          </nav>
        </div>
        <div class="page-wrapper__content">
          <section class="popular">
              <h2 class="title">Популярные товары</h2>

              <div class="popular__slider">
                <ul class="popular__list swiper-wrapper">
                  <?php
                    $args = array(
                      'post_type' => 'product',
                      'posts_per_page' => -1,
                      'tax_query' => array(
                        array(
                          'taxonomy' => 'product_tag',
                          'field'    => 'slug',
                          'terms'    => 'top',
                        ),
                      ),
                    );

                    $loop = new WP_Query( $args );

                    if ( $loop->have_posts() ) {
                        while ( $loop->have_posts() ) : $loop->the_post(); 
                            global $product; 
                            echo '<li class="popular__item swiper-slide">';
                            echo '<a href="' . get_permalink( $loop->post->ID ) . '" alt="' . $loop->post->post_title . '">';
                            echo '<div class="popular__item-img">';
                            if ( has_post_thumbnail( $loop->post->ID ) ) {
                                echo get_the_post_thumbnail( $loop->post->ID, 'shop_catalog' );
                            }
                            echo '</div>';
                            echo '<p class="popular__item-text">' . esc_html( $loop->post->post_title ) . '</p>';
                            echo '</a>';
                            echo '</li>';
                        endwhile;
                    } else {
                        echo __( 'No products found' );
                    }

                    wp_reset_postdata();
                  ?>
                </ul>
                <div class="swiper-pagination"></div>
              </div>
          </section>

          <section class="main">
              <h2 class="title">Категории товаров</h2>
              <ul class="main__content-list">
                  <?php
                      $parent_category = get_term_by( 'slug', 'top', 'product_cat' );

                      if ( ! empty( $parent_category ) && ! is_wp_error( $parent_category ) ) {
                          $product_categories = get_terms( 'product_cat', ['hide_empty' => 0, 'parent' => $parent_category->term_id] );
                          if ( ! empty( $product_categories ) && ! is_wp_error( $product_categories ) ) {
                              foreach ( $product_categories as $product_category ) {
                                  $thumbnail_id = get_term_meta( $product_category->term_id, 'thumbnail_id', true ); 
                                  $image = wp_get_attachment_url( $thumbnail_id ); 
                                  echo '<li class="main__content-item">';
                                  echo '<a href="' . esc_url( get_term_link( $product_category ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $product_category->name ) ) . '">';
                                  echo '<div class="main__content-img">';
                                  if ( $image ) {
                                      echo '<img width="345" height="400" src="' . esc_url( $image ) . '">';
                                  }
                                  echo '</div>';
                                  echo '<p class="">' . esc_html( $product_category->name ) . '</p>';
                                  echo '</a>';
                                  echo '</li>';
                              }
                          }
                      }
                    ?>
                </ul>

          </section>

          <section>
              <?php the_content(); ?>
          </section>
        </div>
      </div>
</main>

<?php get_footer(); ?>