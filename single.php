<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="box">
            <?php if (have_posts()) : the_post(); ?>

                <h2 class="text-center"><?php single_post_title(); ?></h2>

                <?php if (has_post_thumbnail()) : ?>

                    <div class="col-md-12">
                        <center><?php the_post_thumbnail('large'); ?></center>
                        <hr class="hr-post">
                    </div>

                <?php endif; ?>
                <div class="col-md-12">
                    <h6 class='text-muted'>
                        <em>
                            <i class="glyphicon glyphicon-user"></i> Por <?php printf('%s', get_the_author()); ?> | 
                            <i class="glyphicon glyphicon-calendar"></i> <?php printf('%s', get_the_date()); ?>
                        </em>
                    </h6>
                    <?php the_content(); ?>
                </div>
            <?php endif; ?>
        </div>

    </div>

</div>

<?php get_footer(); ?>
