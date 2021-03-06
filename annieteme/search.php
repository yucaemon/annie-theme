<?php /** *  Template Name: 検索ページ */ ?>
<?php include('head.php'); ?>
<body>
<div class='outer search-page'>
<?php include('components-php/header-sp.php'); ?>
<?php include('components-php/header03.php'); ?>
</div>
<div class='notice-bar'>
<?php
  global $wp_query;
  $total_results = $wp_query->found_posts;
  $search_query = get_search_query();
?>
</div>
<div class='outer__inner flexbox'>
<?php include('components-php/side-menu-list.php'); ?>
<div class='column-6 middle-contain'>
<ul class="article-list">
<?php if ( $total_results >0 ) : ?>
  <div class="search-content__header">
  　<i class="fa fa-search"></i>
  『<?php echo $search_query; ?>』の関連記事が<span>（<?php echo $total_results; ?>件）あります</span>
  </div>
<?php endif; ?>
<?php
if( $total_results >0 ):
if(have_posts()):
while(have_posts()): the_post();
?>
<li class='flexbox'>
  <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail( 'post-thumbnails', array('class' => 'article-list__img') ); ?>
  </a>
  <a href="<?php the_permalink(); ?>">
    <div class="article-list__text">
    <h3 class="list-title"><?php echo mb_substr($post->post_title, 0, 20).'…'; ?></h3>
    <p class='list-read'><?php echo mb_substr(strip_tags($post-> post_content),0,100) ; ?></p>
    </div>
  </a>
</li>
<?php endwhile; endif; else: ?>
『 <?php echo $search_query; ?> 』 に一致する情報は見つかりませんでした。
<?php endif; ?>
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
</body>
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
