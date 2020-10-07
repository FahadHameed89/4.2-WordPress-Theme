<?php get_header(); ?>

<article>
<h3>
Blog Post (Single):
<?php the_title(); ?>
</h3>
    <p>
        <strong>Article Published on: </strong>
            <time datetime="<?php echo get_the_date( DATE_ATOM );?>">
                 <?php echo get_the_date(); // WP function, gets the date of post ?>
            </time>
    </p>
    <h3>Post Categories</h3>
    <ul>
        <?php
        // Get an array of category ID Numbers for THIS post. 
        $categories = wp_get_post_categories( get_the_id() );
        // Loop through the post categories
        foreach ( $categories as $catID )
        {   // Retrieve the WP_Term object for this ID. 
            $category = get_category( $catID );
            // Retrieve the current category's URL
            $categoryURL = get_term_link( $category);
            // Output the formatted List item (LI)
            ?>
            <li>
                <a href="<?php echo $categoryURL;?>">
                <?php echo $category->name; // Property from WP_Term?>
                </a>
            </li>
            <?php 
        }
        ?>
    </ul>
    <h3>Post Content</h3>
    <?php the_content();    // Displays post content    ?>
</article>

<?php get_footer(); ?>