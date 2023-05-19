
<?php
	get_header();
?>
<main>
    <div class="container">
        <section class="main">
        <h1>Результаты поиска для: <?php echo get_search_query(); ?></h1>
            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Ничего не найдено.</p>
        <?php endif; ?>
            </section>
    </div>
</main>
<?php
	get_footer();
?>
