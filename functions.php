<?php   
    /**
     * WordPress runs functions.php as long as a theme is enabled. We will use this to register some standard functions
     * 
     * 1. Like registering a NAV manu
     */

    register_nav_menus( // We must register nav locations if we want to be able to add navs to the site. 
        array( // An ID for the menu, and the text that appears to admin.
            'main_menu' => 'Main Menu (Header)',
            'footer_menu' => 'Main Menu (Footer)'
        )
    );
