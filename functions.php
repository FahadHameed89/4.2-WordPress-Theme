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

    /**
     * Queue up some stylesheets and scripts
     */
    add_action(  'wp_enqueue_scripts', function () 
    {   // Enqueue our JavaScript!
        wp_enqueue_script(
            'techcareers-theme-scripts',
            // The 'public' path to the script file. 
            get_theme_file_uri( '/assets/js/scripts.js' ),
            
            // Dependencies (jQuery, Bootstrap, etc.)
            array(),
            
            // Version number of the file (based on time to fight browser cache)
            strftime( get_theme_file_uri( 'assets/js/scripts.js' ) ),
            
            // Should we output this script in the footer.php?
            FALSE
        );
    } 
);