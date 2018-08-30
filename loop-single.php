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
    <div class="article-image">
    <?php if (!is_month()): ?>
        <?php if (has_post_thumbnail()): ?>
        <?php the_post_thumbnail("full"); ?>
        <?php endif; ?>
    <?php endif; ?>
    </div>
    <?php the_content(); ?>
</div>
<?php endwhile; ?>
<?php endif; ?>