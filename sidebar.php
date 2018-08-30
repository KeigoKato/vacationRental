<div class="single-left col-sm-3">
    <div class="row new-other-info">

        <div class="col-sm-12">
            <div class="card bg-light mb-3 rounded-0 border-dark">
                <div class="card-header text-center text-white rounded-0">最新5件の投稿</div>
                <ul class="list-group list-group-flush">
                    <?php wp_get_archives(array(
                        'type' => 'postbypost',
                        'limit' => '5',
                        'format' => 'custom',
                        'before' => '<li class="list-group-item p-3"><div><p class="sidebar-title m-0">',
                        'after' => '</p></div></li>',
                        ));
                    ?>
                </ul>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="card bg-light mb-3 rounded-0 border-dark">
                <div class="card-header text-center text-white rounded-0">カテゴリー</div>
                <ul class="list-group list-group-flush">
                    <?php
                        wp_list_categories(array(
                            'title_li'   => '',
                            'show_count' => true,
                        ));
                    ?>
                </ul>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="card bg-light mb-3 rounded-0 border-dark">
                <div class="card-header text-center text-white rounded-0">アーカイブ</div>
                <ul class="list-group list-group-flush">
                    <?php
                        wp_get_archives(array(
                            'type'            => 'monthly',
                            'limit'           => 5,
                            'show_post_count' => true,
                            'format'          => 'custom',
                            'before'          => '<li class="list-group-item py-2 px-4">',
                            'after'           => '</li>'
                        ));
                    ?>
                    <!-- <li class="list-group-item py-2 px-4"><a href="">2018年 8月 (5)</a></li>
                    <li class="list-group-item py-2 px-4"><a href="">2018年 12月 (12)</a></li>
                    <li class="list-group-item py-2 px-4"><a href="">2018年 12月 (12)</a></li> -->
                </ul>
            </div>
        </div>

    </div>
</div>