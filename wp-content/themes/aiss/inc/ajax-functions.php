<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	add_action( 'wp_enqueue_scripts', 'aiss_ajax_data', 99 );
	function aiss_ajax_data(){

		wp_localize_script('aiss-main-js', 'aiss_ajax',
			array(
				'url' => admin_url('admin-ajax.php')
			)
		);

	}


	/**
	 * Tags posts
	 */

	add_action('wp_ajax_add_tag_posts', 'add_tag_posts_callback');
	add_action('wp_ajax_nopriv_add_tag_posts', 'add_tag_posts_callback');

	function add_tag_posts_callback(){

		$tagId = $_POST['tagId'];
		$tagName = $_POST['tagName'];

		?>

		<div id="tz-component-area" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
			<section id="tz-component-wrapper"><div id="tz-component">
					<div class="TzTag  masonry" >
						<div class="TzTagInner">
							<h2 class="TzTagHeading">
								Tag: <?php echo $tagName;?>
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

		<?php

		wp_die();

	}