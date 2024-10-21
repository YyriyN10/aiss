<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон сторінки сервису
	 *
	 * Template post type: service
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package aiss
	 *
	 */

	get_header();?>
<?php
	$serviceSingleMainImage = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_main_screen_image');
	$serviceSingleMainPhone = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_main_screen_phone');
	$serviceSingleMainWork = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_main_screen_work');

	if ( $serviceSingleMainImage && $serviceSingleMainPhone && $serviceSingleMainWork ):

?>
	<section id="tz-position-1-wrapper" class="position1 main-screen">
		<div class="container-fluid">
			<div class="row" id="position-1">
				<div id="tz-position-1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<div class="tz-module module " id="Mod509">
						<div class="module-inner">
							<div class="module-ct">
								<div class="custom"  >
									<div class="desktop tst2 desktop-head-main" style="background: url(<?php echo $serviceSingleMainImage;?>) 100% 100% no-repeat; background-size: cover; height: 525px; padding: 0px;">
										<div class="row" style="text-align: center;">
											<div style="width: 800px; margin: 0px auto;">
												<p class="h1"><?php the_title();?></p>
											</div>
											<div style="width: 550px; margin: 0px auto;">
												<p class="h2"><?php echo $serviceSingleMainPhone;?></p>
											</div>
											<p class="h3"><?php echo $serviceSingleMainWork;?></p>
										</div>
									</div>
									<div class="mobile mobile-head-main" style="display: none; height: 250px; background: url(<?php echo $serviceSingleMainImage;?>) 100% 100% no-repeat; background-size: cover;">
										<div class="row">
											<div class="col-md-12" style="text-align: center; margin: 0px;">
												<p class="h2"><?php the_title();?></p>
												<p class="h3"><span style="background: red; padding: 5px 15px;"><?php echo $serviceSingleMainPhone;?></span></p>
												<p class="h4"><?php echo $serviceSingleMainWork;?></p>
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
	    $singlrServiceP1Title = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part1_title');
		$singlrServiceP1TextBefore1 = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part1_text_before1');
		$singlrServiceP1Image1 = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part1_image1');
		$singlrServiceP1TextAfter1 = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part1_text_after1');
		$singlrServiceP1Image2 = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part1_image2');
		$singlrServiceP1TextAfter2 = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part1_text_after2');

		$singlrServiceP2Title = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part2_title');
		$singlrServiceP2TextBefore1 = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part2_text_before1');
		$singlrServiceP2Image1 = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part2_image1');
		$singlrServiceP2TextAfter1 = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part2_text_after1');
		$singlrServiceP2Image2 = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part2_image2');

    $singlrServiceP3Title = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part3_title');
    $singlrServiceP3TextBefore1 = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part3_text_before1');
    $singlrServiceP3Image1 = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part3_image1');
    $singlrServiceP3TextAfter1 = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part3_text_after1');
    $singlrServiceP3Image2 = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part3_image2');

    $singlrServiceP4Title = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part4_title');
    $singlrServiceP4TextBefore1 = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part4_text_before1');
    $singlrServiceP4Image1 = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part4_image1');
    $singlrServiceP4TextAfter1 = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part4_text_after1');
    $singlrServiceP4Image2 = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part4_image2');

    $singlrServiceP5Title = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part3_title');
    $singlrServiceP5TextBefore1 = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part5_text_before1');
    $singlrServiceP5Image1 = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part5_image1');
    $singlrServiceP5TextAfter1 = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part5_text_after1');
    $singlrServiceP5Image2 = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_text_part5_image2');

	    if( $singlrServiceP1Title && $singlrServiceP2TextBefore1 ):?>
	    <!-- -->
		    <section id="tz-main-body-wrapper" class="single-service-content">
			    <div class="container">
				    <div class="row" id="main-body">
					    <div id="tz-main-content" class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
						    <div class="tz-module module " id="Mod510">
							    <div class="module-inner">
								    <div class="module-ct">
									    <div class="custom"  >
										    <h2 class="block-head" style="text-transform: uppercase;"><?php echo $singlrServiceP1Title;?></h2>
										    <div class="title"><?php echo wpautop($singlrServiceP1TextBefore1);?></div>

										    <?php if( $singlrServiceP1Image1 ):?>
											    <div class="desktop-solo-img">
												    <div class="row">
													    <div class="col-lg-12 center item">
														    <a href="#fca-widget">
															    <img
																    src="<?php echo wp_get_attachment_image_src($singlrServiceP1Image1, 'full')[0];?>"
																    alt="<?php echo get_post_meta($singlrServiceP1Image1, '_wp_attachment_image_alt', TRUE);?>"
															    >
														    </a>
													    </div>
												    </div>
											    </div>
										    <?php endif;?>

										    <?php if( $singlrServiceP1TextAfter1 ):?>
											    <div class="text"><?php echo wpautop($singlrServiceP1TextAfter1);?></div>
										    <?php endif;?>

										    <?php if( $singlrServiceP1Image2 ):?>
											    <div class="desktop-solo-img">
												    <div class="row">
													    <div class="col-lg-12 center item">
														    <a href="#fca-widget">
															    <img
																    src="<?php echo wp_get_attachment_image_src($singlrServiceP1Image2, 'full')[0];?>"
																    alt="<?php echo get_post_meta($singlrServiceP1Image2, '_wp_attachment_image_alt', TRUE);?>"
															    >
														    </a>
													    </div>
												    </div>
											    </div>
										    <?php endif;?>

										    <?php if( $singlrServiceP1TextAfter2 ):?>
											    <div class="text"><?php echo wpautop($singlrServiceP1TextAfter2);?></div>
										    <?php endif;?>

										    <?php if( $singlrServiceP2Title ):?>
											    <h2 class="block-head"><?php echo $singlrServiceP2Title;?></h2>
										    <?php endif;?>

										    <?php if( $singlrServiceP2TextBefore1 ):?>
											    <div class="text"><?php echo wpautop($singlrServiceP2TextBefore1);?></div>
										    <?php endif;?>

										    <?php if( $singlrServiceP2Image1 ):?>
											    <div class="desktop-solo-img">
												    <div class="row">
													    <div class="col-lg-12 center item">
														    <a href="remont-avtomatiki-dlya-vorot-potolochnoj-otkatnoj-raspashnoj.html#fca-widget">
															    <img

															       src="<?php echo wp_get_attachment_image_src($singlrServiceP2Image1, 'full')[0];?>"
															       alt="<?php echo get_post_meta($singlrServiceP2Image1, '_wp_attachment_image_alt', TRUE);?>"
															    >
														    </a>
													    </div>
												    </div>
											    </div>
										    <?php endif;?>

										    <?php if( $singlrServiceP2TextAfter1 ):?>
											    <div class="text"><?php echo wpautop($singlrServiceP2TextAfter1);?></div>
										    <?php endif;?>

										    <?php if( $singlrServiceP2Image2 ):?>
											    <div class="desktop-solo-img">
												    <div class="row">
													    <div class="col-lg-12 center item">
														    <a href="remont-avtomatiki-dlya-vorot-potolochnoj-otkatnoj-raspashnoj.html#fca-widget">
															    <img
															       src="<?php echo wp_get_attachment_image_src($singlrServiceP2Image2, 'full')[0];?>"
															       alt="<?php echo get_post_meta($singlrServiceP2Image2, '_wp_attachment_image_alt', TRUE);?>"
															    >
														    </a>
													    </div>
												    </div>
											    </div>
										    <?php endif;?>

					      <?php if( $singlrServiceP3Title ):?>
                            <h2 class="block-head"><?php echo $singlrServiceP3Title;?></h2>
					      <?php endif;?>

					      <?php if( $singlrServiceP3TextBefore1 ):?>
                            <div class="text"><?php echo wpautop($singlrServiceP3TextBefore1);?></div>
					      <?php endif;?>

					      <?php if( $singlrServiceP3Image1 ):?>
                            <div class="desktop-solo-img">
                              <div class="row">
                                <div class="col-lg-12 center item">
                                  <a href="#fca-widget">
                                    <img

                                        src="<?php echo wp_get_attachment_image_src($singlrServiceP3Image1, 'full')[0];?>"
                                        alt="<?php echo get_post_meta($singlrServiceP3Image1, '_wp_attachment_image_alt', TRUE);?>"
                                    >
                                  </a>
                                </div>
                              </div>
                            </div>
					      <?php endif;?>

					      <?php if( $singlrServiceP3TextAfter1 ):?>
                            <div class="text"><?php echo wpautop($singlrServiceP3TextAfter1);?></div>
					      <?php endif;?>

					      <?php if( $singlrServiceP3Image2 ):?>
                            <div class="desktop-solo-img">
                              <div class="row">
                                <div class="col-lg-12 center item">
                                  <a href="#fca-widget">
                                    <img
                                        src="<?php echo wp_get_attachment_image_src($singlrServiceP3Image2, 'full')[0];?>"
                                        alt="<?php echo get_post_meta($singlrServiceP3Image2, '_wp_attachment_image_alt', TRUE);?>"
                                    >
                                  </a>
                                </div>
                              </div>
                            </div>
					      <?php endif;?>

					      <?php if( $singlrServiceP4Title ):?>
                            <h2 class="block-head"><?php echo $singlrServiceP4Title;?></h2>
					      <?php endif;?>

					      <?php if( $singlrServiceP4TextBefore1 ):?>
                            <div class="text"><?php echo wpautop($singlrServiceP4TextBefore1);?></div>
					      <?php endif;?>

					      <?php if( $singlrServiceP4Image1 ):?>
                            <div class="desktop-solo-img">
                              <div class="row">
                                <div class="col-lg-12 center item">
                                  <a href="#fca-widget">
                                    <img

                                        src="<?php echo wp_get_attachment_image_src($singlrServiceP4Image1, 'full')[0];?>"
                                        alt="<?php echo get_post_meta($singlrServiceP4Image1, '_wp_attachment_image_alt', TRUE);?>"
                                    >
                                  </a>
                                </div>
                              </div>
                            </div>
					      <?php endif;?>

					      <?php if( $singlrServiceP4TextAfter1 ):?>
                            <div class="text"><?php echo wpautop($singlrServiceP4TextAfter1);?></div>
					      <?php endif;?>

					      <?php if( $singlrServiceP4Image2 ):?>
                            <div class="desktop-solo-img">
                              <div class="row">
                                <div class="col-lg-12 center item">
                                  <a href="#fca-widget">
                                    <img
                                        src="<?php echo wp_get_attachment_image_src($singlrServiceP4Image2, 'full')[0];?>"
                                        alt="<?php echo get_post_meta($singlrServiceP4Image2, '_wp_attachment_image_alt', TRUE);?>"
                                    >
                                  </a>
                                </div>
                              </div>
                            </div>
					      <?php endif;?>

					      <?php if( $singlrServiceP5Title ):?>
                            <h2 class="block-head"><?php echo $singlrServiceP5Title;?></h2>
					      <?php endif;?>

					      <?php if( $singlrServiceP5TextBefore1 ):?>
                            <div class="text"><?php echo wpautop($singlrServiceP5TextBefore1);?></div>
					      <?php endif;?>

					      <?php if( $singlrServiceP5Image1 ):?>
                            <div class="desktop-solo-img">
                              <div class="row">
                                <div class="col-lg-12 center item">
                                  <a href="#fca-widget">
                                    <img

                                        src="<?php echo wp_get_attachment_image_src($singlrServiceP5Image1, 'full')[0];?>"
                                        alt="<?php echo get_post_meta($singlrServiceP5Image1, '_wp_attachment_image_alt', TRUE);?>"
                                    >
                                  </a>
                                </div>
                              </div>
                            </div>
					      <?php endif;?>

					      <?php if( $singlrServiceP5TextAfter1 ):?>
                            <div class="text"><?php echo wpautop($singlrServiceP5TextAfter1);?></div>
					      <?php endif;?>

					      <?php if( $singlrServiceP5Image2 ):?>
                            <div class="desktop-solo-img">
                              <div class="row">
                                <div class="col-lg-12 center item">
                                  <a href="#fca-widget">
                                    <img
                                        src="<?php echo wp_get_attachment_image_src($singlrServiceP5Image2, 'full')[0];?>"
                                        alt="<?php echo get_post_meta($singlrServiceP5Image2, '_wp_attachment_image_alt', TRUE);?>"
                                    >
                                  </a>
                                </div>
                              </div>
                            </div>
					      <?php endif;?>
									    </div>
								    </div>
							    </div>
						    </div>
					    </div>
					    <?php
						    $bannerSmall = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_sale_small_image');
					    ?>
					    <aside id="tz-right" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
						    <div class="tz-module module " id="Mod440">
							    <div class="module-inner">
								    <div class="module-ct">
									    <div class="custom"  >
										    <img src="<?php echo $bannerSmall;?>" alt=""/>
									    </div>
								    </div>
							    </div>
						    </div>
					    </aside>
				    </div>
			    </div>
		    </section>
	<?php endif;?>

<?php
	$saleBigBanner = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_sale_big_image');
	$saleTitle = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_sale_title');
	$saleBtnText = carbon_get_post_meta(get_the_ID(), 'aiss_service_post_fields_sale_btn_text');

	if ( $saleBigBanner && $saleBtnText && $saleTitle ){

		$content = array(
			'title' => $saleTitle,
			'banner' => $saleBigBanner,
			'btn_text' => $saleBtnText
		);

		get_template_part('template-parts/sale-banner','', $content);
	}
?>
<?php get_footer();
