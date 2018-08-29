<?php

function custom_theme_setup() {
    add_theme_support('automatic-feed-links');    // head内にフィードリンクを出力
    add_theme_support('title-tag');               // タイトルタグを動的に出力
    add_theme_support('post-thumbnails');         // アイキャッチ画像を有効化
}
add_action('after_setup_theme', 'custom_theme_setup');

/**
 * トップページの新着投稿を最大4つに制限する
 *
 * @param [type] $query
 * @return void
 */
function my_pre_get_top_posts($query) {
    if (is_admin() || !$query->is_main_query()) {
        return;
    }
    if ($query->is_home()) {
        $query->set('posts_per_page', 4);
        return;
    }
}
add_action('pre_get_posts', 'my_pre_get_top_posts');

/**
 * the_excerpt()メソッドの文字数を指定する
 *
 * @param [type] $length
 * @return void
 */
function my_excerpt_length($length) {
    return 80;
}
add_filter('excerpt_length', 'my_excerpt_length', 999);

/**
 * the_excerpt()メソッドの語尾の文字を変更してリンクを貼る
 *
 * @param [type] $more
 * @return void
 */
function twpp_change_excerpt_more( $more ) {
    $html = '<a href="' . esc_url( get_permalink() ) . '"> [...続きを読む]</a>';
    return $html;
}
add_filter('excerpt_more', 'twpp_change_excerpt_more');