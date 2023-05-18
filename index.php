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
              <!-- ------------------------------------- -->
              <?php
                $my_posts = get_posts( array(
                'numberposts' => -1,
                  'category' => 6,
                  'orderby' => 'title',
                  'order' => 'ASC',
                  'post_type'   => 'post',
                  'suppress_filters' => true,
                ) );

                foreach( $my_posts as $post ){
                  setup_postdata( $post );
                ?>

              <li class="popular__item swiper-slide">
                  <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail( '' );  ?>
                  <p class="popular__item-text"><?php the_title(); ?></p>
                  </a>
                  </li>
                <?php
                  }
                wp_reset_postdata();
              ?>

              <!-- ------------------------------------- -->
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
                'menu_id' => ''
              ]);
              ?>
            </nav>
            <div class="main__content">
              <ul class="main__content-list">
                <!-- ------------------------------------ -->
                <?php
                    $my_posts = get_posts( array(
                    'numberposts' => -1,
                      'category' => 4,
                      'orderby' => 'title',
                      'order' => 'ASC',
                      'post_type'   => 'post',
                      'suppress_filters' => true,
                    ) );

                    foreach( $my_posts as $post ){
                      setup_postdata( $post );
                    ?>
                    <!--  -->
                    <li class="main__content-item category-card">
                      <a href="<?php the_permalink(); ?>" class="category-card__wrapper">
                        <div class="category-card__img">
                        <?php the_post_thumbnail( '' );  ?>
                        </div>
                        <p class="category-card__text"><?php the_title(); ?></p>
                      </a>
                    </li>
                      <!--  -->
                    <?php
                      }
                    wp_reset_postdata();
                  ?>
                <!-- ------------------------------------ -->
              </ul>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php get_footer(); ?>