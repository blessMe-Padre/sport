<?php
/*
Template Name: карточка продукта
Template Post Type: post
*/
	get_header();
?>
        <main>
            <h1 class="visually-hidden">Наименование товара</h1>
            <section class="main">
                <div class="container">
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
                        <div class="main__content item-product">
                            <div class="product-gallery">
                                <?php $loop = CFS()->get('foto');
                                    foreach ($loop as $row ) {
                                ?>
                                    <a href="<?= $row['foto_item'] ?>">
                                        <img src="<?= $row['foto_item'] ?>" alt="Image caption">
                                    </a>
                                    <?php
                                    }
                                ?>
                            </div>
                            <div class="item-product__card">
                                <form action="#">
                                    <h2 class="title item-product__title"><?= CFS()->get('title') ?></h2>
                                    <p class="item-product__price"><span><?= CFS()->get('price') ?></span> руб.</p>
                                    <p class="item-product__descriptions"><?= CFS()->get('descriptions') ?></p>

                                    <div class="custom-select" data-select="data-select" data-validate-type="select"
                                        data-name="some-name" data-id="id-example-1" data-required="true"><span
                                            class="custom-select__error">Выберите тему обращения</span><span
                                            class="custom-select__placeholder">Выберите одну из опций</span>
                                        <button class="custom-select__button" type="button"
                                            aria-label="Выберите одну из опций"><span
                                                class="custom-select__text"></span><span
                                                class="custom-select__icon"></span></button>
                                        <ul class="custom-select__list" role="listbox">
                                            <li class="custom-select__item" tabindex="0" data-select-value="id-1"
                                                aria-selected="false" role="option">Красный</li>
                                            <li class="custom-select__item" tabindex="0" data-select-value="id-2"
                                                aria-selected="false" role="option">Синий</li>
                                            <li class="custom-select__item" tabindex="0" data-select-value="id-3"
                                                aria-selected="false" role="option">зеленый</li>
                                        </ul>
                                    </div>
                                    <div class="item-product__wrapper">
                                        <div class="counter">
                                            <button class="counter__btn counter__btn--minus"></button>
                                            <input class="counter__input" type="text" value="1" size="1" readonly>
                                            <button class="counter__btn counter__btn--plus"></button>
                                        </div>
                                        <button type="submit" class="item-product__btn">добавить в корзину</button>
                                    </div>
                                </form>
                                <table class="item-product__table">
                                    <caption>
                                        Характеристики
                                    </caption>
                                    <tbody>
                                        <?php $loop = CFS()->get('feature');
                                                foreach ($loop as $row ) {
                                                    ?>
                                            <tr>
                                                <td><?= $row['feature_title'] ?></td>
                                                <td><?= $row['feature_value'] ?></td>
                                            </tr>
                                                <?php
                                                }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php

	get_footer();
?>