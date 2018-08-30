<div class="col-sm-12">
    <div class="card bg-light mb-3 rounded-0 border-dark">
        <div class="card-header text-center text-white rounded-0">最新5件の投稿</div>
        <ul class="list-group list-group-flush">
            <?php wp_get_archives(array(
                'type'   => 'postbypost',
                'limit'  => '5',
                'format' => 'custom',
                'before' => '<li class="list-group-item p-3"><div><p class="sidebar-title m-0">',
                'after'  => '</p></div></li>',
                ));
            ?>
        </ul>
    </div>
</div>