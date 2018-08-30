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