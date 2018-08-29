<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <!-- Required meta tags -->
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Hello, world!</title>
        <?php
            wp_enqueue_style(
                'base-style',
                esc_url(get_stylesheet_uri()),
                array(),
                '1.0',
                'all'
            );
        ?>
    </head>

    <body>
        <header>
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- navbar...ナビゲーションバーとして扱う
                    navbar-expand-lg...widthがlg以上になったらバーのメニューを展開する
                    navbar-light...バーの色を灰色にする -->
                    <a class="navbar-brand" href="#">Site Logo</a>
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
                                <a class="nav-link" href="#">お問い合わせ</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="cover text-center text-white">
                <section>
                    <h1 class="display-4 py-4">Logo or Title</h1>
                    <!-- display-4...文字の大きさを指定する -->
                    <p class="lead"><?php bloginfo('description'); ?></p>
                    <!-- lead...テキストを目立たせる -->
                </section>
            </div>
        </header>