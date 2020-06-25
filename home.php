<?php get_header(); ?>

<section class="apresentation">
        <h2 class="secondary-title">Adquira mais conhecimento</h2>
        <p>Conteúdo para você expandir possibilidades e ver seu marketing pessoal evoluir com a Horizonte.</p>
</section>

<section class="h-section">
    <div class="small-container">
            <?php 
                if (have_posts()) {
                    while(have_posts()) {
                        the_post();
            ?>
            <div class="card">
                <a class="img-link" href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
                <div class="card-body">
                    <a class="card-title" href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                    <span class="post-date"><i class="far fa-clock"></i> <?php the_time('j \d\e F \d\e Y'); ?></span>
                    <?php the_excerpt(); ?>
                    <a class="btn-link" href="<?php the_permalink(); ?>">Ler mais</a>
                </div>  
            </div>
        
            <?php
                }
            }
            ?>
        <?php 
                global $wp_query;


                $args = array(
                    'total' => $wp_query->max_num_pages,
                    'type' => 'array',
                    'prev_text' => "<",
                    'next_text' => ">"
                );

                $pages = paginate_links($agrs);

                echo "<div class='pagination'>". $pages . "</div>";

            ?>
   
    </div>
</section>  

<?php get_footer(); ?>