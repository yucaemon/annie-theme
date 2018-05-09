<div  class="related-article">
<?php
    global $post_id;    //グローバル変数より投稿IDをゲット
    global $tags;       //グローバル変数よりタグ情報をゲット
    $relatedpost_count = 0; //関連記事を出力した数(カウンタ)
    $relatedpost_max = 9;   //関連記事を出力する最大数
    $related_taglist = [];  //関連記事を出力する為のタグリスト

    //記事からタグを集める
    foreach( $tags as $tag ):   //記事に含まれるタグの数だけ繰り返し
        $related_taglist[] = $tag -> term_id;    //タグIDをリスト配列に追加
    endforeach;

    $args = array(              //出力用セッティング
      'post__not_in'=> array( $post_id ),    //おおもとの記事は除外する
      'tag__in'     => $related_taglist, //タグ配列に含まれるタグに含まれる記事を取得
    );
    query_posts( $args );       //設定より記事取得
    while ( have_posts() ) :    //一致する記事が見つかった場合繰り返す
        the_post();
    ?>
        <?php if( !$relatedpost_count ): /* 最初の記事の場合、ヘッダを付与 */ ?>
            <div class="related-article__container flexbox--spacebetween">
        <?php endif; ?>
                <a href="<?php echo get_permalink(); ?>" target="_blank" class="hover_fade" style="cursor: pointer;">
                    <div class="related-article__content">
                        <div class="related-article__img">
                          <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="related-article__text">
                          <?php the_title(); ?>
                        </div>
                    </div>
                </a>
    <?php
        $relatedpost_count++;   //記事を出力した数を加算
        if( !($relatedpost_count < $relatedpost_max ) ): //[if]目的の数記事を出力した場合
            break;                                              //ループを出る
        endif;
    endwhile;
    if( $relatedpost_count ):   ?>
            </div><!--id:related_post_wrap close-->
    <?php
    endif;
    wp_reset_query();   //元のクエリを復帰
?>
</div>