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
             <ul class="main__list">
              <!-- для корректной работы вложенных списков необходимо им дать класс "main__sub-list"(поддерживает любую вложенность) -->
              <li>
                <a href="#">Бассейн</a>
                <ul class="main__sub-list">
                  <li>
                    <a href="#">ссылка вложенная 1</a>
                  </li>
                  <li>
                    <a href="#">ссылка вложенная 2</a>
                  </li>
                  <li>
                    <a href="#">ссылка вложенная 3</a>
                  </li>
                  <li>
                    <a href="#">ссылка вложенная4</a>
                    <ul class="main__sub-list">
                      <li>
                        <a href="#">ссылка вложенная 1</a>
                      </li>
                      <li>
                        <a href="#">ссылка вложенная 2</a>
                      </li>
                      <li>
                        <a href="#">ссылка вложенная 3</a>
                      </li>
                      <li>
                        <a href="#">ссылка вложенная4</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">Единоборства</a>
              </li>
              <li>
                <a href="#">Маски</a>
              </li>
              <li>
                <a href="#">Обувь для спорта</a>
              </li>
              <li>
                <a href="#">Одежда</a>
              </li>
              <li>
                <a href="#">Футбол</a>
              </li>
              <li>
                <a href="#">Фитнес</a>
              </li>
              <li>
                <a href="#">Хоккей</a>
              </li>
              <li>
                <a href="#">Единоборства</a>
              </li>
              <li>
                <a href="#">Маски</a>
              </li>
              <li>
                <a href="#">Обувь для спорта</a>
              </li>
              <li>
                <a href="#">Одежда</a>
              </li>
              <li>
                <a href="#">Футбол</a>
              </li>
              <li>
                <a href="#">Фитнес</a>
              </li>
              <li>
                <a href="#">Хоккей</a>
              </li>
            </ul>
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