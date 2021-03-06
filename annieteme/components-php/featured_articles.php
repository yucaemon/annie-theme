<div class='articles featured-articles'>
<div class='featured-articles__title components-title'>
過去の特集記事の一覧はこちら
</div>
<?php
$posts = get_posts(array(
'posts_per_page' => 12, // 表示件数
'post_type'=> 'featured'
));
?>
<div class="featured-articles__container flexbox">
  <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
      <!--表示する内容が入ります。-->
      <div class="featured-articles__content">
        <div class="featured-articles__img">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        </div>
        <div class="featured-articles__text">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
      </div>
      <!--表示する内容ここまで-->
  <?php endforeach; endif; ?>
 </div>
</div>
