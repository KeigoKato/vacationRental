<?php get_header(); ?>

<div class="container">
    <div class="row py-5">
        <div class="single-right col-sm-9">
            <div class="row article">
                <div class="col-sm-12 mx-auto">
                    <!-- mx-auto...ブロック要素を中央に配置するために書いた -->
                    <h3 class="py-4">お探しのページが見つかりませんでした。</h3>
                    <p>
                        お探しのページは削除されたか、名前が変更されたか、一時的に利用できない可能性があります。<br>
                        アクセスされたURLをご確認いただき、このサイトの<a href="<?php echo esc_url(home_url('/')); ?>">トップページ</a>から、またはナビゲーションメニューからお探しのページへアクセスしてください。
                    </p>
                </div>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>