<?php
get_header();
?>

<section id="primary" class="content-area">
    <main id="main" class="site-main">

        <header class="page-header">
            <h1 class="page-title">
                <?php single_cat_title('Archive for the '); echo ' '; single_cat_title('', true); ?>
            </h1>
        </header>

        <?php
        while (have_posts()) :
            the_post();

            ds

        endwhile;
        ?>

    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
