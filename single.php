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
    <h3>Post Content</h3>
    <?php the_content();    // Displays post content    ?>
</article>

<?php get_footer(); ?>