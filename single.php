<?php get_header(); ?>

<div class="header-space clearfix"></div>
<div id="content" class="site-content is-skin bg-light">
    <?php
    while (have_posts()) :
        the_post();
        $image_id=get_post_thumbnail_id();
        $image_url = wp_get_attachment_image_src($image_id,'img-polaroid');
        $image_url=$image_url[0];
        ?>
        <div id="primary" class="content-area">
            <!-- Facebook Share Button -->

         <div id="single-post-ajax" class="single-post-ajax d-flexlist" data-nextid="21" data-nexturl="../headsets-are-better-if-youre-playing-games/index.html">
          <div class="single-inner-ajax" data-previd="22" data-prevurl="https://tmrwstudio.me/atlas/default/2023/09/06/winter-dressing-tips-when-its-really-cold-out/" data-image="https://tmrwstudio.me/atlas/default/wp-content/uploads/sites/2/2023/09/a12.jpeg" data-desc="Venus has a runaway greenhouse effect. I kind of want to know what happened there because we’re twirling knobs here on Earth without knowing the consequences of it. Mars once" data-readtime="&lt;span class=&quot;icon-svg&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 24 24&quot;&gt;&lt;path d=&quot;m9 7.539 6 14L18.66 13H23v-2h-5.66L15 16.461l-6-14L5.34 11H1v2h5.66L9 7.539Z&quot;/&gt;&lt;/svg&gt;&lt;/span&gt;2 mins read">
           <article id="post-22" class="d-flexlist article-1 sidebar-right post-22 post type-post status-publish format-standard has-post-thumbnail hentry category-style tag-child tag-creative tag-happy tag-picked tag-sketch tag-wild">
            <div class="container">
             <div class="section-inner article-section">
              <main id="main" class="site-main" role="main">
               <div class="entry-featured">
                <div class="featured-hero">
                 <div class="thumb-container" style="padding-bottom:400px;">
                    <img width="640" height="966" src="<?php echo $image_url ?>"/>
                </div>
                <div class="post-desc desc-hero bg-dark">
                  <div class="post-desc-inner">
                   <header class="entry-header entry-header-article text-left">
                    <div class="entry-cats-wrap have-cats">
                      <div class="entry-cats">
                        <a class="post-cat info-text  post-cat-1" href=""><span><?php the_category() ?></span></a>
                    </div>
                </div>
                <div class="page-title">
                 <h1 class="entry-title"><?php the_title() ?></h1>
             </div>
             <div class="entry-meta no-icons">
                 <div class="meta-item meta-author meta-modern author vcard meta-color">
                  <div class="author-ava" data-author="J"><img alt='' src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src='https://secure.gravatar.com/avatar/06ac9198ed2a1093c67c32334849eea6?s=35&#038;d=mm&#038;r=g' data-srcset='https://secure.gravatar.com/avatar/06ac9198ed2a1093c67c32334849eea6?s=70&#038;d=mm&#038;r=g 2x' class='lazyload avatar avatar-35 photo' height='35' width='35' decoding='async'/></div>
                  <div class="meta-modern-desc"><a href="../../../../author/admin/index.html" class="info-text author-name url fn" rel="author" title="Posts by John Doe"><?php the_author() ?></a><span class="info-text"><?php echo get_the_date(); ?>
              </span>
          </div>
      </div>
      <div class="meta-item meta-color meta-views"><a class="meta-color" href="index.html"><span class="info-text">237&nbsp;Views</span></a></div>
      <div class="meta-item meta-comments"><a href="index.html#comments" class="meta-color"><span class="info-text">2 Comments</span></a></div>
  </div>
</header>
</div>
</div>
</div>
</div>
<div class="element-article box-section box-wrap">
    <div class="content-wrap have-share_sticky">
     <div class="single-content">
      <div class="entry-content article-content">

        <?php the_content(); ?>

    </div>
    <div class="clearfix"></div>
    <div class="single-tags">
       <div class="entry-tags-head">Tags:</div>
       <div class="entry-tags">
        <?php
        $tags_list = get_the_tag_list('', ' ');
        if ($tags_list) {
            echo '<a href="" rel="tag">'. $tags_list.'</a>';
        }
        ?>
    </div>
</div>
</div>
<div class="single-shares_sticky">
  <div class="head-shares">Shares:</div>
  <div class="social-shares social-icons social-simple">
    <a href="<?php the_permalink();  ?>" rel="nofollow" target="_blank" class="social-icon s-facebook">
    <span class="icon-svg">
     <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
      <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/>
  </svg>
</span>
</a>
<a href="https://twitter.com/intent/tweet/?url=https://tmrwstudio.me/atlas/default/2023/09/06/winter-dressing-tips-when-its-really-cold-out/" rel="nofollow" target="_blank" class="social-icon s-twitter">
    <span class="icon-svg">
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
      <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8l164.9-188.5L26.8 48h145.6l100.5 132.9L389.2 48zm-24.8 373.8h39.1L151.1 88h-42l255.3 333.8z"/>
  </svg>
</span>
</a>
<a href="../../../../../../../pinterest.com/pin/create/button/index63ac.html?url=https://tmrwstudio.me/atlas/default/2023/09/06/winter-dressing-tips-when-its-really-cold-out/&amp;description=Winter+Dressing+Tips+When+It%26%238217%3Bs+Really+Cold+Out&amp;media=https://tmrwstudio.me/atlas/default/wp-content/uploads/sites/2/2023/09/a12.jpeg" rel="nofollow" target="_blank" class="social-icon s-pinterest">
    <span class="icon-svg">
     <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
      <path d="M256.05 32c-123.7 0-224 100.3-224 224 0 91.7 55.2 170.5 134.1 205.2-.6-15.6-.1-34.4 3.9-51.4 4.3-18.2 28.8-122.1 28.8-122.1s-7.2-14.3-7.2-35.4c0-33.2 19.2-58 43.2-58 20.4 0 30.2 15.3 30.2 33.6 0 20.5-13.1 51.1-19.8 79.5-5.6 23.8 11.9 43.1 35.4 43.1 42.4 0 71-54.5 71-119.1 0-49.1-33.1-85.8-93.2-85.8-67.9 0-110.3 50.7-110.3 107.3 0 19.5 5.8 33.3 14.8 43.9 4.1 4.9 4.7 6.9 3.2 12.5-1.1 4.1-3.5 14-4.6 18-1.5 5.7-6.1 7.7-11.2 5.6-31.3-12.8-45.9-47-45.9-85.6 0-63.6 53.7-139.9 160.1-139.9 85.5 0 141.8 61.9 141.8 128.3 0 87.9-48.9 153.5-120.9 153.5-24.2 0-46.9-13.1-54.7-27.9 0 0-13 51.6-15.8 61.6-4.7 17.3-14 34.5-22.5 48a225.13 225.13 0 0 0 63.5 9.2c123.7 0 224-100.3 224-224S379.75 32 256.05 32z"/>
  </svg>
</span>
</a>
<a href="https://telegram.me/share/url?text=Winter+Dressing+Tips+When+It%26%238217%3Bs+Really+Cold+Out&amp;url=https://tmrwstudio.me/atlas/default/2023/09/06/winter-dressing-tips-when-its-really-cold-out/" rel="nofollow" target="_blank" class="social-icon s-telegram">
    <span class="icon-svg">
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
      <path d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"/>
  </svg>
</span>
</a>
<a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://tmrwstudio.me/atlas/default/2023/09/06/winter-dressing-tips-when-its-really-cold-out/&amp;title=Winter+Dressing+Tips+When+It%26%238217%3Bs+Really+Cold+Out" rel="nofollow" target="_blank" class="social-icon s-linkedin">
    <span class="icon-svg">
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
      <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/>
  </svg>
</span>
</a>
<a href="https://www.tumblr.com/share/link?url=https://tmrwstudio.me/atlas/default/2023/09/06/winter-dressing-tips-when-its-really-cold-out/&amp;title=Winter+Dressing+Tips+When+It%26%238217%3Bs+Really+Cold+Out" rel="nofollow" target="_blank" class="social-icon s-tumblr collapse">
    <span class="icon-svg">
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
      <path d="M309.8 480.3c-13.6 14.5-50 31.7-97.4 31.7-120.8 0-147-88.8-147-140.6v-144H17.9c-5.5 0-10-4.5-10-10v-68c0-7.2 4.5-13.6 11.3-16 62-21.8 81.5-76 84.3-117.1.8-11 6.5-16.3 16.1-16.3h70.9c5.5 0 10 4.5 10 10v115.2h83c5.5 0 10 4.4 10 9.9v81.7c0 5.5-4.5 10-10 10h-83.4V360c0 34.2 23.7 53.6 68 35.8 4.8-1.9 9-3.2 12.7-2.2 3.5.9 5.8 3.4 7.4 7.9l22 64.3c1.8 5 3.3 10.6-.4 14.5z"/>
  </svg>
</span>
</a>
<a href="https://www.reddit.com/submit?url=https://tmrwstudio.me/atlas/default/2023/09/06/winter-dressing-tips-when-its-really-cold-out/&amp;resubmit=true&amp;title=Winter+Dressing+Tips+When+It%26%238217%3Bs+Really+Cold+Out" rel="nofollow" target="_blank" class="social-icon s-reddit collapse">
    <span class="icon-svg">
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
      <path d="M440.3 203.5c-15 0-28.2 6.2-37.9 15.9-35.7-24.7-83.8-40.6-137.1-42.3L293 52.3l88.2 19.8c0 21.6 17.6 39.2 39.2 39.2 22 0 39.7-18.1 39.7-39.7s-17.6-39.7-39.7-39.7c-15.4 0-28.7 9.3-35.3 22l-97.4-21.6c-4.9-1.3-9.7 2.2-11 7.1L246.3 177c-52.9 2.2-100.5 18.1-136.3 42.8-9.7-10.1-23.4-16.3-38.4-16.3-55.6 0-73.8 74.6-22.9 100.1-1.8 7.9-2.6 16.3-2.6 24.7 0 83.8 94.4 151.7 210.3 151.7 116.4 0 210.8-67.9 210.8-151.7 0-8.4-.9-17.2-3.1-25.1 49.9-25.6 31.5-99.7-23.8-99.7zM129.4 308.9c0-22 17.6-39.7 39.7-39.7 21.6 0 39.2 17.6 39.2 39.7 0 21.6-17.6 39.2-39.2 39.2-22 .1-39.7-17.6-39.7-39.2zm214.3 93.5c-36.4 36.4-139.1 36.4-175.5 0-4-3.5-4-9.7 0-13.7 3.5-3.5 9.7-3.5 13.2 0 27.8 28.5 120 29 149 0 3.5-3.5 9.7-3.5 13.2 0 4.1 4 4.1 10.2.1 13.7zm-.8-54.2c-21.6 0-39.2-17.6-39.2-39.2 0-22 17.6-39.7 39.2-39.7 22 0 39.7 17.6 39.7 39.7-.1 21.5-17.7 39.2-39.7 39.2z"/>
  </svg>
</span>
</a>
<a href="https://vk.com/share.php?title=Winter+Dressing+Tips+When+It%26%238217%3Bs+Really+Cold+Out&amp;url=https://tmrwstudio.me/atlas/default/2023/09/06/winter-dressing-tips-when-its-really-cold-out/" rel="nofollow" target="_blank" class="social-icon s-vkontakte collapse">
    <span class="icon-svg">
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
      <path d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z"/>
  </svg>
</span>
</a>
<a href="https://web.whatsapp.com/send?text=Winter+Dressing+Tips+When+It%26%238217%3Bs+Really+Cold+Out%20https://tmrwstudio.me/atlas/default/2023/09/06/winter-dressing-tips-when-its-really-cold-out/" rel="nofollow" class="flex-desktop-el social-icon s-whatsapp collapse">
    <span class="icon-svg">
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
      <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
  </svg>
</span>
</a>
<a href="https://wa.me/?text=Winter+Dressing+Tips+When+It%26%238217%3Bs+Really+Cold+Out%20https://tmrwstudio.me/atlas/default/2023/09/06/winter-dressing-tips-when-its-really-cold-out/" rel="nofollow" class="flex-mobile-el social-icon s-whatsapp collapse">
    <span class="icon-svg">
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
      <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
  </svg>
</span>
</a>
<a href="https://tmrwstudio.me/cdn-cgi/l/email-protection#56692523343c3335226b013f382233247d12243325253f38317d023f26257d013e33387d1f227364607364656e646761736514257d0433373a3a2f7d15393a327d19232270373b266d3439322f6b3e222226256c7979223b2421252223323f39783b337937223a37257932333037233a22796466646579666f79666079213f382233247b32243325253f38317b223f26257b213e33387b3f22257b2433373a3a2f7b35393a327b39232279" rel="nofollow" target="_blank" class="social-icon s-email collapse">
    <span class="icon-svg">
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
      <path d="M64 208.1L256 65.9 448 208.1v47.4L289.5 373c-9.7 7.2-21.4 11-33.5 11s-23.8-3.9-33.5-11L64 255.5V208.1zM256 0c-12.1 0-23.8 3.9-33.5 11L25.9 156.7C9.6 168.8 0 187.8 0 208.1V448c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V208.1c0-20.3-9.6-39.4-25.9-51.4L289.5 11C279.8 3.9 268.1 0 256 0z"/>
  </svg>
</span>
</a>
<a href="#" class="social-icon social-more"></a>
</div>
</div>
</div>
</div>

<div class="element-article article-related">
    <div data-elementor-type="wp-post" data-elementor-id="1136" class="elementor elementor-1136">

      <div class="element-article article-comments box-wrap">
          <div id="comments" class="entry-comments">
            <div id="respond" class="comment-respond">
              <?php
              if (comments_open() || get_comments_number()) :
                comments_template();
        endif;
        ?>
    </div>
</div>

</div>
<script data-cfasync="false" src="../../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="application/ld+json">{"@context":"https:\/\/schema.org","@type":"Article","dateCreated":"2023-09-06T08:50:09+00:00","datePublished":"2023-09-06T08:50:09+00:00","dateModified":"2023-09-22T11:26:17+00:00","headline":"Winter Dressing Tips When It&#8217;s Really Cold Out","name":"Winter Dressing Tips When It&#8217;s Really Cold Out","keywords":"child,creative,happy,Picked,sketch,wild","url":"https:\/\/tmrwstudio.me\/atlas\/default\/2023\/09\/06\/winter-dressing-tips-when-its-really-cold-out\/","description":"Venus has a runaway greenhouse effect. I kind of want to know what happened there because we\u2019re twirling knobs here on Earth without knowing the consequences of it. Mars once","copyrightYear":"2023","publisher":{"@id":"#Publisher","@type":"Organization","name":"Atlas Default","logo":{"@type":"ImageObject","url":"https:\/\/tmrwstudio.me\/atlas\/default\/wp-content\/uploads\/sites\/2\/2023\/10\/atlas.png"}},"sourceOrganization":{"@id":"#Publisher"},"copyrightHolder":{"@id":"#Publisher"},"mainEntityOfPage":{"@type":"WebPage","@id":"https:\/\/tmrwstudio.me\/atlas\/default\/2023\/09\/06\/winter-dressing-tips-when-its-really-cold-out\/"},"author":{"@type":"Person","name":"John Doe","url":"https:\/\/tmrwstudio.me\/atlas\/default\/author\/admin\/"},"articleSection":"Style","image":{"@type":"ImageObject","url":"https:\/\/tmrwstudio.me\/atlas\/default\/wp-content\/uploads\/sites\/2\/2023\/09\/a12.jpeg","width":696,"height":966}}</script> 
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

                                        <a class="viewAll" href="">
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
</article>
</div>
</div>
<div id="single-point-ajax" class="single-point-ajax"></div>
</div>
<?php
endwhile;
?>
</div>

<?php get_footer(); ?>
