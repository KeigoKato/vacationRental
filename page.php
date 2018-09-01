<?php get_header(); ?>

<div class="container">
    <div class="row py-5">
        <div class="single-right col-sm-9">
            <div class="row article">
                <?php
                if (is_page('blog')) {
                    get_template_part('page/loop-blog');
                } elseif (is_page('reserve')) {
                    get_template_part('page/loop-reserve');
                } elseif (is_page('reserve-thanks')) {
                    get_template_part('page/loop-reserve-thanks');
                } else {
                    '';
                }
                ?>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>