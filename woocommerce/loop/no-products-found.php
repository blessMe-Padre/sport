<?php
/**
 * Displayed when no products are found matching the current query
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/no-products-found.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.0.0
 */

defined( 'ABSPATH' ) || exit;

?>
<p class="woocommerce-info woocommerce-no-products-found"><?php esc_html_e( 'No products were found matching your selection.', 'woocommerce' ); ?></p>


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
