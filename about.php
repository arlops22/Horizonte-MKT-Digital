<?php 
    //Template Name: Sobre
?>

<?php get_header(); ?>

<section class="apresentation">
    <h1 class="secondary-title">Olá, somos a Horizonte MKT Digital</h1>
</section>

<section class="h-section about-section">
    <div class="container flex-container space-between">
        <div class="about-infos">
            <h2 class="h-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
            <p>
            Nam leo mi, ullamcorper eu ligula quis, commodo sodales arcu. Praesent dolor turpis, tempor vel metus et, dignissim vulputate turpis. Nunc ornare enim ut nibh dapibus aliquam. Cras ac tortor faucibus, scelerisque libero et, interdum tellus. Nam at venenatis risus.
            </p>
            <p>
            Fusce vel sem nisl. Vivamus vel egestas quam. Vivamus vel consequat neque. Aliquam laoreet ante et dictum auctor. Nunc ac dignissim elit. Sed commodo massa nulla, quis convallis dui convallis quis.
            </p>
        </div>
        <div class="about-icons">
            <div class="specialties">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-about.png">
                <p>Especialista em marketing digital</p>
            </div>
            <div class="specialties">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-about.png">
                <p>Especialista em marketing digital</p>
            </div>
        </div>
    </div>
</section>

<section class="contact-reference">
    <div class="container">
        <div class="separator"></div>
        <div class="flex-container item-align">
            <h4>No mundo pós-digital em que vivemos, o sucesso da sua empresa está diretamente ligado às formas como ela se comunica.</h4>
            <a class="btn-primary" href="#">Venha Trabalhar Conosco</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>