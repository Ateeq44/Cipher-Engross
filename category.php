<?php
get_header()

/**
 * Template Name: Category
 */
?>


<div id="content" class="site-content is-skin bg-light" style="transform: none;">
    <div id="primary" class="content-area" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="section-inner" style="transform: none;">
                <main id="main" class="site-main">
                    <div class="main-area box-wrap">
                        <div class="page-title-wrap">
                            <div class="widget-heading">
                                <h1 class="page-title title h4">
                                    <span class="page-heading">
                                        <?php the_category() ?>
                                    </span>
                                </h1>
                            </div>
                        </div>
                        <div data-elementor-type="wp-post" data-elementor-id="1134" class="elementor elementor-1134">

                            <div class="elementor-element elementor-element-ef51a47 e-con-full bg-transparent e-flex sticky-no is-skin bg-el bg-inherit bg-light nochange-no e-con e-parent" data-id="ef51a47" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;container_type&quot;:&quot;flex&quot;}" data-core-v316-plus="true">
                                <div class="elementor-element elementor-element-70076be elementor-widget elementor-widget-p-postsblog" data-id="70076be" data-element_type="widget" data-widget_type="p-postsblog.default">
                                    <div class="elementor-widget-container">
                                        <div id="th90-block_13" class="th90-block posts-columns box-wrap box-disable" data-current="1">
                                            <div class="posts-container">
                                                <div class="posts-list post-list-columns">
                                                    <?php
                                                    $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
                                                    $args = array(
                                                        'post_type' => 'post',
                                                        'post_status' => 'publish',
                                                        'category_name' => 'wordpress',
                                                        'posts_per_page' => 5,
                                                        'paged' => $paged,
                                                    );
                                                    $arr_posts = new WP_Query( $args );
                                                    if ( have_posts() ) :
                                                        while ( have_posts() ) :
                                                            the_post();
                                                            $image_id=get_post_thumbnail_id();
                                                            $image_url = wp_get_attachment_image_src($image_id,'img-polaroid');
                                                            $image_url=$image_url[0];
                                                            ?>
                                                            <div class="post-item cat-1">
                                                                <article class="post-layout list1 post-vertical-center post-list format-standard">
                                                                    <div class="post-list-thumbnail">
                                                                        <div class="entry-thumbnail">
                                                                            <a class="src-custom" href="<?php the_permalink(); ?>" title="Winter Dressing Tips When It’s Really Cold Out" previewlistener="true">
                                                                                <div class="thumb-container thumb-custom">
                                                                                    <img width="480" height="725" src="<?php echo $image_url ?>
                                                                                    " class="attachment-post-thumbnail size-post-thumbnail wp-post-image lazyautosizes ls-is-cached lazyloaded" alt="" decoding="async">
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post-list-desc text-left">
                                                                        <div class="post-desc-inner">
                                                                            <div class="entry-header">
                                                                                <div class="entry-cats">
                                                                                    <a class="post-cat info-text cat-text post-cat-1" href="https://tmrwstudio.me/atlas/default/category/style/" previewlistener="true">
                                                                                        <?php the_category() ?>
                                                                                    </a>
                                                                                </div>
                                                                                <h3 class="entry-title h3">

                                                                                    <a class="title-text" href="<?php the_permalink(); ?>" title="Winter Dressing Tips When It’s Really Cold Out" previewlistener="true">
                                                                                        <?php the_title() ?>
                                                                                    </a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="entry-excerpt">
                                                                                <?php the_content(); ?>
                                                                            </div>
                                                                            <div class="entry-meta no-icons">
                                                                                <div class="meta-item meta-author meta-modern author vcard meta-color">
                                                                                    <div class="author-ava" data-author="" style="
                                                                                    display: flex;
                                                                                    justify-content: center;
                                                                                    align-items: center;
                                                                                    ">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" id="user">
                                                                                        <path fill="#fff" fill-rule="evenodd" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10Zm3-12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 7a7.489 7.489 0 0 1 6-3 7.489 7.489 0 0 1 6 3 7.489 7.489 0 0 1-6 3 7.489 7.489 0 0 1-6-3Z" clip-rule="evenodd"></path>
                                                                                    </svg>
                                                                                </div>
                                                                                <div class="meta-modern-desc">
                                                                                    <a href="<?php the_permalink(); ?>" class="info-text author-name url fn" rel="author" title="Posts by John Doe" previewlistener="true">
                                                                                        <?php the_author() ?>
                                                                                    </a>
                                                                                    <span class="info-text">
                                                                                        <?php echo get_the_date(); ?></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="meta-item meta-more">
                                                                                    <a href="<?php the_permalink(); ?>" class="" style="color: #03B666 !important;" previewlistener="true">
                                                                                        Keep Reading
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </article>
                                                            </div>
                                                            <?php 
                                                        endwhile;
                                                        wp_reset_postdata();
                                                    endif;   
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <aside id="secondary" class="site-bar" style="display: block !important; position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 1184.8px;">
                        <div data-elementor-type="wp-post" data-elementor-id="176" class="elementor elementor-176">
                            <div class="elementor-element elementor-element-f5591e2 e-flex e-con-boxed sticky-no is-skin bg-el bg-inherit bg-light nochange-no bg-no bg-no box-no e-con e-parent" data-id="f5591e2" data-element_type="container" data-settings="{&quot;container_type&quot;:&quot;flex&quot;,&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-cc65b65 elementor-widget elementor-widget-p-postssmall" data-id="cc65b65" data-element_type="widget" data-widget_type="p-postssmall.default">
                                        <div class="elementor-widget-container">
                                            <div id="th90-block_14" class="th90-block posts-columns box-wrap have-heading" data-current="1">
                                                <div class="widget-heading">
                                                    <h4 class="title">Recommended</h4>
                                                    <div class="heading-elm">

                                                        <a class="viewAll" href="#">
                                                            View All                                
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="posts-container">
                                                    <div class="posts-list post-list-columns">
                                                        <?php
                                                        $args = array(
                                                            'post_type' => 'post', 
                                                            'posts_per_page' => 5, 
                                                            'orderby' => 'date',
                                                            'order' => 'DESC',
                                                        );

                                                        $query = new WP_Query($args);

                                                        if ($query->have_posts()) :
                                                            while ($query->have_posts()) : $query->the_post();
                                                                $image_id=get_post_thumbnail_id();
                                                                $image_url = wp_get_attachment_image_src($image_id,'img-polaroid');
                                                                $image_url=$image_url[0];
                                                                ?>
                                                                <div class="post-item cat-1">
                                                                    <article class="post-layout small1 post-small format-standard">
                                                                        <div class="post-small-thumbnail">
                                                                            <div class="entry-thumbnail">
                                                                                <a class="src-1_1" href="<?php the_permalink(); ?>" title="Winter Dressing Tips When It’s Really Cold Out" previewlistener="true">
                                                                                    <div class="thumb-container thumb-100">
                                                                                        <img width="480" height="725" src="<?php echo $image_url ?>
                                                                                        " class="attachment-post-thumbnail size-post-thumbnail wp-post-image lazyautosizes ls-is-cached lazyloaded" alt="">
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="post-small-desc">
                                                                            <div class="entry-header">
                                                                                <h3 class="entry-title h6">

                                                                                    <a class="title-text" href="<?php the_permalink(); ?>" title="Winter Dressing Tips When It’s Really Cold Out" previewlistener="true">
                                                                                        <?php the_title() ?>
                                                                                    </a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="entry-meta no-icons">
                                                                                <div class="meta-item meta-author author vcard meta-color">
                                                                                    <a href="https://tmrwstudio.me/atlas/default/author/admin/" class="info-text author-name url fn" rel="author" title="Posts by John Doe" previewlistener="true">
                                                                                        <?php the_author() ?>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="meta-item meta-date">
                                                                                    <a class="meta-color" href="<?php the_permalink(); ?>" previewlistener="true">
                                                                                        <span class="info-text">
                                                                                            <?php echo get_the_date(); ?>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                </div>
                                                                <?php
                                                            endwhile;
                                                            wp_reset_postdata(); 
                                                        else :
                                                            echo 'No posts found.';
                                                        endif;
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-137b6ab elementor-widget elementor-widget-w-subscribebox" data-id="137b6ab" data-element_type="widget" data-widget_type="w-subscribebox.default">
                                        <div class="elementor-widget-container">
                                            <div id="th90-block_15" class="th90-block block-subscribe box-wrap have-heading">
                                                <div class="widget-heading">
                                                    <h4 class="title">Subscribe Us</h4>
                                                </div>
                                                <div class="block-newsletter">
                                                    <p class="newsletter-desc">
                                                    Get the latest creative news from Atlas magazine</p>
                                                    <div class="newsletter-form"><form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-178" method="post" data-id="178" data-name="Mailchimp">
                                                        <div class="mc4wp-response">
                                                        </div>
                                                        <div class="mc4wp-form-fields">
                                                            <div class="custom-mailchimp">
                                                                <p>
                                                                    <label>
                                                                        <input type="email" name="EMAIL" placeholder="Your email address" required="">
                                                                    </label>
                                                                </p>
                                                                <p>
                                                                    <input type="submit" value="Sign up">
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <label style="">Leave this field empty if you're human: 
                                                            <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off">
                                                        </label>
                                                        <input type="hidden" name="_mc4wp_timestamp" value="1701549212">
                                                        <input type="hidden" name="_mc4wp_form_id" value="178">
                                                        <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1"></form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- Facebook Share Button -->


<?php
get_footer()


?>