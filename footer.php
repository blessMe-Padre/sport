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
            <p class="footer__text">Classic Sport - все для спорта</p>
            <address>
              г. Владивосток ул. уткинская 9 кв. 8
            </address>
            <div class="social">
              <a href="tel:+88888888888">
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