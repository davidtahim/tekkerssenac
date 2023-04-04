<?php

function theme_styles() {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function wpbootstrap_scripts() {
    // Registra e enfileira o script do Bootstrap em português
    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.1.0', true );
    wp_enqueue_script( 'bootstrap-js' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts' );
//Função para criar o menu
function register_theme_menus (){
    register_nav_menus (
        array (
            'header-menu' => __('Header Menu')
        )
        );
}
add_action ('init', 'register_theme_menus');

function create_widget ($name, $id, $description ) {
    register_sidebar( array (
        'name' => __($name),
        'id' => $id,
        'description' => __($description),
        'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'

    ));

}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage' );
create_widget( 'Front Page Center', 'front-center', 'Displays in the center of the homepage' );
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage' );

create_widget( 'Footer Left', 'footer-left', 'Displays on the left of the footer' );
create_widget( 'Footer Center', 'footer-center', 'Displays in the center of the footer' );
create_widget( 'Footer Right', 'footer-right', 'Displays on the right of the footer' );

create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );

?>