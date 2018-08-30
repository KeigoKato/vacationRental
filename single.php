<?php get_header(); ?>
<div class="container">
    <div class="row py-5">
        <div class="single-right col-sm-9">
            <div class="row article">
                <?php get_template_part('loop', 'single'); ?>
            </div>
            <div class="row">
                <div class="col-sm-6 text-left"><?php previous_post_link('<< %link'); ?></div>
                <div class="col-sm-6 text-right"><?php next_post_link('%link >>'); ?></div>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>