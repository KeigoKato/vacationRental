<?php get_header(); ?>

<div class="container">
    <div class="row reco-plan py-5">
        <div class="col-12 mx-auto">
            <h2 class="display-5 pt-5 pb-4 text-center">おすすめの宿泊プラン</h2>
            <section>
                <div class="card-deck">
                <!-- card-deck...一連のカードを連結せずに均一サイズでグループ化するコンポーネントであり、card-groupとちょっと違う -->
                <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <div class="card border-0 rounded-0 col-sm-4">
                        <a href="#">
                            <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                            <img class="card-img-top rounded-0" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/noimage-large.png" alt="Card image cap">
                            <?php endif; ?>
                        </a>
                        <div class="card-body text-left">
                            <h5 class="card-title py-2"><a class="card-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <p class="card-text">
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </section>
        </div>
    </div>
</div>

<?php get_footer(); ?>