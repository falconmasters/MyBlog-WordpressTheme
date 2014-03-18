<?php
register_nav_menus( array(
'menu' => 'Menu superior',
));

add_theme_support( 'post-thumbnails');
add_image_size( 'slider_thumbs', 470, 300, true );
add_image_size( 'list_articles_thumbs', 450, 370, true );	

register_sidebar(array(
 'name' => 'Sidebar',
 'before_widget' => '<section class="widget">',
 'after_widget' => '</section>',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
 ));

register_sidebar(array(
 'name' => 'Footer',
 'before_widget' => '<section class="widget">',
 'after_widget' => '</section>',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
 ));

?>