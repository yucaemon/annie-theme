<?php include('head.php'); ?>
<body>
<div class='single-page outer'>
<?php include('components-php/header.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<div class='notice-bar'></div>
<div class='outer__inner'>
<div class='single__container flexbox--h-center'>
<div class='middle-contain'>
<div class='breadcrumb-container'>
<?php include('breadcrumb.php'); ?>
</div>
<h1 class='single-page__head-title'>
<?php the_title_attribute(); ?>
</h1>
<div class='flexbox--spacebetween single-page__detail'>
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
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
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
<div class='amazon-ad'>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- display-Horizontal-シングルページ記者名下 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8076392401031288"
     data-ad-slot="4410364590"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<?php include('components-php/article-sns-btns.php'); ?>
<?php include('components-php/related-article.php'); ?>
<?php include('components-php/this-page-tags.php'); ?>
<?php include('components-php/more-search-article.php'); ?>
<?php include('components-php/sns-box.php'); ?>
<?php include('components-php/shopping-box.php'); ?>
</div>
<div class='column-4 side-contain'>
<?php include('components-php/amazon-ad-sky.php'); ?>
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
<?php include('components-php/footer-sp.php'); ?>
