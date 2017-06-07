<?php
function theme_name_scripts() {
wp_enqueue_style( 'style.css', get_stylesheet_uri() );
wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
    

}

$defaults = array(
	'default-image'          => '', // фон шапки по умолчанию
	'random-default'         => false, // нужно ли выводить изображения в случайном порядке
	'width'                  => 0, // ширина шапки
	'height'                 => 0, // высота шапки
	'flex-height'            => false, // резиновая высота true / false
	'flex-width'             => false, // резиновая ширина true / false
//	'default-text-color'     => '', // цвет текста по умолчанию
	'header-text'            => true, // можно ли выводить текст в шапке
	'uploads'                => true, // возможность пользователю загружать свои изображения
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );
add_action( 'after_setup_theme', 'add_post_formats', 11 );

function add_post_formats(){

add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video',

'audio', 'chat' ) );

add_theme_support( 'post-thumbnails' );

add_theme_support( 'custom-background' );

//add_theme_support( 'custom-header', $defaults );

add_theme_support( 'custom-logo' );

}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );


        
//widgets
function register_my_widgets(){

register_sidebar( array(
'name' => "Right side",
'id' => 'right-sidebar',
'description' => 'Right',
'before_title' => '<h1>',
'after_title' => '</h1>'
) );
    
register_sidebar( array(
'name' => "Left sidebar",
'id' => 'left-sidebar',
'description' => 'Left',
'before_title' => '<h1>',
'after_title' => '</h1>'
) );
    
register_sidebar( array(
'name' => "Widget1",
'id' => 'widget-1',
'description' => 'First',
'before_title' => '<h1>',
'after_title' => '</h1>'
) );
    
register_sidebar( array(
'name' => "Widget2",
'id' => 'widget-2',
'description' => 'First',
'before_title' => '<h1>',
'after_title' => '</h1>'
) );   

}

add_action( 'widgets_init', 'register_my_widgets' );


require_once('wp-bootstrap-navwalker.php');

register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'Menu' ),
) );
