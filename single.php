<?php get_header(); ?>


<section class="h-section">
    <div class="small-container">
        <?php 
            if(have_posts()) {
                while(have_posts()) {
                    the_post();
                ?>
                <div class="single-content">
                    <h1 class="h-title"><?php the_title(); ?></h1>
                    <span class="post-date"><i class="far fa-clock"></i> <?php the_date(); ?></span>
                    
                   <?php the_post_thumbnail(); ?>
                   <?php the_content(); ?>
                </div>
            <?php
                }
                }
            ?>
    
    </div>
</section>

<?php get_footer(); ?>