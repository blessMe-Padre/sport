<footer class="footer">
      <div class="container">
        <div class="footer__wrapper">
          <nav class="footer__column footer__nav">
            <?php wp_nav_menu([
            'theme_location' => 'bottom',
            'container' => '',
            'menu_class' => '',
            'menu_id' => ''
          ]);
          ?>
        </nav>
          <div class="footer__column">
            <p class="footer__text"><?php the_field('slogan'); ?></p>
            <address>
            <?php the_field('address'); ?>
            </address>
            <div class="social">
              <a href="tel:<?php the_field('phone-robot'); ?>">
                <i class="icon-phone"></i>
              </a>
              <a href="tel:tel:+88888888888">
                <i class="icon-whatsapp"></i>
              </a>
              <a href="#">
                <i class="icon-instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script src="js/main.min.js"></script>
  <?php wp_footer(); ?>
</body>

</html>