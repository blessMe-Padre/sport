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
              <li class="popular__item swiper-slide">
                <a href="">
                  <picture>
                    <source srcset="img/content/img-1@1x.webp 1x, img/content/img-1@2x.webp 2x" type="image/webp">
                    <source srcset="img/content/img-1@1x.jpg 1x, img/content/img-1@2x.jpg 2x" type="image/png">
                    <!-- 1х:250px; 2x: 500px -->
                    <img src="img/content/img-1@1x.jpg" width="250" height="400" srcset="img/content/img-1@2x.jpg 2x"
                      alt="спорт">
                  </picture>
                  <p class="popular__item-text">категория 1</p>
                </a>
              </li>
              <li class="popular__item swiper-slide">
                <a href="#">
                  <picture>
                    <source srcset="img/content/img-2@1x.webp 1x, img/content/img-2@2x.webp 2x" type="image/webp">
                    <source srcset="img/content/img-2@1x.jpg 1x, img/content/img-2@2x.jpg 2x" type="image/png">
                    <!-- 1х:250px; 2x: 500px -->
                    <img src="img/content/img-2@1x.jpg" width="250" height="400" srcset="img/content/img-2@2x.jpg 2x"
                      alt="спорт">
                  </picture>
                  <p class="popular__item-text">категория 2</p>
                </a>
              </li>
              <li class="popular__item swiper-slide">
                <a href="#">
                  <picture>
                    <source srcset="img/content/img-3@1x.webp 1x, img/content/img-3@2x.webp 2x" type="image/webp">
                    <source srcset="img/content/img-3@1x.jpg 1x, img/content/img-3@2x.jpg 2x" type="image/png">
                    <!-- 1х:250px; 2x: 500px -->
                    <img src="img/content/img-3@1x.jpg" width="250" height="400" srcset="img/content/img-3@2x.jpg 2x"
                      alt="спорт">
                  </picture>
                  <p class="popular__item-text">категория 1</p>
                </a>
              </li>
              <li class="popular__item swiper-slide">
                <a href="">
                  <picture>
                    <source srcset="img/content/img-4@1x.webp 1x, img/content/img-4@2x.webp 2x" type="image/webp">
                    <source srcset="img/content/img-4@1x.jpg 1x, img/content/img-4@2x.jpg 2x" type="image/png">
                    <!-- 1х:250px; 2x: 500px -->
                    <img src="img/content/img-4@1x.jpg" width="250" height="400" srcset="img/content/img-4@2x.jpg 2x"
                      alt="спорт">
                  </picture>
                  <p class="popular__item-text">категория 1</p>
                </a>
              </li>
              <li class="popular__item swiper-slide">
                <a href="">
                  <picture>
                    <source srcset="img/content/img-5@1x.webp 1x, img/content/img-5@2x.webp 2x" type="image/webp">
                    <source srcset="img/content/img-5@1x.jpg 1x, img/content/img-5@2x.jpg 2x" type="image/png">
                    <!-- 1х:250px; 2x: 500px -->
                    <img src="img/content/img-5@1x.jpg" width="250" height="400" srcset="img/content/img-5@2x.jpg 2x"
                      alt="спорт">
                  </picture>
                  <p class="popular__item-text">категория 1</p>
                </a>
              </li>
              <li class="popular__item swiper-slide">
                <a href="">
                  <picture>
                    <source srcset="img/content/img-6@1x.webp 1x, img/content/img-6@2x.webp 2x" type="image/webp">
                    <source srcset="img/content/img-6@1x.jpg 1x, img/content/img-6@2x.jpg 2x" type="image/png">
                    <!-- 1х:250px; 2x: 500px -->
                    <img src="img/content/img-6@1x.jpg" width="250" height="400" srcset="img/content/img-6@2x.jpg 2x"
                      alt="спорт">
                  </picture>
                  <p class="popular__item-text">категория 1</p>
                </a>
              </li>
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
                <li class="main__content-item category-card">
                  <a href="category.html" class="category-card__wrapper">
                    <div class="category-card__img">
                      <picture>
                        <source srcset="img/content/category-card.webp 1x, img/content/category-card@2x.webp 2x"
                          type="image/webp">
                        <source srcset="img/content/category-card.jpg 1x, img/content/category-card.jpg 2x"
                          type="image/png">
                        <!-- 1х:250px; 2x: 500px -->
                        <img src="img/content/category-card.jpg" width="250" height="250"
                          srcset="img/content/category-card@2x.jpg 2x" alt="спорт">
                      </picture>
                    </div>
                    <p class="category-card__text">Силовые установки</p>
                  </a>
                </li>
                <li class="main__content-item category-card">
                  <a href="category.html" class="category-card__wrapper">
                    <div class="category-card__img">
                      <picture>
                        <source srcset="img/content/category-card.webp 1x, img/content/category-card@2x.webp 2x"
                          type="image/webp">
                        <source srcset="img/content/category-card.jpg 1x, img/content/category-card.jpg 2x"
                          type="image/png">
                        <!-- 1х:250px; 2x: 500px -->
                        <img src="img/content/category-card.jpg" width="250" height="250"
                          srcset="img/content/category-card@2x.jpg 2x" alt="спорт">
                      </picture>
                    </div>
                    <p class="category-card__text">Силовые установки</p>
                  </a>
                </li>
                <li class="main__content-item category-card">
                  <a href="category.html" class="category-card__wrapper">
                    <div class="category-card__img">
                      <picture>
                        <source srcset="img/content/category-card.webp 1x, img/content/category-card@2x.webp 2x"
                          type="image/webp">
                        <source srcset="img/content/category-card.jpg 1x, img/content/category-card.jpg 2x"
                          type="image/png">
                        <!-- 1х:250px; 2x: 500px -->
                        <img src="img/content/category-card.jpg" width="250" height="250"
                          srcset="img/content/category-card@2x.jpg 2x" alt="спорт">
                      </picture>
                    </div>
                    <p class="category-card__text">Силовые установки</p>
                  </a>
                </li>
                <li class="main__content-item category-card">
                  <a href="category.html" class="category-card__wrapper">
                    <div class="category-card__img">
                      <picture>
                        <source srcset="img/content/category-card.webp 1x, img/content/category-card@2x.webp 2x"
                          type="image/webp">
                        <source srcset="img/content/category-card.jpg 1x, img/content/category-card.jpg 2x"
                          type="image/png">
                        <!-- 1х:250px; 2x: 500px -->
                        <img src="img/content/category-card.jpg" width="250" height="250"
                          srcset="img/content/category-card@2x.jpg 2x" alt="спорт">
                      </picture>
                    </div>
                    <p class="category-card__text">Силовые установки</p>
                  </a>
                </li>
                <li class="main__content-item category-card">
                  <a href="category.html" class="category-card__wrapper">
                    <div class="category-card__img">
                      <picture>
                        <source srcset="img/content/category-card.webp 1x, img/content/category-card@2x.webp 2x"
                          type="image/webp">
                        <source srcset="img/content/category-card.jpg 1x, img/content/category-card.jpg 2x"
                          type="image/png">
                        <!-- 1х:250px; 2x: 500px -->
                        <img src="img/content/category-card.jpg" width="250" height="250"
                          srcset="img/content/category-card@2x.jpg 2x" alt="спорт">
                      </picture>
                    </div>
                    <p class="category-card__text">Силовые установки</p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php get_footer(); ?>