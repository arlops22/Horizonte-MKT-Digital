<?php get_header(); ?>

<section class="home-intro">
    <div class="container">
        <div class="text-box">
            <?php 
                if (have_posts()) {
                    while(have_posts()) {
                        the_post();
                    ?>
                        <h5 class="h-title">Somos Horizonte marketing Digital</h5>
                        <?php the_content(); ?>
                        <a class="btn-primary" href="contato">Trabalhe Conosco</a>
                <?php    
                    }
                }
            ?>
        </div>
    </div>
</section>

<section class="h-section about-preview">
    <div class="small-container flex-container">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/about.jpg">
        <div class="text-box">
            <h2 class="h-title">Um Pouco Sobre Nós</h2>
            <p>
                Uma agência voltada para o Marketing Político assessorando 
                o candidato nas suas estratégias digitais e mapeando sua trajetória 
                para o sucesso. A relação eleitor e candidato é construida com 
                identificação e nada melhor que as redes sociais para aproximar as 
                pessoas nos dias de hoje.
            </p>
            <a class="btn-primary" href="sobre">Ver mais</a>
        </div>
    </div>
</section>

<section class="mkt-preview h-section">
    <div class="container">
        <span class="sub-title">Nosso Trabalho</span>
        <h2 class="secondary-title">Marketing Político</h2>

        <div class="flex-container content-center">
            <div class="procedures">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/graph.png">
                <p>Análise do cenário</p>
            </div>
            <div class="procedures">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/graph.png">
                <p>Análise do cenário</p>
            </div>
            <div class="procedures">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/graph.png">
                <p>Análise do cenário</p>
            </div>
            <div class="procedures">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/graph.png">
                <p>Análise do cenário</p>
            </div>
        </div>
        
        <a class="btn-primary" href="marketing-politico">Ver mais</a>
    </div>
</section>

<section class="h-section">
    <div class="container">
        <span class="sub-title">Depoimentos</span>
        <h2 class="secondary-title">O que dizem sobre nós</h2>
        <div class="depoiments">
            <p>
            “Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Nulla et sapien libero. Pellentesque et nisi ac libero condimentum ornare.
            Vestibulum ut velit bibendum, consequat justo ac, lobortis lorem. 
            Vivamus ac leo eu velit posuere viverra nec eget sem. 
            Quisque scelerisque erat sed lacus gravida venenatis. “
            </p>
            <div class="client">
                <div class="client-img"></div>
                <div>
                    <p class="client-name">Betinho Iecin</p>
                    <p class="client-job">Vereador de Niterói</p>
                </div>
            </div>
        </div>
    </div> 
</section>

<section class="h-section blog-preview">
    <div class="container">
        <h2 class="h-title" >Blog da Horizonte</h2>
        <div class="flex-container">
            <?php
            $args = array( 'numberposts' => 3, 'order'=> 'DES', 'orderby' => 'date' );
            $postslist = get_posts( $args );
            foreach ($postslist as $post) :  setup_postdata($post); ?> 
                <a href="<?php the_permalink(); ?>" class="last-post-box">
                    <div class="post-img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <h4><?php the_title(); ?></h4>
                </a>      
            <?php endforeach; ?>
        </div>
        <a class="btn-primary" href="blog">Ver mais</a>
    </div>
</section>

<?php get_footer(); ?>