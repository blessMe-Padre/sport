<!DOCTYPE html>
<html class="page" lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Classic sport">
  <title>
    <?php
			if(is_404()) {
				echo 'Ошибка 404';
			}
            if(is_category()) {
                single_cat_title('Рубрика: ');
            }
            else {
				the_title();
			}
		?>
    </title>
  <?php wp_head(); ?>
</head>

<body class="page__body">
  <div class="wrapper">
    <header class="header">
      <button class="button toggle-btn" area-lebel="меню" aria-expanded="false">
        <span></span>
      </button>
      <div class="container">
        <div class="header__wrapper">
          <div class="header__logo">Classic sport</div>
          <div class="header__search">
            <input type="search" placeholder="поиск по товарам">
            <button class="button header__search-btn" aria-label="поиск"><i class="icon-search"></i></button>
          </div>
          <div class="header__link">
            <i class="icon-phone"></i>
            <a class="link" href="tel:+88888888888">8-888-888-88-88</a>
          </div>
          <a href="#" class="header__cart">
            <div class="header__cart-wrapper"><span>450</span> &#8381 <i class="icon-basket"></i></div>
            <div class="cart-popup">
              <p>Корзина пуста</p>
            </div>
          </a>
        </div>
        <nav class="nav">
        <?php wp_nav_menu([
					'theme_location' => 'top',
					'container' => '',
					'menu_class' => '',
					'menu_id' => ''
				]);
				?>
        </nav>
      </div>
    </header>