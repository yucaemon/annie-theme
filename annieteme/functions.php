<?php

//　アイキャッチ機能を追加
add_theme_support('post-thumbnails');


//　改行の時に自動的にPタグが挿入されるのを防ぐ
remove_filter('the_content', 'wpautop');
remove_filter( 'the_excerpt', 'wpautop' );

?>