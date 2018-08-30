<?php get_header(); ?>

<div class="container">
    <div class="row py-5">
        <div class="single-right col-sm-9">
            <div class="row article">
                <?php get_template_part('loop', 'index'); ?>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>