<?php get_header('header'); ?>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">

                <hr>

                <h2 class="intro-text text-center">
                    <?php single_post_title(); ?>
                </h2>

                <hr>

            </div>

            <?php
            if (have_posts()): the_post();
                echo '<div class="col-md-12">' . the_content() . '</div>';
            else:
                echo "<p>Ainda não temos post.</p>";
            endif;
            ?>
            <div class="clearfix"></div>
        </div>

    </div>
</div>

<?php get_footer(); ?>


