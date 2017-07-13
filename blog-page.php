<?php
/*
  Template Name: Blog
 */
?>
<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-md-12">

                <hr>

                <h2 class="intro-text text-center">
                    <?php single_post_title(); ?>
                </h2>

                <hr>
                <?php query_posts('blog'); ?>
                <div class="col-md-12">
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()): the_post(); ?>
                            <div class="row">
                                <?php $image = ''; ?>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="col-md-3">
                                        <?php printf('<a href="%s" class="thumbnail">%s</a>', get_the_permalink(), get_the_post_thumbnail()); ?>
                                    </div>
                                    
                                    <?php 
                                        /*
                                         * Caso o post ou artigo tiver alguma imagem,
                                         * a div onde guarda o titulo, o autor, a data e a introdução do artigo
                                         * será col-md-9
                                         */ 
                                    ?>
                                    <div class="col-md-9">
                                        
                                <?php else : ?>
                                    
                                    <?php 
                                    /*
                                     * Caso o post ou artigo não tiver alguma imagem,
                                     * a div onde guarda o titulo, o autor, a data e a introdução do artigo
                                     * será col-md-12
                                     */ 
                                    ?>
                                        
                                    <div class="col-md-12">
                                        
                                <?php endif; ?>
                                      
                                    <div class="row">
                                        <h4>
                                            <strong>
                                                <a href="<?php printf('%s', get_the_permalink()); ?>">
                                                    <?php printf('%s', get_the_title()); ?>
                                                </a>
                                            </strong>
                                            <small class="pull-right">
                                                <em>
                                                    <i class="glyphicon glyphicon-user"></i> Por <a href="#"><?php printf('%s', get_the_author()); ?></a> | 
                                                    <i class="glyphicon glyphicon-calendar"></i> <?php printf('%s', get_the_date()); ?>
                                                </em>
                                            </small>
                                        </h4>
                                    </div>
                                    <div class="row">
                                        <p><?php printf('%s', get_the_excerpt()); ?></p>
                                    </div>
                                </div>
                            </div>
                            <hr class="hr-post">

                        <?php endwhile; ?>
                    <?php else : ?>
                        <p>Ainda não temos post.</p>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
