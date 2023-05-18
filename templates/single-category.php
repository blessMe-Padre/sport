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
      <h1 class="title"><?php the_title();  ?></h1>
      <?php the_content();  ?>
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