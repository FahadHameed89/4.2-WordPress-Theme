<?php get_header(); ?>

<h2>
Archive Template
<?php echo get_the_archive_title(); ?>
</h2>

<p>This is <strong>archive.php</strong></p>

<?php while ( have_posts() ) : // Loop through the posts    ?>
    <?php the_post(); // Sets up globals and values for this iteration. Setup function  ?>

    <article>
    <h3><?php the_title(); ?></h3>
    <p>
        <strong>Article Published on: </strong>
        <time datetime="<?php echo get_the_date( DATE_ATOM );?>">
        <?php echo get_the_date(); // WP function, gets the date of post ?>
        </time>
    </p>
    <p>
        <?php the_excerpt(); // Outputs the post summary.  ?>
    </p>
    <p>
        <a href="<?php the_permalink(); // URL to view this post! ?>">
            Read More!
        </a>
    </p>
    </article>

<?php endwhile; ?>

<?php get_footer(); ?>