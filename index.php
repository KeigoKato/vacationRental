<?php get_header(); ?>

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

            <div class="container">
                <div class="row reserve pb-5">
                    <div class="col-12">
                        <div class="card mb-3 rounded-0">
                            <h4 class="card-header text-center text-white rounded-0">かんたん空室検索</h4>
                            <div class="card-body text-dark">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-intro py-5">
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
                                    <h2 class="card-title">お食事</h5>
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
                                    <h2 class="card-title">お部屋</h5>
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
                                    <h2 class="card-title">周辺観光</h5>
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

                                <?php if (have_posts()): ?>
                                <?php while (have_posts()): the_post(); ?>
                                <div class="card rounded-0 border-dark">
                                    <a href="#">
                                        <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('full'); ?>
                                        <?php else: ?>
                                        <img class="card-img-top rounded-0" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/noimage-large.png" alt="Card image cap">
                                        <?php endif; ?>
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title mb-0"><a class="card-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                        <p class="card-text mb-2"><small class="text-muted"><?php the_time('Y年 n月 j日 (D)'); ?></small></p>
                                        <div class="card-text d-none d-md-block"><?php the_excerpt(); ?></div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
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

<?php get_footer(); ?>