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


        <div class="main">

            <div class="container">
                <div class="row concept">
                    <div class="col-sm-8 mx-auto">
                        <!-- mx-auto...ブロック要素を中央に配置するために書いた -->
                        <h2 class="display-3 py-4 text-center">事難臨不退</h2>
                        <p class="text-center">
                            あいうえおかきくけこさしすせそたちつてとなにぬねのはひふへほ<br>
                            あいうえおかきくけこさしすせそたちつてとなにぬねの<br>
                            あいうえおかきくけこさしすせそたちつてとなにぬねのはひふへほ<br>
                        </p>
                    </div>
                </div>
            </div>

            <div class="main-intro">
                <div class="card-group">
                    <!-- card-group...一連のカードを連結して均一サイズでグループ化する -->
                    <div class="card border-0">
                        <!-- card...カードコンポーネント全体を囲ってカードの枠を作る -->
                        <a href="#">
                            <img class="card-img-top rounded-0" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-01.png" alt="Card image cap">
                            <!-- card-img-top...img要素に追加してカード上部に画像を配置するのだが、下に配置したい場合はcard-img-bottomを使用する -->
                            <div class="card-body px-5">
                                <!-- card-body...カードの本文エリアを作成する -->
                                <section>
                                    <h2 class="card-title">温泉</h5>
                                    <!-- card-title...h要素に追加してカードのタイトルを作成する -->
                                    <p class="card-text">
                                        <!-- card-text...p要素などのテキスト要素に追加してカードのテキストを作成 -->
                                        ああああああああああああああああああああああああああああああああああ
                                    </p>
                                </section>
                            </div>
                        </a>
                    </div>
                    <div class="card border-0">
                        <a href="#">
                            <img class="card-img-top rounded-0" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-02.png" alt="Card image cap">
                            <div class="card-body px-5">
                                <section>
                                    <h2 class="card-title">温泉</h5>
                                    <p class="card-text">
                                        ああああああああああああああああああああああああああああああああああ
                                    </p>
                                </section>
                            </div>
                        </a>
                    </div>
                    <div class="card border-0">
                        <a href="#">
                            <img class="card-img-top rounded-0" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-03.png" alt="Card image cap">
                            <div class="card-body px-5">
                                <section>
                                    <h2 class="card-title">温泉</h5>
                                    <p class="card-text">
                                        ああああああああああああああああああああああああああああああああああ
                                    </p>
                                </section>
                            </div>
                        </a>
                    </div>
                    <div class="card border-0">
                        <a href="#">
                            <img class="card-img-top rounded-0" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/top-04.png" alt="Card image cap">
                            <div class="card-body px-5">
                                <section>
                                    <h2 class="card-title">温泉</h5>
                                    <p class="card-text">
                                        ああああああああああああああああああああああああああああああああああ
                                    </p>
                                </section>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row new-info py-5">
                    <div class="col-12 mx-auto">
                        <h2 class="display-5 pt-5 pb-4 text-center"><a href="#">新着情報</a></h2>
                        <section>
                            <div class="card-deck">
                                <!-- card-deck...一連のカードを連結せずに均一サイズでグループ化するコンポーネントであり、card-groupとちょっと違う -->
                                <?php for ($i=0; $i<4; $i++): ?>
                                    <div class="card rounded-0 border-dark">
                                        <a href="#">
                                            <img class="card-img-top rounded-0" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/noimage-large.png" alt="Card image cap">
                                        </a>
                                        <div class="card-body">
                                            <h5 class="card-title mb-0"><a class="card-link" href="#">秋の準備開始</a></h5>
                                            <p class="card-text mb-2"><small class="text-muted">2018年 8月 31日 (水)</small></p>
                                            <p class="card-text">
                                                祇園精舎の鐘の声、諸行無常の響きあり、沙羅双樹の花の色、盛者必衰の理を表す、奢れる人も久しからず、ただ春の夜の夢のごとし、猛き者も遂には滅びぬ、偏に風の夜の塵に [...]
                                            </p>
                                        </div>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </section>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row reco-plan py-5">
                    <div class="col-12 mx-auto">
                        <h2 class="display-5 pt-5 pb-4 text-center"><a href="#">秋の予約プラン</a></h2>
                        <section>
                            <div class="card-deck">
                                <!-- card-deck...一連のカードを連結せずに均一サイズでグループ化するコンポーネントであり、card-groupとちょっと違う -->
                                <?php for ($i=0; $i<3; $i++): ?>
                                    <div class="card border-0 rounded-0">
                                        <a href="#">
                                            <img class="card-img-top rounded-0" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/noimage-large.png" alt="Card image cap">
                                        </a>
                                        <div class="card-body text-center">
                                            <h5 class="card-title py-2"><a class="card-link" href="#">秋の準備開始</a></h5>
                                            <p class="card-text">
                                                祇園精舎の鐘の声、諸行無常の響きあり、沙羅双樹の花の色、盛者必衰の理を表す
                                            </p>
                                        </div>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <div class="py-5">
                <section style="height: 400px;"></section>
            </div>

        </div>

        <footer>
        </footer>
        <?php wp_footer(); ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
