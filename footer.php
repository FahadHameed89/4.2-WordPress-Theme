<nav>
   <h3>Footer Navigation</h3> 
        </h2>
        <?php wp_nav_menu( // Used for outputting WP menus. 
                array(  // Assoc. array of arguments. 
                    'theme_location' => 'footer_menu'
                ) 
            ); 
        ?>
    </nav>

<footer>
    <h2><?php bloginfo( 'title' );  ?> Footer</h2>
    <p>
        &copy;
        <?php echo date('Y');?>
        <a href="<?php echo site_url(); ?>">
            <?php bloginfo( 'title' );?>
        </a>
        All Rights Reserved.
    </p>




</footer>
<?php
    // Similar to we_head(), for footer scripts and output
    wp_footer();
?>

</body>
</html>