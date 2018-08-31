<?php get_header(); ?>

<div class="container">
    <div class="row py-5">
        <div class="single-right col-sm-9">
            <div class="row article">
                <ul class="list-group list-group-flush">
                    <?php $post_query = getAllPost(); // functions.phpでgetAllPost() ?>
                    <?php if ($post_query->have_posts()): ?>
                    <?php while ($post_query->have_posts()): $post_query->the_post(); ?>
                        <?php the_time( 'Y年m月d日' ); ?><br />
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br />
                    <?php endwhile; ?>
                    <?php else: ?>
                    <p>新しい記事はありません</p>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>