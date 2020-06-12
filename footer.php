<?php wp_footer(); ?>
    
    <footer class="h-footer">
        <div class="footer-map">
            <div class="container">
                <img alt="Logo Horizonte" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
                <div class="footer-contact">
                    <h4>Fale Conosco</h4>
                    <p class="contact-info">horizontemktdigital@gmail.com</p>
                    <p class="contact-info">21 99999 9999</p>
                    <div id="social-links" class="nav-social-links">
                        <a href="https://api.whatsapp.com/send?phone=555521994218517" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.facebook.com/betinhoiecinnit/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/betinhoiecin/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <?php 

                    $args = array(
                        'theme-location' => 'header-menu',
                        'menu_class' => 'h-menu-nav',
                        'container_class' => 'menu-nav',
                        'container_id'    => 'h-nav',
                    );

                    wp_nav_menu($args);

                ?>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2020 | Horizonte Marketing Digital | Todos os direitors reservados</p>
        </div>
    </footer>

</body>
</html>