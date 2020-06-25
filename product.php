<?php 
    //Template Name: Marketing
?>

<?php get_header(); ?>

<section class="home-intro marketing-intro">
    <div class="container">
        <div class="text-box">
            <h5 class="h-title">Está preparado para as próximas eleições ?</h5>
            <p>Nós vamos te ajudar em tudo o que precisa para atingir seu público</p>
        </div>
    </div>
</section>

<section class="h-section dark-section mkt-section">
    <div class="container">
        <div class="qualities">
            <div class="quality-icon">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/mkt-icon1.png">
            </div>
            <div class="quality-type">
                <h4>Imersão</h4>
                <ul class="quality-list">
                    <li>- Avaliar o cenário local</li>
                    <li>- Levantar dados</li>
                    <li>- Identificar perfil do eleitor</li>
                    <li>- Entender suas ideias</li>
                    <li>- Identificar adversários</li>
                </ul>
            </div>
        </div>
        <div class="qualities">
            <div class="quality-icon">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/mkt-icon1.png">
            </div>
            <div class="quality-type">
                <h4>Imersão</h4>
                <ul class="quality-list">
                    <li>- Avaliar o cenário local</li>
                    <li>- Levantar dados</li>
                    <li>- Identificar perfil do eleitor</li>
                    <li>- Entender suas ideias</li>
                    <li>- Identificar adversários</li>
                </ul>
            </div>
        </div>
        <div class="qualities">
            <div class="quality-icon">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/mkt-icon1.png">
            </div>
            <div class="quality-type">
                <h4>Imersão</h4>
                <ul class="quality-list">
                    <li>- Avaliar o cenário local</li>
                    <li>- Levantar dados</li>
                    <li>- Identificar perfil do eleitor</li>
                    <li>- Entender suas ideias</li>
                    <li>- Identificar adversários</li>
                </ul>
            </div>
        </div>
        <div class="qualities">
            <div class="quality-icon">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/mkt-icon1.png">
            </div>
            <div class="quality-type">
                <h4>Imersão</h4>
                <ul class="quality-list">
                    <li>- Avaliar o cenário local</li>
                    <li>- Levantar dados</li>
                    <li>- Identificar perfil do eleitor</li>
                    <li>- Entender suas ideias</li>
                    <li>- Identificar adversários</li>
                </ul>
            </div>
        </div>
    </div>
    <a class="btn-primary" href="#">Fale com nossa equipe</a>
</section>

<section class="h-section blog-preview">
    <div class="container">
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
    </div>
</section>

<?php get_footer(); ?>