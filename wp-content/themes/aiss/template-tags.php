<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон сторінки тегів
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package aiss
	 */
	get_header(); ?>

<?php

	$blogMainTitle = carbon_get_theme_option('aiss_option_blog_main_title');
	$blogMainImage = carbon_get_theme_option('aiss_option_blog_main_image');

	if ( $blogMainImage && $blogMainTitle ):

		?>
		<section id="tz-image-wrapper" class="blog-main-screen">
			<div class="container-fluid">
				<div class="row" id="image">
					<div id="tz-position-1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<div class="tz-module module " id="Mod439">
							<div class="module-inner">
								<div class="module-ct">
									<div class="custom"  >
										<div class="desktop tst2" style="background: url(<?php echo $blogMainImage;?>) 100% 100% no-repeat; background-size: cover; height: 200px; padding: 0px;">
											<div class="row" style="text-align: center;">
												<div style="width: 800px; margin: 0px auto;">
													<h1 style="font-weight: bold; font-size: 50px; text-transform: uppercase; border: 0px solid white; color: white; padding: 10px; margin-bottom: 5px; margin-top: 70px;"><?php echo $blogMainTitle;?></h1>
												</div>
											</div>
										</div>
										<div class="mobile" style="display: none; height: 100px; background: url(<?php echo $blogMainImage;?>) 100% 100% no-repeat; background-size: cover;">
											<div class="row">
												<div class="col-md-12" style="text-align: center; margin: 0px;">
													<h2 style="font-weight: bold; font-size: 19px; text-transform: uppercase; border: 0px solid white; color: white; padding: 7px; margin-bottom: 5px; margin-top: 30px;"><?php echo $blogMainTitle;?></h2>
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
		</section>
	<?php endif;?>

<?php get_template_part('template-parts/breadcrumbs');?>

<?php

	$url = $_SERVER['REQUEST_URI'];

	$tagId = parse_url($url, PHP_URL_QUERY);

	$term = get_term_by( 'id', $tagId, 'blog_tag');
	$term_name = $term->name;

?>

	<section id="tz-main-body-wrapper" class="blob-main-content">
		<div class="container"><div class="row" id="main-body">
				<div id="tz-message-area" class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
					<section id="tz-main-wrapper" class=" ">
						<div class="row" id="main">
							<div id="tz-component-area" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
								<section id="tz-component-wrapper"><div id="tz-component">
										<div class="TzTag  masonry" >
											<div class="TzTagInner">
												<h2 class="TzTagHeading">
													Tag: <?php echo $term_name;?>
												</h2>
												<div class="clr"></div>
												<?php
													$blogArgs = array(
														'tax_query' => array(
															array(
																'taxonomy' => 'blog_tag',
																'field' => 'id',
																'lang' => false,
																'suppress_filters' => false,
																'terms' => $tagId

															)
														),
														'posts_per_page' => -1,
														'orderby' 	 => 'date',
														'post_type'  => 'blog',
														'post_status'    => 'publish',
													);

													$blogList = new WP_Query( $blogArgs );

													if ( $blogList->have_posts() ) :

														while ( $blogList->have_posts() ) : $blogList->the_post();
															?>

															<div class="TzItemsLeading tag-list-item">
																<div class="TzLeading leading-0" >
																	<div class="TzTagMedia">
																		<div class="tz_portfolio_image" style="position: relative;">
																			<a href="<?php the_permalink() ;?>">
																				<img src="<?php the_post_thumbnail_url();?>"
																				     alt="<?php the_title();?>"
																				     title="<?php the_title();?>"
																				>
																			</a>
																		</div>
																	</div>
																	<div class="muted TzTagArticleInfo">
									                <span class="TzTagDate">
											            <span class="date" itemprop="dateCreated">
											                Створено: <?php echo get_the_date('d.m.Y');?> <?php echo get_the_time('H:m');?>
											            </span>
											            <span class="TzLine">|</span>
											        </span>
																	</div>

																	<h3 class="TzTagTitle" >
																		<a href="<?php the_permalink();?>">
																			<?php the_title();?>
																		</a>
																	</h3>
																	<div class="TzDescription" itemprop="description">
																		<h1 class="main-color" style="text-transform: uppercase; font-size: 24px;"><?php the_title();?></h1>
																		<?php the_excerpt();?>
																	</div>
																	<a class="btn TzReadmore"
																	   href="<?php the_permalink();?>">
																		Детальніше...
																	</a>
																	<div class="clr"></div>
																</div>
															</div>
														<?php endwhile;?>
													<?php endif; ?>
												<?php wp_reset_postdata(); ?>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</section>
				</div>

				<aside id="tz-right" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
					<?php

						$terms = get_terms( array(
							'taxonomy'   => 'blog_tag',
							'hide_empty' => false,
						) );

						if ( $terms ):
							?>
							<div class="tz-module module " id="Mod223">
								<div class="module-inner">
									<?php
										$blogPopularTag = carbon_get_theme_option('aiss_option_blog_popular_tags');
										$blogPopularPosts = carbon_get_theme_option('aiss_option_blog_popular_posts');
									?>
									<h3 class="module-title widget-head"><?php echo $blogPopularTag;?></h3>
									<div class="module-ct">
										<div class="widget tags-w fx" style="opacity: 1!important;" data-animate="fadeInRight">
											<div class="widget-content">
												<div class="tags">
													<?php foreach( $terms as $tag ):?>
														<a href="<?php echo get_home_url('/');?>/polezno-znat/tags?<?php echo $tag->term_id;?>" class="blob-tag"><?php echo $tag->name;?></a>
													<?php endforeach;?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endif;?>
					<div class="tz-module module " id="Mod220">
						<div class="module-inner">
							<h3 class="module-title widget-head"><?php echo $blogPopularPosts;?></h3>
							<div class="module-ct">
								<div class="widget r-posts-w fx" data-animate="fadeInRight">

									<div class="widget-content">
										<?php
											wp_nav_menu(
												array(
													'theme_location' => 'menu_4',
													'menu_id'        => 'footer-posts-blog',
													'container' => false,
													'menu_class' => 'footer-posts menu',
													'walker'     => new Footer_Posts_Walker_Nav_Menu()
												)
											);
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
						$smallSaleBanner = carbon_get_theme_option('aiss_option_small_banner_image');

						if ( $smallSaleBanner ):
							?>
							<div class="tz-module module " id="Mod440">
								<div class="module-inner">
									<div class="module-ct">
										<div class="custom small-banner">
											<img src="<?php echo $smallSaleBanner;?>" alt=""/>
										</div>
									</div>
								</div>
							</div>
						<?php endif;?>
				</aside>
			</div>
		</div>
	</section>

<?php get_footer();
