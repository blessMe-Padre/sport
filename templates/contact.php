<?php
/*
Template Name: Контакты
*/
	get_header();
?>
    <main>
      <div class="container">
        <section class="contact">
          <h1 class="title">Контакты</h1>
          <p>Classic sport - Магазин спортивных товаров</p>
          <ul class="contact__list">
            <li class="contact__item">
              Адрес: г. Владивосток ул. Светнанская 88 бутик 15-15
            </li>
            <li class="contact__item">
              Режим работы: ПН-ВС 10:00-18:00
            </li>
            <li class="contact__item">
              Телефон: <a href="tel:+88888888">8-888-888-88-88</a>
            </li>
            <li class="contact__item">
              Email: <a href="mailto:name@yandex.ru">name@yandex.ru</a>
            </li>
          </ul>

          <div>
            <iframe
              src="https://yandex.ru/map-widget/v1/?ll=131.891946%2C43.113649&mode=whatshere&whatshere%5Bpoint%5D=131.885828%2C43.114566&whatshere%5Bzoom%5D=16.39&z=16.39"
              width="100%" height="400" allowfullscreen="true" style="position:relative;"></iframe>
          </div>
        </section>
      </div>
    </main>
    <?php get_footer(); ?>