<?php include('head.php'); ?>
<body>
<div class='single-page outer'>
<header class='outer__header header'>
<div class='flexbox--spacebetween'>
<div class='sns-icons flexbox'>
<div class='sns-icons__icon'>
<a href="https://www.facebook.com/Annie-Jene-226289061241623/"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.svg"></a>
</div>
<div class='sns-icons__icon'>
<a href="https://twitter.com/bohostyle_love"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.svg"></a>
</div>
<div class='sns-icons__icon'>
<a href="https://www.instagram.com/annie_jene/"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram-icon.svg"></a>
</div>
</div>
<div class='info'>
<ul class='nav-menu flexbox'>
<li>
<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Annienについて</a>
</li>
<li>
ポートランドオレゴン州
</li>
</ul>
<div class='search__box'>
<div class='search__formvcft'>
<?php get_search_form(); ?>
</div>
</div>
</div>
</div>
<div class='logo'>
<div class='logo__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/annie-logo.svg" width="250">
</div>
</div>
</header>
<div class='notice-bar'>
お知らせ：ショッピングサイト『アニー』OPEN!!! ファッションの街、ポートランドから日本へ現地の新商品を紹介。
</div>
<div class='outer__inner'>
<div class='flexbox--h-center'>
<div class='column-8 middle-contain'>
<?php include('components-php/breadcrumb.php'); ?>
<h1 class='single-page__head-title'>
<?php the_title_attribute(); ?>
</h1>
<div class='flexbox--spacebetween'>
<div class='single-page__tags'>
<i class='fa fa-tag'></i>
<?php the_tags( '分類タグ : ',' 　' ); ?>
<span>
<?php $slug_name = basename(get_permalink()); ?>
</span>
</div>
<div class='single-page__dates'>
<i class='fa fa-clock-o'></i>
<?php the_time('Y/m/d'); ?>
</div>
</div>
<?php include('components-php/article-sns-btns.php'); ?>
<div class='single-page__eyecatch-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/single-img-top.png" width="644px">
</div>
<div class='single-page__entry-content'>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php the_content();?>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
</div>
<?php include('components-php/wrote-models-box.php'); ?>
<?php include('components-php/article-sns-btns.php'); ?>
<?php include('components-php/related-article.php'); ?>
<?php include('components-php/this-page-tags.php'); ?>
<?php include('components-php/more-search-article.php'); ?>
<?php include('components-php/sns-box.php'); ?>
<?php include('components-php/shopping-box.php'); ?>
</div>
<div class='column-4 side-contain'>
<?php include('components-php/featured-box.php'); ?>
<?php include('components-php/category-popular.php'); ?>
<?php include('components-php/news-list.php'); ?>
<?php include('components-php/items.php'); ?>
<?php include('components-php/keywords.php'); ?>
<?php include('components-php/models-lists.php'); ?>
<?php include('instagram-widget.php'); ?>
<?php include('chatbox.php'); ?>
</div>
</div>
</div>
</div>
</body>
<?php include('components-php/footer.php'); ?>
