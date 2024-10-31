<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон сторінки "Про нас"
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package aiss
	 */
	get_header(); ?>

	<?php
	    $aboutMainImage = carbon_get_post_meta(get_the_ID(), 'aiss_about_us_page_main_screen_image');

	    if( $aboutMainImage ):?>
	    <!-- -->
		    <section id="tz-position-1-wrapper" class="position1 ">
			    <div class="container-fluid">
				    <div class="row" id="position-1">
					    <div id="tz-position-1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						    <div class="tz-module module " id="Mod385">
							    <div class="module-inner">
								    <div class="module-ct">

									    <div class="custom"  >
										    <div class="desktop" style="background: url(<?php echo $aboutMainImage;?>) 100% 100% no-repeat; background-size: cover; height: 225px; padding: 0px;"></div>
										    <div class="mobile" style="background: url(<?php echo $aboutMainImage;?>) 100% 100% no-repeat; background-size: cover; height: 55px; padding: 0px; display: none;"></div>
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
	    $aboutContent = carbon_get_post_meta(get_the_ID(), 'aiss_about_us_page_main_content');
	    $i = 0;

	    if( $aboutContent ):?>
	    <!-- -->
		    <section id="tz-position-10-wrapper" class=" ">
			    <div class="container">
				    <div class="row" id="position-10">
					    <div id="tz-position-10" class="col-lg-12 col-md-12 col-sm-12 col-xs-12  tz">
						    <div class="tz-module module " id="Mod386">
							    <div class="module-inner">
								    <div class="module-ct">
									    <div class="custom"  >
										    <?php foreach( $aboutContent as $item ): $i ++;?>
											    <?php if( $i == 1 ):?>
												    <h1 class="block-head" style="padding-top: 20px; text-transform: capitalize;"><?php echo $item['name'];?></h1>
												<?php else:?>
												    <h2 class="block-head"><?php echo $item['name'];?></h2>
											    <?php endif;?>
											    <div class="text"><?php echo wpautop( $item['text'] );?></div>
										    <?php endforeach;?>
									    </div>
								    </div>
							    </div>
						    </div>
					    </div>
				    </div>
			    </div>
		    </section>
	<?php endif;?>

	<?php
	    $aboutTeam = carbon_get_post_meta(get_the_ID(), 'aiss_about_us_page_team_list');

	    if( $aboutTeam ):?>
	    <!-- -->
		    <section id="tz-photo-wrapper" class=" ">
			    <div class="container">
				    <div class="row" id="photo">
					    <div id="tz-position-11" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						    <div class="row team-boxes">
							    <?php foreach( $aboutTeam as $item ):?>
								    <div class="fx cell-3" data-animate="fadeInDown">
									    <div class="team-box-2">
										    <div class="team-img">
											    <img src="<?php echo $item['image'];?>" alt="<?php echo $item['name'];?>"/>
										    </div>
										    <div class="team-details">
											    <h3><?php echo $item['name'];?></h3>
											    <div class="t-position">
												    <?php echo $item['position'];?>
											    </div>
                          <p class="men-contacts">
	                          <?php if( $item['phone_list'] ):?>
		                          <?php foreach( $item['phone_list'] as $menPhone):?>
			                          <?php echo $menPhone['phone'].' ';?>
		                          <?php endforeach;?>
	                          <?php endif;?>
	                          <?php if( $item['email'] ):?>
		                          <?php echo $item['email'];?>
	                          <?php endif;?>
                          </p>

											    <?php if( $item['fb_link'] || $item['google_link'] || $item['skype_link']):?>
												    <div class="team-socials">
													    <ul>
														    <?php if( $item['fb_link'] ):?>
															    <li>
																    <a href="<?php echo $item['fb_link'];?>" rel="nofollow" target="_blank" title="Facebook">
																	    <i class="fa fa-facebook-square"></i>
																    </a>
															    </li>
														    <?php endif;?>
														    <?php if( $item['google_link'] ):?>
															    <li>
																    <a href="<?php echo $item['google_link'];?>" rel="nofollow" target="_blank" title="Google">
																	    <i class="fa fa-google"></i>
																    </a>
															    </li>
														    <?php endif;?>
														    <?php if( $item['skype_link'] ):?>
															    <li>
																    <a href="<?php echo $item['skype_link'];?>" rel="nofollow" target="_blank" title="Skype">
																	    <i class="fa fa-skype"></i>
																    </a>
															    </li>
														    <?php endif;?>
													    </ul>
												    </div>
											    <?php endif;?>
										    </div>
									    </div>
								    </div>
							    <?php endforeach;?>
						    </div>
					    </div>
				    </div>
			    </div>
		    </section>
	<?php endif;?>
<?php get_footer();
