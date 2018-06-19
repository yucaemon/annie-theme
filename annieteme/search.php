<?php /** *  Template Name: 検索ページ */ ?>
<?php include('head.php'); ?>
<body>
<div class='outer'>
<?php include('components-php/header03.php'); ?>
<div class='archive-banner search-content flexbox--v-center'>
<h1 class='archive-banner__header'>
<?php
  global $wp_query;
  $total_results = $wp_query->found_posts;
  $search_query = get_search_query();
?>
『 <?php echo $search_query; ?> 』の検索結果<span>（<?php echo $total_results; ?>件）</span>
</h1>
</div>
<div class='outer__inner'>
<div class='flexbox--h-center'>
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
<a href="<?php the_permalink(); ?>">
<li class='flexbox'>
<?php the_post_thumbnail( 'post-thumbnails', array('class' => 'article-list__img') ); ?>
<div class="article-list__text">
<h3 class="list-title"><?php echo mb_substr($post->post_title, 0, 20).'…'; ?></h3>
<p class='list-read'><?php echo mb_substr(strip_tags($post-> post_content),0,100) ; ?></p>
</div>
</li>
</a>
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
</div>
</div>
</body>
<?php include('components-php/footer.php'); ?>
