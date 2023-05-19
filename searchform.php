<form class="header__search" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
    <label class="screen-reader-text" for="s">Поиск: </label>
    <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="поиск по товарам" />
    <button class="button header__search-btn" type="submit" id="searchsubmit" value="найти">
    <i class="icon-search"></i>
    </button>
</form>
