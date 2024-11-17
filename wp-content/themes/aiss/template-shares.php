<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон сторінки акцій
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package aiss
	 *
	 */

	get_header();?>
<?php

	$shareMainTitle = carbon_get_theme_option('aiss_option_share_main_title');
	$shareMainImage = carbon_get_theme_option('aiss_option_share_main_image');

	if ( $shareMainImage && $shareMainTitle ):

		?>
		<section id="tz-image-wrapper" class="blog-main-screen">
			<div class="container-fluid">
				<div class="row" id="image">
					<div id="tz-position-1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<div class="tz-module module " id="Mod439">
							<div class="module-inner">
								<div class="module-ct">
									<div class="custom"  >
										<div class="desktop tst2" style="background: url(<?php echo $shareMainImage;?>) 100% 100% no-repeat;">
											<div class="row" >
												<div>
													<h1><?php echo $shareMainTitle;?></h1>
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
	$shareList = carbon_get_post_meta(get_the_ID(), 'aiss_shares_list');
?>
	<section id="tz-main-body-wrapper" class="blob-main-content">
		<div class="container"><div class="row" id="main-body">
				<div id="tz-message-area" class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
					<section id="tz-main-wrapper" class=" ">
						<div class="row" id="main">
							<div id="tz-component-area" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
								<section id="tz-component-wrapper">
									<div id="tz-component">
										<div class="TzBlog blog masonry " >
											<div class="TzBlogInner ">
												<div class="row share-list">
													<?php if( $shareList ):?>
														<?php foreach( $shareList as $item ):?>
															<div class="cell-6 fx share-item" data-animate="fadeInLeft">

																<div class="TzItem">
																	<div class="row ">
																		<div class="cell-12 ">
																			<div class="post-image   ">
																				<div class="preview">
																					<div class="mask"></div>
																					<img

																						src="<?php echo wp_get_attachment_image_src( $item['image'], 'full')[0];?>"
																						alt="<?php echo get_post_meta($item['image'], '_wp_attachment_image_alt', TRUE);?>"
																					>
																				</div>
																			</div>
																		</div>
																		<div class="cell-12 ">
																			<article class="post-content">
																				<div class="post-info-container">
																					<div class="post-info">
																						<h2 class="TzBlogTitle">
																							<span class="main-color" >
																								<?php echo $item['name'];?>
																							</span>
																						</h2>
																						<ul class="post-meta">

																						</ul>
																					</div>
																				</div>
																				<p class="description">
																					<?php echo $item['text'];?>
																				</p>
																			</article>
																		</div>
																	</div>
																	<div class="item-separator"></div>
																	<div class="clr"></div>
																</div>
															</div>
														<?php endforeach;?>
                          <?php else:?>
                              <h2 class="share-unset">Зараз активних акцій немає</h2>
													<?php endif;?>
												</div>
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
