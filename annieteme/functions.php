<?php

//　アイキャッチ機能を追加
add_theme_support('post-thumbnails');


// 記事の自動整形を無効化
remove_filter('the_content', 'wpautop');
// 抜粋の自動整形を無効化
remove_filter('the_excerpt', 'wpautop');


add_action('wp_footer', 'my_load_widget_scripts');

// wp_footerに処理を登録
add_action('wp_footer', 'my_load_widget_scripts');

/* アイキャッチ 設定 */
add_theme_support('post-thumbnails');

/* カスタム投稿タイプ 設定 */
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'featured',
        array(
            'labels' => array(
            'name' => __( '特集' ),
            'singular_name' => __( '特集 ' )
        ),
        'public' => true,
        'has_archive' => true, /* アーカイブページを持つ */
        'menu_position' =>5, //管理画面のメニュー順位
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
        )
    );

    //カスタムタクソノミー、カテゴリタイプ
      register_taxonomy(
        'featured-cat',
        'featured',
        array(
          'hierarchical' => true,
          'update_count_callback' => '_update_post_term_count',
          'label' => '特集のカテゴリー',
          'singular_label' => '特集のカテゴリー',
          'public' => true,
          'show_ui' => true
        )
      );

    //カスタムタクソノミー、タグタイプ
      register_taxonomy(
        'featured-tag',
        'featured',
        array(
          'hierarchical' => false,
          'update_count_callback' => '_update_post_term_count',
          'label' => '特集のタグ',
          'singular_label' => '特集のタグ',
          'public' => true,
          'show_ui' => true
        )
      );


}


?>