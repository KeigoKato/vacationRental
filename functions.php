<?php

function custom_theme_setup() {
    add_theme_support('automatic-feed-links');    // head内にフィードリンクを出力
    add_theme_support('title-tag');               // タイトルタグを動的に出力
    add_theme_support('post-thumbnails');         // アイキャッチ画像を有効化
}
add_action('after_setup_theme', 'custom_theme_setup');

/**
 * 投稿内の画像にクラスをつける
 *
 * @param [type] $class
 * @return void
 */
function add_post_image_class($class) {
    return $class.' article-post-image';
}
add_filter('get_image_tag_class', 'add_post_image_class');

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

/**
 * サイドバーのウィジェットを作成する
 *
 * @return void
 */
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


/**
 * 投稿記事一覧を固定ページ(blogスラッグ)に表示するためのメソッドを定義
 *
 * @return void
 */
function getAllPost() {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 10,
    );
    $post_query = new WP_Query($args);
    return $post_query;
}

/**
 * カスタム投稿ページ(plansスラッグ)を表示するためのメソッドを定義
 *
 * @return void
 */
function getAllPlans() {
    $args = array(
        'post_type' => 'plans',
        'posts_per_page' => 10,
    );
    $plans_query = new WP_Query($args);
    return $plans_query;
}

/**
 * 予約フォームでのみcontact-form-7にcssを適用する
 *
 * @return void
 */
function my_contact_enqueue_scripts(){
    wp_deregister_script('contact-form-7');
    wp_deregister_style('contact-form-7');
    if (is_page('reserve') || is_page('reserve-thanks')) {
        if (function_exists( 'wpcf7_enqueue_scripts')) {
            wpcf7_enqueue_scripts();
        }
        if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
            wpcf7_enqueue_styles();
        }
    }
}
add_action('wp_enqueue_scripts', 'my_contact_enqueue_scripts');

/**
 * 投稿画面ではビジュアルモードがデフォルトになるように設定する
 *
 * @return void
 */
function my_wp_default_editor() {
    return 'tinymce';    // ビジュアルモードは「tinymce」でエディターモードは「html」
}
add_filter('wp_default_editor', 'my_wp_default_editor');


function custom_register_post_type() {
    $args = array(
        'label'        => '宿泊プラン一覧',                                                     // ここで指定した文字列が管理画面に表示される
        'hierarchical' => false,                                                                // デフォルトの投稿と同じ
        'public'       => true,                                                                 // 投稿タイプを公開にする
        'has_archive'  => true,                                                                 // この投稿タイプのアーカイブを有効にする
        'supports'     => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),    // どの機能を有効にするかをここで指定する
        'rewrite'      => array('with_front' => false),                                         // この投稿タイプのパーマリンクの形式を変更する
    );
    register_post_type('plans', $args);                                                         // plansというスラッグ名でカスタム投稿タイプを登録
}
add_action('init', 'custom_register_post_type');