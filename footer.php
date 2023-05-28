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
            <p class="footer__text"><?php echo nl2br(get_theme_mod('footer_text')); ?></p>
            <div class="social">
              <a href="tel:+79502812392">
                <i class="icon-phone"></i>
              </a>
              <a href="tel:+79502812392">
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