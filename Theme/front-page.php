<?php get_header(); ?>

<main class="container">
    <h1>Welcome to my Front Page</h1>

    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 10
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        echo '<div class="post-list">';
        while ($query->have_posts()) : $query->the_post();
    ?>
            <article class="post-item">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="featured-image">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                <?php endif; ?>

                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Read More Here</a>
            </article>
    <?php
        endwhile;
        echo '</div>';
        wp_reset_postdata();
    else :
        echo '<p>No posts found.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
