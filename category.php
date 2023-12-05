<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
        // Display your category posts
        get_template_part('template-parts/content', get_post_format());
    endwhile;

    // Navigation to next/previous pages
    the_posts_pagination();

else :
    // If no content, include the "No posts found" template
    get_template_part('template-parts/content', 'none');
endif;

get_sidebar();
get_footer();
?>
