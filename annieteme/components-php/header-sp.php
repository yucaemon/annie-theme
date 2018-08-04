<header class='outer__header header-sp'>
<div class='flexbox--spacebetween'>
<div class='drawer drawer--left'>
<btn class='drawer-toggle drawer-hamburger'>
<i class='fa fa-align-justify'></i>
</btn>
<div class='drawer-nav'>
<div class='drawer-nav__title'>
<i class='fa fa-list-ul'></i>
カテゴリーから探す
</div>
<ul class='drawer-menu'>
<li class='drawer-menu__li'>
<a href="<?php bloginfo('url'); ?>/category/fashion/">ファション</a>
</li>
<li class='drawer-menu__li'>
<a href="<?php bloginfo('url'); ?>/category/gourmet/">お出かけ/グルメ</a>
</li>
<li class='drawer-menu__li'>
<a href="<?php bloginfo('url'); ?>/category/lifestyle/">ライフ/DIY</a>
</li>
<li class='drawer-menu__li'>
<a href="<?php bloginfo('url'); ?>/category/cosmetics/">美容/コスメ</a>
</li>
</ul>
<div class='drawer-nav__title'>
<i class='fa fa-heart'></i>
アイテムから探す
</div>
<ul class='drawer-menu'>
<li class='drawer-menu__li'>
<a href="<?php bloginfo('url'); ?>/tag/tops/">トップス</a>
</li>
<li class='drawer-menu__li'>
<a href="<?php bloginfo('url'); ?>/tag/bottoms/">ボトムス</a>
</li>
<li class='drawer-menu__li'>
<a href="<?php bloginfo('url'); ?>/tag/dresses/">ドレス</a>
</li>
<li class='drawer-menu__li'>
<a href="<?php bloginfo('url'); ?>/tag/accessories/">アクセサリー</a>
</li>
<li class='drawer-menu__li'>
<a href="<?php bloginfo('url'); ?>/tag/lingerie/">ランジェリー</a>
</li>
</ul>
<div class='drawer-nav__title'>
<i class='fa fa-bookmark'></i>
ブランドから探す
</div>
<ul class='drawer-menu'>
<li class='drawer-menu__li'>
<a href="<?php bloginfo('url'); ?>/tag/genuineeople/">genuine People</a>
</li>
</ul>
</div>
</div>
<div class='search'>
<btn class='search-icon'>
<i class='fa fa-search'></i>
</btn>
<div class='search__box textArea'>
<div class='search__form'>
<?php get_search_form(); ?>
</div>
</div>
</div>
</div>
<div class='logo'>
<div class='logo__img'>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/annie-logo.svg" width="250"></a>
</div>
</div>
</header>
