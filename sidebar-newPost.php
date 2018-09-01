<div class="col-sm-12">
    <div class="card bg-light mb-3 rounded-0 border-dark">
        <a href="<?php echo esc_url(home_url('/blog')); ?>">
            <div class="card-header text-center text-white rounded-0">最新投稿</div>
        </a>
        <ul class="list-group list-group-flush">
            <?php wp_get_archives(array(
                'type'   => 'postbypost',
                'limit'  => '10',
                'format' => 'custom',
                'before' => '<li class="list-group-item py-2 px-3"><div><p class="sidebar-title m-0">',
                'after'  => '</p></div></li>',
                ));
            ?>
        </ul>
    </div>
</div>