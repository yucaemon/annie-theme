<?php include('head.php'); ?>
<body>
<div class='outer index'>
<?php include('components-php/header.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<div class='notice-bar'></div>
<div class='alternate-banner'></div>
<div class='outer__inner flexbox'>
<?php include('components-php/side-menu-list.php'); ?>
<div class='middle-contain'>
<div id='douga'>
<div class='douga'></div>
</div>
<ul class='post-lists article-list'>
  <?php $args = array(
    'posts_per_page' => 20,                //表示（取得）する記事の数
    'post_type' => 'post'    //投稿タイプの指定
  );
  $posts = get_posts( $args );
    if( $posts ) : foreach( $posts as $post) : setup_postdata( $post ); ?>
        <li class='flexbox'>
          <div class='post-lists__img article-list__img'>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          </div>
          <div class='post-lists__text article-list__text'>
            <h3 class='post-lists__title list-title'>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <p class='post-lists__read list-read'><?php echo mb_substr(strip_tags($post-> post_content),0,95) ; ?></p>
            <!-- div class='icons flexbox'>
              <div class='icons__tag'>
                購入可能
              </div>
              <div class='icons__tag'>
                日本未上陸
              </div>
            </div -->
          </div>
        </li>
    <?php endforeach; ?>


    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

    <?php else : //記事が無い場合 ?>
      <li><p>記事はまだありません。</p></li>
    <?php endif;
    wp_reset_postdata(); //クエリのリセット ?>
</ul>
<div class='more-page'>
<div class='more-page__btn big-btn'>
<a href="<?php echo esc_url( home_url( '/archive/' ) ); ?>">> 記事一覧ページへ</a>
</div>
</div>
<?php include('components-php/sns-box.php'); ?>
<?php include('components-php/shopping-box.php'); ?>
</div>
<div class='side-contain'>
<?php include('components-php/amazon-ad-sky.php'); ?>
<?php include('components-php/featured-box.php'); ?>
<?php include('components-php/recommend-list.php'); ?>
<?php include('components-php/keywords.php'); ?>
<?php include('components-php/models-lists.php'); ?>
<?php include('instagram-widget.php'); ?>
<?php include('chatbox.php'); ?>
</div>
</div>
</div>
</body>
　
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
