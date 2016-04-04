<?php get_header(); ?>
<div class="container">
    <div class="row row-content">
        <div class="col-sm-9">
            <div class="panel panel-default panel-body">
                <?php while (have_posts()) : the_post(); ?>
                    <h3>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                        <p class="text-muted">Posted by: <?php the_author(); ?> on <?php the_time('j/F/Y'); ?></p>
                    <p><?php the_content(); ?></p>
                    <?php endwhile; wp_reset_query(); ?>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="list-group">
                <?php query_posts('posts_per_page=4'); while(have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="list-group-item">
                        <h4><?php the_title(); ?> </h4>
                        <p class="list-group-item-text">Posted by: <?php the_author(); ?> on <?php the_time('j/F/Y'); ?></p>
                    </a>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>