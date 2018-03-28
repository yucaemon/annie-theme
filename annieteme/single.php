<?php include('head.php'); ?>
<body>
<div class='single-page outer'>
<?php include('components-php/header.php'); ?>
<h2 class='notice-bar'>
お知らせ：ショッピングサイト『アニー』OPEN!!! ファッションの街、ポートランドから日本へ現地の新商品を紹介。
</h2>
<ul class='breadcrumb'>
<li>
シングルページ
</li>
</ul>
<div class='outer__inner flexbox--h-center'>
<div class='column-8 middle-contain'>
<h1 class='single-page__head-title'>
<?php the_title_attribute(); ?>
</h1>
<div class='Published-brands-category'>
掲載ブランド :
<span>
<?php $slug_name = basename(get_permalink()); ?>
</span>
</div>
<div class='flexbox--spacebetween'>
<div class='article-sns-btns flexbox'>
<img src="<?php echo get_template_directory_uri(); ?>/images/facebook-btn.svg">
<img src="<?php echo get_template_directory_uri(); ?>/images/twitter-btn.svg">
<img src="<?php echo get_template_directory_uri(); ?>/images/poket-btn.svg">
</div>
<div class='dates'>
<?php the_time('Y/m/d'); ?>
</div>
</div>
<div class='single-page__eyecatch-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/single-img-top.png" width="644px">
</div>
<div class='single-page__entry-content'>
<?php
$this_content= wpautop($post->post_content);
echo $this_content;
?>
<h2 class='headline-second'>
未上陸ブランドを購入しよう！冬の『BOHO』ファッション特集
</h2>
<img src="<?php echo get_template_directory_uri(); ?>/images/instagram-pic-test1.png">
<div class='detail-box01'>
<div class='detail-box01__title'>
お店の名前
</div>
<div class='detail-box01__contain'>
住所
<a>
5114 SE OGDEN PORTLAND 97206
<i class='fa fa-external-link'></i>
</a>
<br>
WEBサイト
<a>
http://hatchstudioinc.com/
<i class='fa fa-external-link'></i>
</a>
</div>
</div>
<h3 class='headline-third'>
h3-『boho』スタイルとは。
</h3>
<p>
本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１
本文１本文１本文１本文１本文１本文１本文１本文１本文１本本文１本文１本文
１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文
１本文１本文１本文１本文１本文１本文１本本文１本文１本文１本文１本文１本
文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本
文１本文１本文１本文１本
</p>
<div class='detail-box02 flexbox'>
<div class='detail-box02__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/link-box.png">
</div>
<div class='detail-box02__txt'>
＞関連記事リンク
<div class='detail-box02__title'>
<a>
関連記事タイトルタイトルタイトルタイトルタイトルタイトル
<i class='fa fa-external-link'></i>
</a>
</div>
<div class='detail-box02__read'>
関連記事の本文の本文の本文の本文の本文の本文の本文の本文の本文の本文関連記事の本文の本文の本文の本文の本文の本文の本文の本文の本文の
</div>
</div>
</div>
<h3 class='headline-third'>
h3-『boho』スタイルとは。
</h3>
<p>
本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１
本文１本文１本文１本文１本文１本文１本文１本文１本文１本本文１本文１本文
１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文
１本文１本文１本文１本文１本文１本文１本本文１本文１本文１本文１本文１本
文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本
文１本文１本文１本文１本
</p>
<img src="<?php echo get_template_directory_uri(); ?>/images/single-img-top.png" width="644px">
<p>
本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１
本文１本文１本文１本文１本文１本文１本文１本文１本文１本本文１本文１本文
１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文
１本文１本文１本文１本文１本文１本文１本本文１本文１本文１本文１本文１本
文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本
文１本文１本文１本文１本
</p>
<div class='detail-box03 flexbox'>
<div class='detail-box03__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/product-test1.png">
</div>
<div class='detail-box03__txt'>
<div class='detail-box03__title'>
<i class='fa fa-angle-right'></i>
SPELL ANGELS TANK
</div>
<div class='detail-box03__price'>
¥8500円
</div>
<div class='detail-box03__brand'>
spelldesigns
<i class='fa fa-external-link'></i>
</div>
<div class='detail-box03__read'>
本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１
本文１本文１本文１本文１本文１本文１本文１本文１本文１本本文１本文１本文
１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文
１本文１本文１本文１本文１本文１本文１本本文１本文１本文１本文１本文１本
文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本
文１本文１本文１本文１本
</div>
<div class='flexbox--spacebetween'>
<div class='detail-box03__shipping'>
日本発送可能
</div>
<div class='detail-box03__similar-products'>
<i class='fa fa-arrow-right'></i>
類似の商品をもっと探す
</div>
</div>
<div class='detail-box03__btn'>
この商品を購入する
</div>
</div>
</div>
<div class='detail-box03 flexbox'>
<div class='detail-box03__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/product-test2.png">
</div>
<div class='detail-box03__txt'>
<div class='detail-box03__title'>
<i class='fa fa-angle-right'></i>
DUSK BOILER
</div>
<div class='detail-box03__price'>
¥18500円
</div>
<div class='detail-box03__brand'>
spelldesigns
</div>
<div class='detail-box03__read'>
本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１
本文１本文１本文１本文１本文１本文１本文１本文１本文１本本文１本文１本文
１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文
１本文１本文１本文１本文１本文１本文１本本文１本文１本文１本文１本文１本
文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本
文１本文１本文１本文１本
</div>
<div class='flexbox--spacebetween'>
<div class='detail-box03__shipping'>
日本発送可能
</div>
<div class='detail-box03__similar-products'>
<i class='fa fa-arrow-right'></i>
類似の商品をもっと探す
</div>
</div>
<div class='detail-box03__btn'>
♡この商品欲しい (1)
</div>
<div class='detail-box03__btn-subtxt'>
５以上のクリックで販売開始を検討します。
</div>
</div>
</div>
<p>
本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１
本文１本文１本文１本文１本文１本文１本文１本文１本文１本本文１本文１本文
１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文
１本文１本文１本文１本文１本文１本文１本本文１本文１本文１本文１本文１本
文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本文１本
文１本文１本文１本文１本
</p>
<?php include('components-php/wrote-models-box.php'); ?>
</div>
<?php include('components-php/article-sns-btns.php'); ?>
<?php include('components-php/related-article.php'); ?>
<?php include('components-php/more-search-article.php'); ?>
<?php include('components-php/sns-box.php'); ?>
<?php include('components-php/shopping-box.php'); ?>
</div>
<div class='column-4 side-contain'>
<?php include('components-php/featured-box.php'); ?>
<?php include('components-php/news-list.php'); ?>
<?php include('components-php/items.php'); ?>
<?php include('components-php/keywords.php'); ?>
<?php include('components-php/models-lists.php'); ?>
</div>
</div>
</div>
</body>
<?php include('components-php/footer.php'); ?>
