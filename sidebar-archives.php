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
        </ul>
    </div>
</div>