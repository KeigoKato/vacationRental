<?php get_header(); ?>

<div class="container">
    <div class="row py-5">

        <div class="single-right col-sm-9">
            <div class="row article">

                <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                <div class="col-sm-12 article-top-main mb-5">
                    <div class="article-title">
                        <h1 class="mb-2"><?php the_title(); ?></h1>
                    </div>
                    <div class="article-smallinfo">
                        <p class="mb-2 text-right"><?php the_time('Y年 n月 j日 (D)'); ?></p>
                        <?php the_category(''); ?>
                        <!-- <ul class="list-inline text-right">
                            <li class="list-inline-item"><a href="#">スタッフ日記</a></li>
                            <li class="list-inline-item"><a href="#">コラム</a></li>
                        </ul> -->
                    </div>
                    <div class="article-image">
                        <?php if (has_post_thumbnail()): ?>
                        <!-- <img class="img-fluid" src="<?php // echo esc_url(get_template_directory_uri()); ?>/images/common/noimage-large.png" alt=""> -->
                        <?php the_post_thumbnail("full"); ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-sm-12 article-main">
                    <?php the_content(); ?>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>

        <?php get_sidebar(); ?>

    </div>
</div>






<?php get_footer(); ?>