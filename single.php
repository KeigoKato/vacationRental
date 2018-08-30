<?php get_header(); ?>
<div class="container">
    <div class="row py-5">
        <div class="single-right col-sm-9">
            <div class="row article">
                <?php get_template_part('loop', 'single'); ?>
            </div>
            <nav class="postNavi">
                <span class="prev"><?php previous_post_link('%link'); ?></span>
                <div class="next"><?php next_post_link('%link'); ?></div>
            </nav>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>