<?php get_header(); ?>

<div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-sm-4">
                <div class="card">
                <?php the_post_thumbnail('medium', ['class' => 'post-card-img', 'title' => "", 'syle' => 'height:auto', 'syle' => 'width:auto']) ?>
                        <div class="card-body">
                        <h5 class="card-title"><?php the_title() ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
                        <p class="card-text">
                            <?php the_content('En voir plus') ?>
                        </p>
                        <a href="<?php the_permalink() ?>" class="card-link">Voir plus</a>
                    </div>
                </div>
            </div>

        <?php endwhile;
    else : ?>
</div>
<p>Aucun article :(</p>
<?php endif; ?>



<P>titre du site : <?php wp_title() ?></P>

<?php get_footer(); ?>