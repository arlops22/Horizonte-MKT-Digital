<!doctyae html>
<html lang="pt-br">
 
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width">
    <title>
        <?php 
        bloginfo('name');
        if( !is_front_page() ) {
            echo ' | ' ;
            the_title(); 
        } 
        ?>
    </title>
    <?php wp_head(); ?>
</head>
 
<body>
    <header class="h-header">
        <div class='container'>
            <a class="logo" href='/'>
                <img alt="Logo Horizonte" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
            </a>


            <?php 

                $args = array(
                    'theme-location' => 'header-menu',
                    'menu_class' => 'h-menu-nav',
                    'container_class' => 'menu-nav',
                    'container_id'    => 'h-nav',
                );

                wp_nav_menu($args);

            ?>

            <div id="social-links" class="nav-social-links">
                <a href="https://api.whatsapp.com/send?phone=555521994218517" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.facebook.com/betinhoiecinnit/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/betinhoiecin/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>

            <button id="hamburger" class="hamburger" type="button" >
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>