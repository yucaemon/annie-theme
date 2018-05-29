<?php /** *  Template Name: 一覧ページ */ ?>
<?php include('head.php'); ?>
<body>
<div class='outer'>
<?php include('components-php/header.php'); ?>
<div class='archive-banner'>
<h1 class='archive-banner__header'>
<?php echo get_the_archive_title(); ?> に関する記事一覧
</h1>
<?php if ( is_category( 'lifestyle' ) ) : ?>
  <div class="archive-banner__keyword">
    <div class="keywords">
      <ul class="archive-banner__lists">
        <li class="archive-banner__list"><a href="<?php echo get_tag_link(83); ?>">雑貨</a></li>
        <li class="archive-banner__list"><a href="<?php echo get_tag_link(83); ?>">ガーデニング</a></li>
        <li class="archive-banner__list"><a href="<?php echo get_tag_link(83); ?>">DIY</a></li>
        <li class="archive-banner__list"><a href="<?php echo get_tag_link(83); ?>">ライフスタイル</a></li>
    </div>
  </div>
<?php endif; ?>
　
</div>
<div class='outer__inner flexbox--h-center flexbox--spacearound'>
<?php include('components-php/side-menu-list.php'); ?>
<div class='column-6 middle-contain'>
<ul class='article-list'>
<li class='flexbox'>
<div class='article-list__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/sample1.png">
</div>
<div class='article-list__text'>
<h3 class='list-title'>
bohoスタイルの火付け役『アンソロジー』のゆるふあチェックカーデが可愛い。
</h3>
<p class='list-read'>
ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。
</p>
<div class='icons flexbox'>
<div class='icons__tag'>
購入可能
</div>
<div class='icons__tag'>
日本未上陸
</div>
</div>
</div>
</li>
<li class='flexbox'>
<div class='article-list__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/sample2.png">
</div>
<div class='article-list__text'>
<h3 class='list-title'>
bohoスタイルの火付け役『アンソロジー』のゆるふあチェックカーデが可愛い。
</h3>
<p class='list-read'>
ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。
</p>
<div class='icons flexbox'>
<div class='icons__tag'>
購入可能
</div>
<div class='icons__tag'>
日本未上陸
</div>
</div>
</div>
</li>
<li class='flexbox'>
<div class='article-list__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/sample3.png">
</div>
<div class='article-list__text'>
<h3 class='list-title'>
bohoスタイルの火付け役『アンソロジー』のゆるふあチェックカーデが可愛い。
</h3>
<p class='list-read'>
ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。
</p>
<div class='icons flexbox'>
<div class='icons__tag'>
購入可能
</div>
<div class='icons__tag'>
日本未上陸
</div>
</div>
</div>
</li>
<li class='flexbox'>
<div class='article-list__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/sample1.png">
</div>
<div class='article-list__text'>
<h3 class='list-title'>
bohoスタイルの火付け役『アンソロジー』のゆるふあチェックカーデが可愛い。
</h3>
<p class='list-read'>
ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。
</p>
<div class='icons flexbox'>
<div class='icons__tag'>
購入可能
</div>
<div class='icons__tag'>
日本未上陸
</div>
</div>
</div>
</li>
<li class='flexbox'>
<div class='article-list__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/sample2.png">
</div>
<div class='article-list__text'>
<h3 class='list-title'>
bohoスタイルの火付け役『アンソロジー』のゆるふあチェックカーデが可愛い。
</h3>
<p class='list-read'>
ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。
</p>
<div class='icons flexbox'>
<div class='icons__tag'>
購入可能
</div>
<div class='icons__tag'>
日本未上陸
</div>
</div>
</div>
</li>
<li class='flexbox'>
<div class='article-list__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/sample3.png">
</div>
<div class='article-list__text'>
<h3 class='list-title'>
bohoスタイルの火付け役『アンソロジー』のゆるふあチェックカーデが可愛い。
</h3>
<p class='list-read'>
ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。
</p>
<div class='icons flexbox'>
<div class='icons__tag'>
購入可能
</div>
<div class='icons__tag'>
日本未上陸
</div>
</div>
</div>
</li>
<li class='flexbox'>
<div class='article-list__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/sample1.png">
</div>
<div class='article-list__text'>
<h3 class='list-title'>
bohoスタイルの火付け役『アンソロジー』のゆるふあチェックカーデが可愛い。
</h3>
<p class='list-read'>
ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。
</p>
<div class='icons flexbox'>
<div class='icons__tag'>
購入可能
</div>
<div class='icons__tag'>
日本未上陸
</div>
</div>
</div>
</li>
<li class='flexbox'>
<div class='article-list__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/sample2.png">
</div>
<div class='article-list__text'>
<h3 class='list-title'>
bohoスタイルの火付け役『アンソロジー』のゆるふあチェックカーデが可愛い。
</h3>
<p class='list-read'>
ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。
</p>
<div class='icons flexbox'>
<div class='icons__tag'>
購入可能
</div>
<div class='icons__tag'>
日本未上陸
</div>
</div>
</div>
</li>
<li class='flexbox'>
<div class='article-list__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/sample3.png">
</div>
<div class='article-list__text'>
<h3 class='list-title'>
bohoスタイルの火付け役『アンソロジー』のゆるふあチェックカーデが可愛い。
</h3>
<p class='list-read'>
ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。ここ人は本文が入ります。
</p>
<div class='icons flexbox'>
<div class='icons__tag'>
購入可能
</div>
<div class='icons__tag'>
日本未上陸
</div>
</div>
</div>
</li>
</ul>
<?php include('components-php/more-search-article.php'); ?>
<?php include('components-php/sns-box.php'); ?>
<?php include('components-php/shopping-box.php'); ?>
</div>
<div class='column-4 side-contain'>
<?php include('components-php/featured-box.php'); ?>
<?php include('components-php/news-list.php'); ?>
<?php include('components-php/keywords.php'); ?>
<?php include('components-php/models-lists.php'); ?>
</div>
</div>
</div>
</body>
<?php include('components-php/footer.php'); ?>
