<?php get_header(); ?>

<div class="container">
    <div class="row py-5">
        <div class="single-right col-sm-9">
            <div class="row article">
                <div class="col-sm-12">
                    <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>