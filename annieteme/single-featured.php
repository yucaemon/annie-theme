<?php include('head.php'); ?>
<body>
<div class='single-page outer'>
<?php include('components-php/header.php'); ?>
<h2 class='notice-bar'>
お知らせ：ショッピングサイト『アニー』OPEN!!! ファッションの街、ポートランドから日本へ現地の新商品を紹介。
</h2>
<ul class='breadcrumb'>
<li>
シングルページ(特集)
</li>
</ul>
<div class='outer__inner flexbox--h-center'>
<div class='column-8 middle-contain'>
<h1 class='single-page__head-title'>
<?php the_title_attribute(); ?>
</h1>
<div class='flexbox--spacebetween'>
<div class='single-page__tags'>
<!-- %i.fa.fa-tag -->
<span>
<?php $slug_name = basename(get_permalink()); ?>
</span>
</div>
<div class='single-page__dates'>
<i class='fa fa-clock-o'></i>
<?php the_time('Y/m/d'); ?>
</div>
</div>
<div class='flexbox--spacebetween'>
<div class='article-sns-btns flexbox'>
<img src="<?php echo get_template_directory_uri(); ?>/images/facebook-btn.svg">
<img src="<?php echo get_template_directory_uri(); ?>/images/twitter-btn.svg">
<img src="<?php echo get_template_directory_uri(); ?>/images/poket-btn.svg">
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
</div>
<?php include('components-php/wrote-models-box.php'); ?>
<?php include('components-php/article-sns-btns.php'); ?>
<?php include('components-php/featured_articles.php'); ?>
<?php include('components-php/more-search-article.php'); ?>
<?php include('components-php/sns-box.php'); ?>
<?php include('components-php/shopping-box.php'); ?>
</div>
<div class='column-4 side-contain'>
<?php include('components-php/featured-box.php'); ?>
<?php include('components-php/recommend-list.php'); ?>
<?php include('components-php/news-list.php'); ?>
<?php include('components-php/items.php'); ?>
<?php include('components-php/keywords.php'); ?>
<?php include('components-php/models-lists.php'); ?>
</div>
</div>
</div>
</body>
<?php include('components-php/footer.php'); ?>
