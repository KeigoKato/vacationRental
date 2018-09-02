<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <!-- Required meta tags -->
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_stylesheet_uri()); ?>">

        <title><?php bloginfo('name'); ?></title>
        <?php
            // wp_enqueue_style(
            //     'base-style',
            //     esc_url(get_stylesheet_uri()),
            //     array(),
            //     '1.0',
            //     'all'
            // );
        ?>
    </head>

    <body <?php body_class(); ?>>
        <header>
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- navbar...ナビゲーションバーとして扱う
                    navbar-expand-lg...widthがlg以上になったらバーのメニューを展開する
                    navbar-light...バーの色を灰色にする -->
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">Site Logo</a>
                    <!-- navbar-brand...社名とかにつける -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText">
                        <!-- navbar-toggler...ナビゲーションの表示切り替えボタンにする
                        data-toggle="collapse"...折りたたみが可能なコンテンツにするために必要で、lg以上の場合は開いておきたいのでcollapseにする
                        data-target...折りたたむulタグの親のdivタグを指定する -->
                        <span class="navbar-toggler-icon"></span>
                        <!-- navbar-toggler-icon...これを書くだけでハンバーガーアイコンになる -->
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <!-- collapse...基本的には折りたたむが、
                        navbar-collapse...ブラウザ幅がlg以下になったらcollapseする
                        collapse navbar-collapseと書くとナビゲーションバー内に切り替え表示されるコンテンツを指定する -->
                        <ul class="navbar-nav ml-auto">
                            <!-- navbar-nav...ナビゲーションバー内にナビゲーションを作成する
                            ml-auto...margin-left:auto;にすることで左端にくる -->
                            <li class="nav-item">
                                <!-- nav-item...ナビゲーション項目を作成する -->
                                <a class="nav-link" href="#">館内施設</a>
                                <!-- nav-link...ナビゲーションリンクを作成 -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">お部屋</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">お食事</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">周辺観光</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">予約プラン</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
                            </li>
                        </ul>
                    </div>
                    <form class="form-inline pl-sm-2 my-2 my-lg-0" action="<?php echo home_url('/'); ?>" method="get">
                        <input class="form-control mr-sm-2" type="search" placeholder="記事を検索" value="<?php the_search_query(); ?>" name="s" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索</button>
                    </form>
                </nav>
            </div>

            <?php global $template; ?>
            <?php if (basename($template) != '404.php'): ?>
            <div class="cover text-center text-white">
                <section>

                    <h1 class="display-4 py-4">
                    <!-- display-4...文字の大きさを指定する -->
                    <?php if (is_front_page()): ?>
                    Logo or Title
                    <?php elseif (is_month()): ?>
                    <?php the_time('Y年n月'); ?>の投稿一覧
                    <?php elseif (is_category()): ?>
                    カテゴリー<br>
                    「<?php wp_title(''); ?>」の投稿一覧
                    <?php elseif (is_single()): ?>
                    投稿記事 詳細
                    <?php elseif (is_page('blog')): ?>
                    投稿記事 一覧
                    <?php elseif (is_search()): ?>
                    「<?php the_search_query(); ?>」の検索結果<br>
                    <?php elseif (is_page('reserve') || is_page('reserve-thanks')): ?>
                    ご予約フォーム<br>
                    <?php elseif (is_page('contact') || is_page('contact-thanks')): ?>
                    お問い合わせフォーム
                    <?php elseif (is_post_type_archive('plans')): ?>
                    宿泊プラン
                    <?php endif; ?>
                    </h1>

                    <?php if (is_front_page()): ?>
                    <p class="lead"><?php bloginfo('description'); ?></p>
                    <!-- lead...テキストを目立たせる -->
                    <?php endif; ?>
                </section>
            </div>
            <?php endif; ?>
        </header>