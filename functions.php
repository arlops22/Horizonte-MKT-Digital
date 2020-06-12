<?php 

//adiciona scripts e estilos do tema
function add_styles_and_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'all', get_template_directory_uri() . '/assets/css/all.css');

}

add_action('wp_enqueue_scripts', 'add_styles_and_scripts');

//adiciona edição de menus
function registrar_nav() {    
    register_nav_menu('header-menu', 'main-menu');
}

add_action('init', 'registrar_nav');


//adiciona imagem às postagens
function suporte_a_thumbnails() {
    add_theme_support('post-thumbnails');
}

add_action('init', 'suporte_a_thumbnails');


//reduzindo o tamanho dos resumos dos posts
function novo_tamanho_do_resumo($length) {
	return 30;
}
add_filter('excerpt_length', 'novo_tamanho_do_resumo');


?>