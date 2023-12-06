<?php
get_header()


?>

<div id="content" class="site-content">

	<div id="primary" class="content-area">
		
		<div data-elementor-type="wp-page" data-elementor-id="41" class="elementor elementor-41">
			<div class="elementor-element elementor-element-998b0a9 box-cont e-flex e-con-boxed sticky-no is-skin bg-el bg-inherit bg-light nochange-no bg-no bg-no e-con e-parent" data-id="998b0a9" data-element_type="container" data-settings="{&quot;container_type&quot;:&quot;flex&quot;,&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
				<div class="e-con-inner">

					<div class="elementor-element elementor-element-f47c944 elementor-widget elementor-widget-s-postssmallslider" data-id="f47c944" data-element_type="widget" data-widget_type="s-postssmallslider.default">
						<div class="elementor-widget-container">
							<div id="th90-block_13" class="th90-block posts-slider box-wrap box-disable">
								<div class="block-slider">
									<div class="th90-slider" id="slider-13" data-settings='{&quot;loop&quot;:true,&quot;autoHeight&quot;:true,&quot;center&quot;:false,&quot;autoplay&quot;:true,&quot;nav&quot;:false,&quot;dots&quot;:false,&quot;fade&quot;:false,&quot;speed&quot;:500,&quot;delay&quot;:3000,&quot;t_view&quot;:3,&quot;view&quot;:4,&quot;ms_view&quot;:1,&quot;m_view&quot;:2,&quot;rtl&quot;:false,&quot;asNavFor&quot;:&quot;&quot;,&quot;vertical&quot;:false,&quot;focusOnSelect&quot;:false}'>
										<div class="slider-wrap">

											<div class="slick-slider">

												<?php 

												while (have_posts()) {
													the_post();
													$image_id=get_post_thumbnail_id();
													$image_url = wp_get_attachment_image_src($image_id,'img-polaroid');
													$image_url=$image_url[0];
													?>	
													<div class="slider-item">
														<div class="post-item cat-1">
															<article class="post-layout small1 post-small format-standard">
																<div class="post-small-thumbnail thumbnail-circle">
																	<div class="entry-thumbnail">
																		<a class="src-1_1" href="<?php the_permalink(); ?>" title="<?php the_title() ?>">
																			<div class="thumb-container thumb-100">
																				<img decoding="async" width="480" height="725" src="<?php echo $image_url ?>" class="lazyload attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
																			</div>
																		</a>
																	</div>
																</div>
																<div class="post-small-desc">
																	<div class="entry-header">
																		<h3 class="entry-title h6">
																			<a class="title-text" href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><?php the_title() ?></a>
																		</h3>
																	</div>
																	<div class="entry-meta no-icons">
																		<div class="meta-item meta-date">
																			<a class="meta-color" href="<?php the_permalink(); ?>">
																				<span class="info-text"><?php echo get_the_date(); ?></span>
																			</a>
																		</div>
																	</div>
																</div>
															</article>
														</div>
													</div>
												<?php } ?>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="elementor-element elementor-element-4f15c4a e-flex e-con-boxed sticky-no is-skin bg-el bg-inherit bg-light nochange-no bg-no bg-no box-no e-con e-parent" data-id="4f15c4a" data-element_type="container" data-settings="{&quot;container_type&quot;:&quot;flex&quot;,&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
				<div class="e-con-inner">
					<div class="elementor-element elementor-element-5e31a9a e-con-full e-flex sticky-no is-skin bg-el bg-inherit bg-light nochange-no bg-no bg-no e-con e-child" data-id="5e31a9a" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;container_type&quot;:&quot;flex&quot;}">
						<div class="elementor-element elementor-element-920bc14 elementor-widget elementor-widget-p-postsblog" data-id="920bc14" data-element_type="widget" data-widget_type="p-postsblog.default">
							<div class="elementor-widget-container">
								<div id="th90-block_14" class="th90-block posts-columns box-wrap box-disable" data-current="1">
									<div class="posts-container">
										<div class="posts-list post-list-columns">
											<?php
											$category_slug = 'sports';
											$category = get_category_by_slug($category_slug);
											if ($category) {
												$category_id = $category->term_id;
												$args = array(
													'cat'            => $category_id,
													'posts_per_page' => 1,
													'orderby'        => 'date',
													'order'          => 'DESC',
												);
												$latest_post_query = new WP_Query($args);
												if ($latest_post_query->have_posts()) {
													while ($latest_post_query->have_posts()) {
														$latest_post_query->the_post();
														$image_id=get_post_thumbnail_id();
														$image_url = wp_get_attachment_image_src($image_id,'img-polaroid');
														$image_url=$image_url[0];
														?>
														<div class="post-item cat-3">
															<article class="post-layout hero post-hero format-standard">
																<div class="entry-thumbnail">
																	<a class="src-ori" href="2023/09/06/surprising-benefits-of-honeydew-melon/index.html" title="Surprising Benefits of Honeydew Melon">
																		<div class="thumb-container" style="padding-bottom:66.6875%;">
																			<img decoding="async" width="480" height="320" src="<?php echo $image_url ?>" />
																		</div>
																	</a>
																</div>
																<div class="post-desc bg-dark desc-hero text-left">
																	<div class="post-desc-inner">
																		<div class="entry-header">
																			<div class="entry-cats">
																				<a class="post-cat info-text cat-text post-cat-3"><?php the_category() ?></a>
																			</div>
																			<h3 class="entry-title h5">
																				<a class="title-text" href="<?php the_permalink(); ?>" title="Surprising Benefits of Honeydew Melon"><?php the_title() ?></a>
																			</h3>
																		</div>
																		<div class="entry-meta no-icons">
																			<div class="meta-item meta-author author vcard meta-color">
																				<a href="" class="info-text author-name url fn" rel="author" title="Posts by John Doe"><?php the_author() ?></a>
																			</div>
																			<div class="meta-item meta-date">
																				<a class="meta-color" href="">
																					<span class="info-text"><?php echo get_the_date(); ?></span>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</article>
														</div>
														<?php
													}
													wp_reset_postdata();
												} else {
													echo 'No posts found.';
												}
											} else {
												echo 'Category not found.';
											}
											?>

											<?php
											$category_slug = 'trending-news';

											$category = get_category_by_slug($category_slug);

											if ($category) {
												$category_id = $category->term_id;

												$args = array(
													'cat'            => $category_id,
													'posts_per_page' => 1,
													'orderby'        => 'date',
													'order'          => 'DESC',
												);

												$latest_post_query = new WP_Query($args);

												if ($latest_post_query->have_posts()) {
													while ($latest_post_query->have_posts()) {
														$latest_post_query->the_post();
														$image_id=get_post_thumbnail_id();
														$image_url = wp_get_attachment_image_src($image_id,'img-polaroid');
														$image_url=$image_url[0];
														?>
														<div class="post-item cat-3">
															<article class="post-layout hero post-hero format-standard">
																<div class="entry-thumbnail">
																	<a class="src-ori" href="2023/09/06/surprising-benefits-of-honeydew-melon/index.html" title="Surprising Benefits of Honeydew Melon">
																		<div class="thumb-container" style="padding-bottom:66.6875%;">
																			<img decoding="async" width="480" height="320" src="<?php echo $image_url ?>" />
																		</div>
																	</a>
																</div>
																<div class="post-desc bg-dark desc-hero text-left">
																	<div class="post-desc-inner">
																		<div class="entry-header">
																			<div class="entry-cats">
																				<a class="post-cat info-text cat-text post-cat-3"><?php the_category() ?></a>
																			</div>
																			<h3 class="entry-title h5">
																				<a class="title-text" href="<?php the_permalink(); ?>" title="Surprising Benefits of Honeydew Melon"><?php the_title() ?></a>
																			</h3>
																		</div>
																		<div class="entry-meta no-icons">
																			<div class="meta-item meta-author author vcard meta-color">
																				<a href="" class="info-text author-name url fn" rel="author" title="Posts by John Doe"><?php the_author() ?></a>
																			</div>
																			<div class="meta-item meta-date">
																				<a class="meta-color" href="">
																					<span class="info-text"><?php echo get_the_date(); ?></span>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</article>
														</div>
														<?php
													}
													wp_reset_postdata();
												} else {
													echo 'No posts found.';
												}
											} else {
												echo 'Category not found.';
											}
											?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-cf36a7b e-con-full e-flex sticky-no is-skin bg-el bg-inherit bg-light nochange-no bg-no bg-no e-con e-child" data-id="cf36a7b" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;container_type&quot;:&quot;flex&quot;}">
						<div class="elementor-element elementor-element-c2e0962 progressabsolute-yes elementor-widget elementor-widget-s-postsslider" data-id="c2e0962" data-element_type="widget" data-widget_type="s-postsslider.default">


							<div class="elementor-widget-container">
								<div id="th90-block_15" class="th90-block posts-slider box-wrap box-disable">
									<div class="block-slider">
										<div class="th90-slider" id="slider-15" data-settings='{&quot;loop&quot;:true,&quot;autoHeight&quot;:false,&quot;center&quot;:false,&quot;autoplay&quot;:true,&quot;nav&quot;:false,&quot;dots&quot;:false,&quot;fade&quot;:true,&quot;speed&quot;:500,&quot;delay&quot;:4500,&quot;t_view&quot;:1,&quot;view&quot;:1,&quot;ms_view&quot;:1,&quot;m_view&quot;:1,&quot;rtl&quot;:false,&quot;asNavFor&quot;:&quot;&quot;,&quot;vertical&quot;:false,&quot;focusOnSelect&quot;:false}'>
											<div class="slider-wrap">
												<div class="slick-slider">
													<?php
													$args = array(
														'post_type' => 'post', 
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
															<div class="slider-item">
																<div class="post-item cat-2">
																	<article class="post-layout hero post-hero format-standard">
																		<div class="entry-thumbnail">
																			<a class="src-ori" href="<?php the_permalink(); ?>" title="Headsets Are Better if You&#8217;re Playing Games">
																				<div class="thumb-container" style="padding-bottom:100%;">
																					<img decoding="async" width="480" height="480" src="<?php echo $image_url ?>" />
																				</div>
																			</a>
																		</div>
																		<div class="post-desc bg-dark desc-hero text-left">
																			<div class="post-desc-inner">
																				<div class="entry-header">
																					<div class="entry-cats">
																						
																						<a class="post-cat info-text  post-cat-2"><?php the_category() ?>
																					</a>
																				</div>
																				<h3 class="entry-title h1">
																					<a class="title-text" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
																				</h3>
																			</div>
																			<div class="entry-meta no-icons">
																				<div class="meta-item meta-author author vcard meta-color">
																					<a  class="info-text author-name url fn" rel="author" title="Posts by John Doe"><?php the_author() ?>
																				</a>
																			</div>
																			<div class="meta-item meta-date">
																				<a class="meta-color">
																					<span class="info-text"><?php echo get_the_date(); ?>
																				</span>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</article>
													</div>
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
						<div class="slick-progress">
							<span></span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="elementor-element elementor-element-5e31a9a e-con-full e-flex sticky-no is-skin bg-el bg-inherit bg-light nochange-no bg-no bg-no e-con e-child" data-id="5e31a9a" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;container_type&quot;:&quot;flex&quot;}">
			<div class="elementor-element elementor-element-920bc14 elementor-widget elementor-widget-p-postsblog" data-id="920bc14" data-element_type="widget" data-widget_type="p-postsblog.default">
				<div class="elementor-widget-container">
					<div id="th90-block_14" class="th90-block posts-columns box-wrap box-disable" data-current="1">
						<div class="posts-container">

							<div class="posts-list post-list-columns">
								<?php
								$category_slug = 'entertainment';

								$category = get_category_by_slug($category_slug);

								if ($category) {
									$category_id = $category->term_id;

									$args = array(
										'cat'            => $category_id,
										'posts_per_page' => 1,
										'orderby'        => 'date',
										'order'          => 'DESC',
									);

									$latest_post_query = new WP_Query($args);

									if ($latest_post_query->have_posts()) {
										while ($latest_post_query->have_posts()) {
											$latest_post_query->the_post();
											$image_id=get_post_thumbnail_id();
											$image_url = wp_get_attachment_image_src($image_id,'img-polaroid');
											$image_url=$image_url[0];
											?>
											<div class="post-item cat-3">
												<article class="post-layout hero post-hero format-standard">
													<div class="entry-thumbnail">
														<a class="src-ori" href="2023/09/06/surprising-benefits-of-honeydew-melon/index.html" title="Surprising Benefits of Honeydew Melon">
															<div class="thumb-container" style="padding-bottom:66.6875%;">
																<img decoding="async" width="480" height="320" src="<?php echo $image_url ?>" />
															</div>
														</a>
													</div>
													<div class="post-desc bg-dark desc-hero text-left">
														<div class="post-desc-inner">
															<div class="entry-header">
																<div class="entry-cats">
																	<a class="post-cat info-text cat-text post-cat-3"><?php the_category() ?></a>
																</div>
																<h3 class="entry-title h5">
																	<a class="title-text" href="<?php the_permalink(); ?>" title="Surprising Benefits of Honeydew Melon"><?php the_title() ?></a>
																</h3>
															</div>
															<div class="entry-meta no-icons">
																<div class="meta-item meta-author author vcard meta-color">
																	<a href="" class="info-text author-name url fn" rel="author" title="Posts by John Doe"><?php the_author() ?></a>
																</div>
																<div class="meta-item meta-date">
																	<a class="meta-color" href="">
																		<span class="info-text"><?php echo get_the_date(); ?></span>
																	</a>
																</div>
															</div>
														</div>
													</div>
												</article>
											</div>
											<?php
										}
										wp_reset_postdata();
									} else {
										echo 'No posts found.';
									}
								} else {
									echo 'Category not found.';
								}
								?>


								<?php
								$category_slug = 'trending-news';

								$category = get_category_by_slug($category_slug);

								if ($category) {
									$category_id = $category->term_id;

									$args = array(
										'cat'            => $category_id,
										'posts_per_page' => 1,
									);

									$latest_post_query = new WP_Query($args);

									if ($latest_post_query->have_posts()) {
										while ($latest_post_query->have_posts()) {
											$latest_post_query->the_post();
											$image_id=get_post_thumbnail_id();
											$image_url = wp_get_attachment_image_src($image_id,'img-polaroid');
											$image_url=$image_url[0];
											?>
											<div class="post-item cat-3">
												<article class="post-layout hero post-hero format-standard">
													<div class="entry-thumbnail">
														<a class="src-ori" href="2023/09/06/surprising-benefits-of-honeydew-melon/index.html" title="Surprising Benefits of Honeydew Melon">
															<div class="thumb-container" style="padding-bottom:66.6875%;">
																<img decoding="async" width="480" height="320" src="<?php echo $image_url ?>" />
															</div>
														</a>
													</div>
													<div class="post-desc bg-dark desc-hero text-left">
														<div class="post-desc-inner">
															<div class="entry-header">
																<div class="entry-cats">
																	<a class="post-cat info-text cat-text post-cat-3"><?php the_category() ?></a>
																</div>
																<h3 class="entry-title h5">
																	<a class="title-text" href="<?php the_permalink(); ?>" title="Surprising Benefits of Honeydew Melon"><?php the_title() ?></a>
																</h3>
															</div>
															<div class="entry-meta no-icons">
																<div class="meta-item meta-author author vcard meta-color">
																	<a href="" class="info-text author-name url fn" rel="author" title="Posts by John Doe"><?php the_author() ?></a>
																</div>
																<div class="meta-item meta-date">
																	<a class="meta-color" href="">
																		<span class="info-text"><?php echo get_the_date(); ?></span>
																	</a>
																</div>
															</div>
														</div>
													</div>
												</article>
											</div>
											<?php
										}
										wp_reset_postdata();
									} else {
										echo 'No posts found.';
									}
								} else {
									echo 'Category not found.';
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="elementor-element elementor-element-6f653b5 e-flex e-con-boxed sticky-no is-skin bg-el bg-inherit bg-light nochange-no bg-no bg-no box-no e-con e-parent" data-id="6f653b5" data-element_type="container" data-settings="{&quot;container_type&quot;:&quot;flex&quot;,&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
	<div class="e-con-inner">
		<div class="elementor-element elementor-element-272dc5a e-con-full sticky-yes e-flex is-skin bg-el bg-inherit bg-light nochange-no bg-no bg-no e-con e-child" data-id="272dc5a" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;container_type&quot;:&quot;flex&quot;}">
			<div class="elementor-element elementor-element-7f6c2cd elementor-widget elementor-widget-g-postsgroup2" data-id="7f6c2cd" data-element_type="widget" data-widget_type="g-postsgroup2.default">
				<div class="elementor-widget-container">
					<div id="th90-block_17" class="th90-block block-group block-groupherosmall block-group4">
						<div class="widget-heading">
							<h4 class="title">Entertainment</h4>
										<!-- <div class="heading-elm">
											<div class="module-sorts">
												<a href="#" data-sort="date" class="module-sort active">Recent</a>
												<a href="#" data-sort="popular" class="module-sort">Popular</a>
											</div>
										</div> -->
									</div>
									<div class="posts-container">
										<div class="posts-list post-list-grids">
											<div class="post-item cat-1 post_b">
												<article class="post-layout group4 post-hero format-standard">
													<?php
													$categories = get_categories();
													if ($categories) {

														$first_category = $categories[0]->slug;
														$args = array(
															'post_type' => 'post', 
															'posts_per_page' => 1,
															'category_name' => $first_category,
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

																<div class="entry-thumbnail">
																	<a class="src-ori" href="<?php the_permalink(); ?>" title="Winter Dressing Tips When It&#8217;s Really Cold Out">
																		<div class="thumb-container" style="padding-bottom:150.9375%;">
																			<img decoding="async" width="480" height="725" src="
																			<?php echo $image_url ?>
																		?>" class="lazyload attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
																	</div>
																</a>
															</div>

															<div class="post-desc bg-dark desc-hero text-left">
																<div class="post-desc-inner">
																	<div class="entry-header">
																		<div class="entry-cats">
																			<a class="post-cat info-text cat-text post-cat-1" href=""><?php the_category() ?>
																		</a>
																	</div>
																	<h3 class="entry-title h3">
																		<a class="title-text" href="<?php the_permalink(); ?>" title="Winter Dressing Tips When It&#8217;s Really Cold Out">
																			<?php the_title() ?>
																		</a>
																	</h3>
																</div>
																<div class="entry-meta no-icons">
																	<div class="meta-item meta-author author vcard meta-color">
																		<a href="" class="info-text author-name url fn" rel="author" title="Posts by John Doe">
																			<?php the_author() ?>
																		</a>
																	</div>
																	<div class="meta-item meta-date">
																		<a class="meta-color" href="<?php the_permalink(); ?>">
																			<span class="info-text"><?php echo get_the_date() ?></span>
																		</a>
																	</div>
																</div>
															</div>
														</div>
														<?php
													endwhile;
													wp_reset_postdata();
												else :
													echo 'No posts found in the category.';
												endif;
											} else {
												echo 'No categories found.';
											}
											?>
										</article>
									</div>
									<div class="box-wrap have-heading">
										<div class="post-list-childs">
											<?php
											$categories = get_categories();
											if ($categories) {

												// $first_category = $categories[0]->slug;
												$args = array(
													'post_type' => 'post', 
													'posts_per_page' => 4,
													// 'category_name' => $first_category,
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
														<div class="post-item cat-1 post_s">
															<article class="post-layout group4 post-small format-standard">
																<div class="post-small-thumbnail thumbnail-circle">
																	<div class="entry-thumbnail">
																		<a class="src-1_1" href="<?php the_permalink(); ?>" title="Top Men&#8217;s Fashion Trends From Spring">
																			<div class="thumb-container thumb-100">
																				<img decoding="async" width="390" height="390" src=" 
																				<?php echo $image_url ?>
																				" class="lazyload attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
																			</div>
																		</a>
																	</div>
																</div>
																<div class="post-small-desc">
																	<div class="entry-header">
																		<div class="entry-cats">
																			<a class="post-cat info-text cat-text post-cat-1" href="">
																				<?php the_category() ?>
																			</a>
																		</div>
																		<h3 class="entry-title h6">
																			<a class="title-text" href="<?php the_permalink(); ?>" title="Top Men&#8217;s Fashion Trends From Spring">
																				<?php the_title() ?> 
																			</a>
																		</h3>
																	</div>
																</div>
															</article>
														</div>
														<?php
													endwhile;
													wp_reset_postdata();
												else :
													echo 'No posts found in the category.';
												endif;
											} else {
												echo 'No categories found.';
											}
											?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-49dde2a elementor-widget elementor-widget-s-sliderthumb2" data-id="49dde2a" data-element_type="widget" data-widget_type="s-sliderthumb2.default">
					<div class="elementor-widget-container">
						<div id="th90-block_18" class="th90-block box-wrap box-disable have-heading">
							<div class="block-slider slider-thumbs2">
								<div class="widget-heading">
									<h4 class="title">Trending News</h4>
									<div class="heading-elm">
										<div class="slider-arrow"></div>
									</div>
								</div>
								<div class="post-item cat-2 post_b">
									<?php
									$categories = get_categories();
									if ($categories) {

										$first_category = $categories[2]->slug;
										$args = array(
											'post_type' => 'post', 
											'posts_per_page' => 1,
											'category_name' => $first_category,
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
												<article class="post-layout hero post-hero format-standard">

													<div class="entry-thumbnail">
														<a class="src-ori" href="2023/09/06/headsets-are-better-if-youre-playing-games/index.html" title="Headsets Are Better if You&#8217;re Playing Games">
															<div class="thumb-container" style="padding-bottom:100%;">
																<img decoding="async" width="480" height="480" 
																src="<?php echo $image_url ?>" />
															</div>
														</a>
													</div>
													<div class="post-desc bg-dark desc-hero text-left">
														<div class="post-desc-inner">
															<div class="entry-header">
																<div class="entry-cats">
																	<a class="post-cat info-text post-cat-2" href=""><?php the_category() ?></a>
																</div>
																<h3 class="entry-title h4">
																	<a class="title-text" href="2023/09/06/headsets-are-better-if-youre-playing-games/index.html" title="Headsets Are Better if You&#8217;re Playing Games"><?php the_title() ?></a>
																</h3>
															</div>
															<div class="entry-meta no-icons">
																<div class="meta-item meta-author author vcard meta-color">
																	<a href="author/admin/index.html" class="info-text author-name url fn" rel="author" title="Posts by John Doe"><?php the_author() ?></a>
																</div>
																<div class="meta-item meta-date">
																	<a class="meta-color" href="2023/09/06/headsets-are-better-if-youre-playing-games/index.html">
																		<span class="info-text"><?php echo get_the_date(); ?></span>
																	</a>
																</div>
															</div>
															<div class="th90-slider" id="slider-thumb-18" data-settings='{&quot;loop&quot;:false,&quot;autoplay&quot;:false,&quot;autoHeight&quot;:false,&quot;nav&quot;:true,&quot;delay&quot;:5000,&quot;t_view&quot;:2,&quot;view&quot;:2,&quot;ms_view&quot;:1,&quot;m_view&quot;:2,&quot;speed&quot;:500,&quot;rtl&quot;:false,&quot;center&quot;:false,&quot;dots&quot;:false,&quot;fade&quot;:false,&quot;asNavFor&quot;:&quot;&quot;,&quot;vertical&quot;:false,&quot;focusOnSelect&quot;:false}'>
																
															</div>
														</div>
													</div>
													
												</article>
												<?php
											endwhile;
											wp_reset_postdata();
										else :
											echo 'No posts found in the category.';
										endif;
									} else {
										echo 'No categories found.';
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="elementor-element elementor-element-6a703ec elementor-widget elementor-widget-p-postsblog" data-id="6a703ec" data-element_type="widget" data-widget_type="p-postsblog.default">
					<div class="elementor-widget-container">
						<div id="th90-block_19" class="th90-block posts-columns box-wrap have-heading" data-current="1">
							<div class="widget-heading">
								<h4 class="title">Latest</h4>
								<div class="heading-elm">
									<a class="viewAll" href="#"> View All </a>
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
												<article class="post-layout list1 post-vertical-center post-list format-standard">
													<div class="post-list-thumbnail">
														<div class="entry-thumbnail">
															<a class="src-custom" href="" title="Winter Dressing Tips When It&#8217;s Really Cold Out">
																<div class="thumb-container thumb-custom">
																	<img decoding="async" width="480" height="725"  class="lazyload attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" src="<?php echo $image_url ?>" />
																</div>
															</a>
														</div>
													</div>
													<div class="post-list-desc text-left">
														<div class="post-desc-inner">
															<div class="entry-header">
																<div class="entry-cats">
																	<a class="post-cat info-text cat-text post-cat-1" href=""><?php the_category() ?></a>
																</div>
																<h3 class="entry-title h3">
																	<a class="title-text" href="" title="Winter Dressing Tips When It&#8217;s Really Cold Out"><?php the_title(); ?></a>
																</h3>
															</div>
															<div class="entry-excerpt"> <?php the_content(); ?></div>
															<div class="entry-meta no-icons">
																<div class="meta-item meta-author meta-modern author vcard meta-color">
																	<div class="author-ava" data-author="J">
																		<img decoding="async" alt='' src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src='https://secure.gravatar.com/avatar/06ac9198ed2a1093c67c32334849eea6?s=35&#038;d=mm&#038;r=g' data-srcset='https://secure.gravatar.com/avatar/06ac9198ed2a1093c67c32334849eea6?s=70&#038;d=mm&#038;r=g 2x' class='lazyload avatar avatar-35 photo' height='35' width='35' />
																	</div>
																	<div class="meta-modern-desc">
																		<a href="author/admin/index.html" class="info-text author-name url fn" rel="author" title="Posts by John Doe"><?php the_author() ?></a>
																		<span class="info-text"><?php echo get_the_date(); ?></span>
																	</div>
																</div>
																<div class="meta-item meta-more">
																	<a href="<?php the_permalink(); ?>" class="info-text">Keep Reading</a>
																</div>
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
									<!-- <div class="box-disable nav-wrap nav-wrap-load-more text-left">
										<div class="nav-wrap-inner">
											<div class="button module-pagi btn-pagi show-more btn-accent load-more next-posts" data-text="Load More">
												<span class="more-text text-btn">Load More</span>
											</div>
										</div>
									</div> -->
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-4570e18 elementor-widget elementor-widget-s-postsslider" data-id="4570e18" data-element_type="widget" data-widget_type="s-postsslider.default">
							<div class="elementor-widget-container">
								<div id="th90-block_20" class="th90-block posts-slider box-wrap have-heading">
									<div class="block-slider nav-on_heading">
										<div class="th90-slider" id="slider-20" data-settings='{&quot;loop&quot;:false,&quot;autoHeight&quot;:false,&quot;center&quot;:false,&quot;autoplay&quot;:false,&quot;nav&quot;:true,&quot;dots&quot;:false,&quot;fade&quot;:false,&quot;speed&quot;:500,&quot;delay&quot;:3000,&quot;t_view&quot;:3,&quot;view&quot;:3,&quot;ms_view&quot;:1,&quot;m_view&quot;:3,&quot;rtl&quot;:false,&quot;asNavFor&quot;:&quot;&quot;,&quot;vertical&quot;:false,&quot;focusOnSelect&quot;:false}'>
											<div class="widget-heading">
												<h4 class="title">Entertainment</h4>
												<div class="heading-elm">
													<div class="slider-arrow"></div>
												</div>
											</div>
											<div class="slider-wrap">
												<div class="slick-slider">
													<?php
													$categories = get_categories();
													if ($categories) {

														$first_category = $categories[0]->slug;
														$args = array(
															'post_type' => 'post', 
															'posts_per_page' => 3,
															'category_name' => $first_category,
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
																<div class="slider-item">
																	<div class="post-item cat-4">
																		<article class="post-layout medium1 post-medium format-audio">
																			<div class="entry-thumbnail">
																				<a class="src-4_3" href="<?php the_permalink(); ?>" title="Fashion, Tips, Trends and Celebrity Style">
																					<div class="thumb-container thumb-75">
																						<img decoding="async" width="480" height="289" src="<?php echo $image_url ?>"/>
																					</div>
																				</a>
																				<div class="f-icon f-audio">
																					<span class="icon-svg">
																						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
																							<path d="M20 3v14a4 4 0 1 1-2-3.465V5H9v12a4 4 0 1 1-2-3.465V3h13ZM5 19a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm11 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
																						</svg>
																					</span>
																				</div>
																			</div>
																			<div class="post-desc text-left">
																				<div class="post-desc-inner">
																					<div class="entry-header">
																						<div class="entry-cats">
																							<a class=""><?php the_category() ?></a>
																						</div>
																						<h3 class="entry-title h5">
																							<a class="title-text" href="<?php the_permalink(); ?>" title="Fashion, Tips, Trends and Celebrity Style"><?php the_title(); ?></a>
																						</h3>
																					</div>
																					<div class="entry-meta no-icons">
																						<div class="meta-item meta-author author vcard meta-color">
																							<a href="<?php the_permalink(); ?>" class="info-text author-name url fn" rel="author" title="Posts by John Doe"><?php the_author() ?></a>
																						</div>
																						<div class="meta-item meta-date">
																							<a class="meta-color" href="<?php the_permalink(); ?>">
																								<span class="info-text"><?php echo get_the_date(); ?></span>
																							</a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</article>
																	</div>
																</div>
																<?php
															endwhile;
															wp_reset_postdata();
														else :
															echo 'No posts found in the category.';
														endif;
													} else {
														echo 'No categories found.';
													}
													?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							



						</div>
						<div class="elementor-element elementor-element-bf2c341 elementor-widget elementor-widget-g-postsgroup" data-id="bf2c341" data-element_type="widget" data-widget_type="g-postsgroup.default">
							<div class="elementor-widget-container">
								<div id="th90-block_21" class="th90-block block-group block-groupmediumsmall block-group2 box-wrap have-heading">
									<div class="widget-heading">
										<h4 class="title">Sports</h4>
										<div class="heading-elm">
											<a class="viewAll" href="#"> View All </a>
										</div>
									</div>
									<div class="posts-container">
										<div class="posts-list post-list-grids">
											<?php
											$categories = get_categories();
											if ($categories) {

												$first_category = $categories[1]->slug;
												$args = array(
													'post_type' => 'post', 
													'posts_per_page' => 4,
													'category_name' => $first_category,
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
														<div class="post-item cat-1 post_b">
															<article class="post-layout group2 post-medium format-standard">
																<div class="entry-thumbnail">
																	<a class="src-4_3" href="<?php the_permalink(); ?>" title="Winter Dressing Tips When It&#8217;s Really Cold Out">
																		<div class="thumb-container thumb-75">
																			<img decoding="async" width="480" height="725" src="							<?php echo $image_url ?>"
																			class="lazyload attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""/>
																		</div>
																	</a>
																</div>
																<div class="post-desc text-left">
																	<div class="post-desc-inner">
																		<div class="entry-header">
																			<div class="entry-cats">
																				<a class="post-cat info-text cat-text post-cat-1" href=""><?php the_category() ?>
																			</a>
																		</div>
																		<h3 class="entry-title h4">
																			<a class="title-text" href="<?php the_permalink(); ?>" title="Winter Dressing Tips When It&#8217;s Really Cold Out"><?php the_title() ?></a>
																		</h3>
																	</div>
																	<div class="entry-meta no-icons">
																		<div class="meta-item meta-author author vcard meta-color">
																			<a href="author/admin/index.html" class="info-text author-name url fn" rel="author" title="Posts by John Doe"><?php the_author() ?></a>
																		</div>
																		<div class="meta-item meta-date">
																			<a class="meta-color" href="<?php the_permalink(); ?>">
																				<span class="info-text"><?php echo get_the_date() ?></span>
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
											else :
												echo 'No posts found in the category.';
											endif;
										} else {
											echo 'No categories found.';
										}
										?>

										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-9b0ecae e-con-full sticky-yes e-flex is-skin bg-el bg-inherit bg-light nochange-no bg-no bg-no e-con e-child" data-id="9b0ecae" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;container_type&quot;:&quot;flex&quot;}">
					<div class="elementor-element elementor-element-cda8c34 elementor-widget elementor-widget-p-postssmall" data-id="cda8c34" data-element_type="widget" data-widget_type="p-postssmall.default">
						<div class="elementor-widget-container">
							<div id="th90-block_22" class="th90-block posts-columns box-wrap have-heading" data-current="1">
								<div class="widget-heading">
									<h4 class="title">Trending News</h4>
									<div class="heading-elm">
										<a class="viewAll" href="#"> View All </a>
									</div>
								</div>
								<div class="posts-container">
									<div class="posts-list post-list-columns">
										<?php
										$categories = get_categories();
										if ($categories) {

											$first_category = $categories[2]->slug;
											$args = array(
												'post_type' => 'post', 
												'posts_per_page' => 5,
												'category_name' => $first_category,
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
																	<a class="src-1_1" href="<?php the_permalink(); ?>" title="Winter Dressing Tips When It&#8217;s Really Cold Out">
																		<div class="thumb-container thumb-100">
																			<img decoding="async" width="480" height="725"
																			src="																		<?php echo $image_url ?>
																			" class="lazyload attachment-post-thumbnail 
																			size-post-thumbnail wp-post-image" alt=""/>
																		</div>
																	</a>
																</div>
															</div>
															<div class="post-small-desc">
																<div class="entry-header">
																	<h3 class="entry-title h6">
																		<a class="title-text" href="<?php the_permalink(); ?>" title="">
																			<?php the_title() ?>
																		</a>
																	</h3>
																</div>
																<div class="entry-meta no-icons">
																	<div class="meta-item meta-date">
																		<a class="meta-color" href="<?php the_permalink(); ?>">
																			<span class="info-text"><?php echo get_the_date() ?></span>
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
												echo 'No posts found in the category.';
											endif;
										} else {
											echo 'No categories found.';
										}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-8459b6c elementor-widget elementor-widget-w-tax" data-id="8459b6c" data-element_type="widget" data-widget_type="w-tax.default">
						<div class="elementor-widget-container">
							<div id="th90-block_23" class="th90-block block-tax box-wrap box-disable have-heading">
								<div class="widget-heading">
									<h4 class="title">Categories</h4>
								</div>
								<div class="tax-hero">
									<?php
									$categories = get_categories();

									if ($categories) {
										foreach ($categories as $category) {
											$category_link = get_category_link($category->cat_ID);
											?>




											<div class="term-item term-1">
												<div class="post-hero">
													<div class="thumb-container" style="padding-bottom:150.9375%;">
														<!-- <img decoding="async" width="200" height="302" src="<?php echo $image_url ?>" class="lazyload attachment-thumbnail size-thumbnail" alt="" /> -->
													</div>
													<div class="post-desc bg-dark desc-hero">
														<div class="term-desc">
															<div class="term-title"> 														<?php echo "<a href='{$category_link}'>{$category->name}</a>"; ?>
														</div>
														<div class="term-count"> <?php echo esc_html($category->count) ?> </div>
													</div>
												</div>
											</div>
										</div>
										<?php 
									}
								} else {
									echo 'No categories found.';
								}
								?>
							</div>
						</div>
					</div>
				</div>

				<div class="elementor-element elementor-element-7d5a290 elementor-widget elementor-widget-p-postssmall" data-id="7d5a290" data-element_type="widget" data-widget_type="p-postssmall.default">
					<div class="elementor-widget-container">
						<div id="th90-block_24" class="th90-block posts-columns post_sep-yes box-wrap have-heading" data-current="1">
							<div class="widget-heading">
								<h4 class="title">Entertainment</h4>
								<div class="heading-elm">
									<a class="viewAll" href="#"> View All </a>
								</div>
							</div>
							<div class="posts-container">
								<div class="posts-list post-list-columns">
									<?php
									$categories = get_categories();
									if ($categories) {

										$first_category = $categories[0]->slug;
										$args = array(
											'post_type' => 'post', 
											'posts_per_page' => 5,
											'category_name' => $first_category,
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
														<!-- <div class="post-count">01</div> -->
														<div class="post-small-desc">
															<div class="entry-header">
																<h3 class="entry-title h6">
																	<a class="title-text" href="<?php the_permalink(); ?>" title="Winter Dressing Tips When It&#8217;s Really Cold Out"><?php the_title() ?></a>
																</h3>
															</div>
															<div class="entry-meta no-icons">
																<div class="meta-item meta-author author vcard meta-color">
																	<a href="author/admin/index.html" class="info-text author-name url fn" rel="author" title="Posts by John Doe"><?php the_author() ?></a>
																</div>
																<div class="meta-item meta-date">
																	<a class="meta-color" href="<?php the_permalink(); ?>">
																		<span class="info-text"><?php echo get_the_date(); ?></span>
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
											echo 'No posts found in the category.';
										endif;
									} else {
										echo 'No categories found.';
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-75d9faa elementor-widget elementor-widget-w-socialcounters" data-id="75d9faa" data-element_type="widget" data-widget_type="w-socialcounters.default">
					<div class="elementor-widget-container">
						<div id="th90-block_25" class="th90-block block-counters counters-grid box-wrap have-heading">
							<div class="widget-heading">
								<h4 class="title">Join Us</h4>
							</div>
							<div class="social-counters">
								<a class="social-counter" href="#" target="_blank">
									<span class="counter-icon social-icon counter-facebook">
										<span class="icon-svg">
											<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
												<path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
											</svg>
										</span>
									</span>
									<span class="counter-desc">
										<span class="counter-text">Facebook</span>
										<span class="cmeta cmeta-facebook"> 42.4K </span>
									</span>
								</a>
								<a class="social-counter" href="#" target="_blank">
									<span class="counter-icon social-icon counter-twitter">
										<span class="icon-svg">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
												<path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8l164.9-188.5L26.8 48h145.6l100.5 132.9L389.2 48zm-24.8 373.8h39.1L151.1 88h-42l255.3 333.8z" />
											</svg>
										</span>
									</span>
									<span class="counter-desc">
										<span class="counter-text">Twitter</span>
										<span class="cmeta cmeta-twitter"> 36.2K </span>
									</span>
								</a>
								<a class="social-counter" href="#" target="_blank">
									<span class="counter-icon social-icon counter-instagram">
										<span class="icon-svg">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
												<path d="M13.028 2.001a78.82 78.82 0 0 1 2.189.022l.194.007c.224.008.445.018.712.03 1.064.05 1.79.218 2.427.465.66.254 1.216.598 1.772 1.154a4.908 4.908 0 0 1 1.153 1.771c.247.637.415 1.364.465 2.428.012.266.022.488.03.712l.006.194a79 79 0 0 1 .023 2.188l.001.746v1.31a78.836 78.836 0 0 1-.023 2.189l-.006.194c-.008.224-.018.445-.03.712-.05 1.064-.22 1.79-.466 2.427a4.884 4.884 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.427.465-.267.012-.488.022-.712.03l-.194.006a79 79 0 0 1-2.189.023l-.746.001h-1.309a78.836 78.836 0 0 1-2.189-.023l-.194-.006a60.64 60.64 0 0 1-.712-.03c-1.064-.05-1.79-.22-2.428-.466a4.89 4.89 0 0 1-1.771-1.153 4.904 4.904 0 0 1-1.154-1.772c-.247-.637-.415-1.363-.465-2.427a74.367 74.367 0 0 1-.03-.712l-.005-.194A79.053 79.053 0 0 1 2 13.028v-2.056a78.82 78.82 0 0 1 .022-2.188l.007-.194c.008-.224.018-.446.03-.712.05-1.065.218-1.79.465-2.428A4.88 4.88 0 0 1 3.68 3.68 4.897 4.897 0 0 1 5.45 2.525c.638-.247 1.363-.415 2.428-.465l.712-.03.194-.005A79.053 79.053 0 0 1 10.972 2h2.056Zm-1.028 5A5 5 0 1 0 12 17a5 5 0 0 0 0-10Zm0 2A3 3 0 1 1 12.001 15a3 3 0 0 1 0-6Zm5.25-3.5a1.25 1.25 0 0 0 0 2.498 1.25 1.25 0 0 0 0-2.5Z" />
											</svg>
										</span>
									</span>
									<span class="counter-desc">
										<span class="counter-text">Instagram</span>
										<span class="cmeta cmeta-instagram"> 24.6K </span>
									</span>
								</a>
								<a class="social-counter" href="#" target="_blank">
									<span class="counter-icon social-icon counter-twitch">
										<span class="icon-svg">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
												<path d="M391.17,103.47H352.54v109.7h38.63ZM285,103H246.37V212.75H285ZM120.83,0,24.31,91.42V420.58H140.14V512l96.53-91.42h77.25L487.69,256V0ZM449.07,237.75l-77.22,73.12H294.61l-67.6,64v-64H140.14V36.58H449.07Z" />
											</svg>
										</span>
									</span>
									<span class="counter-desc">
										<span class="counter-text">Twitch</span>
										<span class="cmeta cmeta-twitch"> 83.4K </span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-4403c83 progressabsolute-no elementor-widget elementor-widget-w-quotes" data-id="4403c83" data-element_type="widget" data-widget_type="w-quotes.default">
					<div class="elementor-widget-container">
						<div id="th90-block_26" class="th90-block block-quotes box-solid box-wrap have-heading">
							<div class="block-slider">
								<div class="th90-slider th90-quotes" id="slider-26" data-settings='{&quot;loop&quot;:false,&quot;autoHeight&quot;:false,&quot;center&quot;:false,&quot;autoplay&quot;:false,&quot;nav&quot;:false,&quot;dots&quot;:false,&quot;fade&quot;:false,&quot;speed&quot;:500,&quot;delay&quot;:3000,&quot;t_view&quot;:1,&quot;view&quot;:1,&quot;ms_view&quot;:1,&quot;m_view&quot;:1,&quot;rtl&quot;:false,&quot;asNavFor&quot;:&quot;&quot;,&quot;vertical&quot;:false,&quot;focusOnSelect&quot;:false}'>
									<div class="widget-heading">
										<h4 class="title">Quotes</h4>
									</div>
									<div class="slick-slider">
										<div class="slider-item">
											<div class="quote-item">
												<span class="quote-text">
													<span class="icon-svg">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
															<path fill="none" stroke="currentColor" d="M17 11a4 4 0 1 1 4-4c0 1.473-1.333 6.14-4 14h-2l2-10ZM7 11a4 4 0 1 1 4-4c0 1.473-1.333 6.14-4 14H5l2-10Z" />
														</svg>
													</span> This is where I have wasted the best years of my life. </span>
													<span class="quote-author">Greta Garbo</span>
												</div>
											</div>
											<div class="slider-item">
												<div class="quote-item">
													<span class="quote-text">
														<span class="icon-svg">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
																<path fill="none" stroke="currentColor" d="M17 11a4 4 0 1 1 4-4c0 1.473-1.333 6.14-4 14h-2l2-10ZM7 11a4 4 0 1 1 4-4c0 1.473-1.333 6.14-4 14H5l2-10Z" />
															</svg>
														</span> This is where I have wasted the best years of my life. </span>
														<span class="quote-author">Greta Garbo</span>
													</div>
												</div>
												<div class="slider-item">
													<div class="quote-item">
														<span class="quote-text">
															<span class="icon-svg">
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
																	<path fill="none" stroke="currentColor" d="M17 11a4 4 0 1 1 4-4c0 1.473-1.333 6.14-4 14h-2l2-10ZM7 11a4 4 0 1 1 4-4c0 1.473-1.333 6.14-4 14H5l2-10Z" />
																</svg>
															</span> This is where I have wasted the best years of my life. </span>
															<span class="quote-author">Greta Garbo</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="slick-progress">
											<span></span>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-ea97389 elementor-widget elementor-widget-w-comments" data-id="ea97389" data-element_type="widget" data-widget_type="w-comments.default">
								<div class="elementor-widget-container">
									<div id="th90-block_27" class="th90-block block-comments box-wrap have-heading">
										<div class="widget-heading">
											<h4 class="title">Recent Comments</h4>
										</div>
										<div class="rcomments posts-list clearfix post-list-columns">
											<?php
											$comments_args = array(
												'number'      => 5,    
												'status'      => 'approve',
												'post_status' => 'publish',
											);

											$comments_query = new WP_Comment_Query;
											$comments = $comments_query->query($comments_args);

											foreach ($comments as $comment) :
												?>
												<div class="post-item">
													<div class="rcomment">
														<div class="rcomment-thumb">
															<span class="noava"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" id="user">
																<path fill="#fff" fill-rule="evenodd" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10Zm3-12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 7a7.489 7.489 0 0 1 6-3 7.489 7.489 0 0 1 6 3 7.489 7.489 0 0 1-6 3 7.489 7.489 0 0 1-6-3Z" clip-rule="evenodd"></path>
															</svg></span>
														</div>
														<div class="rcomment-desc entry-meta no-icons">
															<div class="meta-item meta-author">
																<a href="<?php echo esc_url(get_comment_link($comment)); ?>"><?php echo esc_html(get_comment_author()); ?> : <?php echo esc_html($comment->comment_content); ?></a>
															</div>
															<!-- <div class="meta-item meta-date">2 months ago</div> -->
														</div>
													</div>
												</div>
												<?php
											endforeach;
											?>
											

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php 
	get_footer()
?>