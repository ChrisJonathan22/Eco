<!DOCTYPE html>
<html lang="en">
<head>
<?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title(); ?></title>
</head>
<body <?php body_class(); ?>>
<header class="sticky-top" id="top-nav">
    <div class="container">
        <?php 
            //By default this code will output every menu item
            //In the admin there's an option to specify the location of the menu
            wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        'menu_class' => 'navigation'
                    )
                ); 
        ?>
    </div>
</header>
