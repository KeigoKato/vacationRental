<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>
<div class="col-sm-12 article-top-main border-bottom mb-5">
    <div class="article-title">
        <h2 class="mb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </div>
    <div class="article-smallinfo">
        <p class="mb-2"><?php the_time('Y年 n月 j日 (D)'); ?></p>
        <?php the_category(''); ?>
    </div>
    <?php the_excerpt(); ?>
</div>
<?php endwhile; ?>
<?php endif; ?>