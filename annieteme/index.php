<?php include('head.php'); ?>
<body>
<div class='outer'>
<?php include('components-php/header.php'); ?>
<h2 class='notice-bar'>
お知らせ：ショッピングサイト『アニー』OPEN!!! ファッションの街、ポートランドから日本へ現地の新商品を紹介。
</h2>
<div class='outer__inner flexbox--h-center'>
<?php include('components-php/side-menu-list.php'); ?>
<div class='column-6 middle-contain'>
<div class='bg-thumb-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/index-top-banner.png" width="478px">
</div>
<ul class='article-list'>
<?php $paged = get_query_var('paged')? get_query_var('paged') : 1; ?>
<?php $loop = new WP_Query(array('posts_per_page' => -1,'paged' => $paged,'post_type' => 'post')); ?>
<?php if($loop->have_posts()): while($loop->have_posts()): $loop->the_post(); ?>

     <li class='flexbox'>
      <div class='article-list__img'>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
      </div>
      <div class='article-list__text'>
        <h3 class='list-title'>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <p class='list-read'><?php echo mb_substr(strip_tags($post-> post_content),0,95) ; ?></p>
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

<?php endwhile; endif; ?>
<!-- ?php if(function_exists('wp_pagenavi')) { wp_pagenavi(array('query'=>$loop)); } ? -->
<?php wp_reset_postdata(); ?>
</ul>


















<!-- ul class='article-list'>
  <?php $args = array(
    'posts_per_page' => 1,                //表示（取得）する記事の数
    'post_type' => 'post'    //投稿タイプの指定
  );
  $posts = get_posts( $args );
    if( $posts ) : foreach( $posts as $post) : setup_postdata( $post ); ?>
        <li class='flexbox'>
          <div class='article-list__img'>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          </div>
          <div class='article-list__text'>
            <h3 class='list-title'>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <p class='list-read'><?php echo mb_substr(strip_tags($post-> post_content),0,95) ; ?></p>
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
    <?php endforeach; ?>


    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

    <?php else : //記事が無い場合 ?>
      <li><p>記事はまだありません。</p></li>
    <?php endif;
    wp_reset_postdata(); //クエリのリセット ?>
</ul -->
<?php include('components-php/sns-box.php'); ?>
<?php include('components-php/shopping-box.php'); ?>
</div>
<div class='column-4 side-contain'>
<?php include('components-php/featured-box.php'); ?>
<!--総合人気コンテンツは、ある程度、記事が集まってから表示する-->
<?php include('components-php/recommend-list.php'); ?>
<?php include('components-php/keywords.php'); ?>
<?php include('components-php/models-lists.php'); ?>
</div>
</div>
</div>
</body>
<?php include('components-php/footer.php'); ?>
