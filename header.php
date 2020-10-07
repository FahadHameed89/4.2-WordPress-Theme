<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'title' ); ?></title>
    <?php
    // This outputs any scripts, styles, metadata, that our plugin/theme need.
    wp_head();
    ?>
</head>
<body>
    <h1><?php bloginfo( '' ); ?></h1>    
    <nav>
        <h2>
        <?php bloginfo('title'); ?>
        Navigation
        </h2>
        <?php wp_nav_menu( // Used for outputting WP menus. 
                array(  // Assoc. array of arguments. 
                    'theme_location' => 'main_menu'
                ) 
            ); 
        ?>
    </nav>