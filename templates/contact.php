<?php
/*
Template Name: Контакты
*/
	get_header();
?>
    <main>
      <div class="container">
        <section class="contact">
          <h1 class="title"><?php the_title(); ?></h1>
                <?php the_content(); ?>
          <div>
            <iframe
              src="https://yandex.ru/map-widget/v1/?ll=131.891946%2C43.113649&mode=whatshere&whatshere%5Bpoint%5D=131.885828%2C43.114566&whatshere%5Bzoom%5D=16.39&z=16.39"
              width="100%" height="400" allowfullscreen="true" style="position:relative;"></iframe>
          </div>
        </section>
      </div>
    </main>
    <?php get_footer(); ?>