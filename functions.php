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


function custom_widget_register() {
    register_sidebar(array(
        'name' => '投稿記事画面のサイドバー',
        'id' => 'sidebar-primary',
        'before_widget' => '<div class="card-header text-center text-white rounded-0">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => '',
    ));
}
add_action('widgets_init', 'custom_widget_register');

/**
 * wp_list_categories()メソッドのHTML出力におけるliタグのクラス名を変更する
 *
 * @param [type] $list
 * @return void
 */
function change_li_class_categories( $list ) {
    $list = str_replace('<li class="cat-item','<li class="list-group-item py-2 px-4',$list);    // デフォルトでは"cat-item"と出力されるクラスを変更したが正規表現もありあり
    return $list;
}
add_filter ( 'wp_list_categories', 'change_li_class_categories' );