<!-- Call the header file so that it shows on this page. -->
<?php get_header(); ?>
<!-- Start a new div that will contain the main information for the page. -->
<div class="col-sm-8 blog-main">
 
<!-- This php loop will check if there are any posts. If so, while there are posts, show the posts in order of most recent to oldest. -->
    <?php 
        if ( have_posts() ) { 
            while ( have_posts() ) : the_post();
            ?>
                <div class="blog-post">
                    <h2 class="blog-post-title"><?php the_title(); ?></h2>
                    <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
                    <?php the_content(); ?>
                </div><!-- /.blog-post -->
            <?php
            endwhile;
        } 
    ?>

<!-- Show the nav for the next post or the last post. -->
    <nav>
        <ul class="pager">
            <li><?php next_posts_link('Previous'); ?></li>
            <li><?php previous_posts_link('Next'); ?></li>
        </ul>
    </nav>

</div><!-- /.blog-main -->

<!-- Call the footer file so that it shows on this page. -->
<?php get_footer(); ?>