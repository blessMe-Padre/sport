<?php
/*
Template Name: Выбранная категория
Template Post Type: post
*/
	get_header();
?>
<main>
  <section class="main">
    <div class="container">
      <h1 class="title">Выбранная категория</h1>
      <?php the_content();  ?>
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
            <!-- -------- -->
            <?php
              $my_posts = get_posts( array(
              'numberposts' => -1,
                'category' => 5,
                'orderby' => 'title',
                'order' => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true,
              ));

              foreach( $my_posts as $post ){
                setup_postdata( $post );
              ?>
              <li class="main__content-item product-card">
                <a href="<?php the_permalink(); ?>" class="product-card__wrapper">
                  <div class="product-card__img">
                    <?php the_post_thumbnail( '' );  ?>
                  </div>
                  <p class="product-card__text"><?php the_title(); ?></p>
                  <p class="product-card__price"><?php the_content(); ?></p>
                  <p class="product-card__description"><?php the_excerpt(); ?></p>
                </a>
              </li>
              <?php
                }
              wp_reset_postdata();
            ?>
           <!-- -------- -->
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>