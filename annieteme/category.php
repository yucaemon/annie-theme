<?php /** *  Template Name: カテゴリーページ */ ?>
<?php include('head.php'); ?>
<body>
<div class='outer category-page'>
<?php include('components-php/header03.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<div class='notice-bar'></div>
<div class='outer__inner'>
<div class='flexbox--spacearound'>
<?php include('components-php/side-menu-list.php'); ?>
<div class='column-6 middle-contain'>
<h1 class='components-title'>
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
<div class="search-content__header">
『 <?php echo get_the_archive_title(); ?> 』の関連記事一覧
</div>
<ul class="article-list">
<?php
  $cat = get_the_category();
  $cat_name = $cat[0]->cat_name; // カテゴリー名
  $cat_slug  = $cat[0]->category_nicename; // カテゴリースラッグ
  $args = array(
    'post_type' => 'post', //投稿を表示
    'posts_per_page' => -1, //表示する件数
    'category_name' => $cat_slug,
  );
  $the_query = new WP_Query( $args );
  if ( $the_query->have_posts() ) :
  ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <li class='flexbox'>
            <?php if (has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>">
               <?php the_post_thumbnail( 'post-thumbnails', array('class' => 'article-list__img') ); ?>
              </a>
            <?php else : ?>
            <?php endif ; ?>
            <div class="article-list__text">
              <a href="<?php the_permalink(); ?>">
                <h3 class="list-title"><?php echo mb_substr($post->post_title, 0, 20).'…'; ?></h3>
               <p class='list-read'><?php echo mb_substr(strip_tags($post-> post_content),0,100) ; ?></p>
              </a>
            </div>
        </li>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
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
<?php include('chatbox.php'); ?>
</div>
</div>
</div>
</div>
</body>
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
