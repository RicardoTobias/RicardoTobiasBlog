<?php
/*
 *  Template Name: Home
 */
?>
<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="box">
            <?php
            if (have_posts()): the_post();
                echo '<div class="col-md-12">' . the_content() . '</div>';
            else:
                echo "<p>Ainda não temos post.</p>";
            endif;
            ?>
        </div>
    </div>

</div>
<!-- /.container -->

<?php get_footer(); ?>