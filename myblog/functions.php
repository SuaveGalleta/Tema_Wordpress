<?php 
register_nav_menus( array(
'menu' => 'Menu superior',
));

?>

<?php

add_theme_support('post-thumbnails');
add_image_size('slider_thumbs', 470, 300, true);
add_image_size('list_article_thumbs', 450, 370, true);


?>

<?php 

register_sidebar(array(
    'name' => 'Sidebar',
    'before_widget' => '<section class="widget">',
    'after_widget' => '</section>',
    'before_tittle' => '<h3>',
    'after_tittle' => '</h3>',
));

register_sidebar(array(
    'name' => 'Footer',
    'before_widget' => '<section class="widget">',
    'after_widget' => '</section>',
    'before_tittle' => '<h3>',
    'after_tittle' => '</h3>',
));


?>