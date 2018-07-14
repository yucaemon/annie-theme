<div class='featured-box'>
<div class='featured-box__content'>
<?php $args = array(
  'numberposts' => 1,                //表示（取得）する記事の数
  'post_type' => 'featured'    //投稿タイプの指定
);
$posts = get_posts( $args );
if( $posts ) : foreach( $posts as $post) : setup_postdata( $post ); ?>
  <h3 class="featured-box__header">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h3>
  <div class="featured-img">
    <?php if ( has_post_thumbnail() ) : ?>
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    <?php endif; ?>
  </div>
  <p class="featured-box__read">
    <a href="<?php the_permalink(); ?>"><?php echo mb_substr(strip_tags($post-> post_content),0,200) ; ?></a>
  </p>
<?php endforeach; ?>
<?php else : //記事が無い場合 ?>
  <li><p>記事はまだありません。</p></li>
<?php endif;
wp_reset_postdata(); //クエリのリセット ?>
</div>
</div>
