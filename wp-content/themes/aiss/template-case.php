<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон сторінки "Приклади робіт"
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package aiss
	 */
	get_header(); ?>
	<?php
	    $caseMainImage = carbon_get_theme_option('aiss_option_case_main_image');

	    if( $caseMainImage ):?>
	    <!-- -->
		    <section id="tz-position-1-wrapper" class="position1 ">
			    <div class="container-fluid">
				    <div class="row" id="position-1">
					    <div id="tz-position-1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						    <div class="tz-module module " id="Mod393">
							    <div class="module-inner">
								    <div class="module-ct">
									    <div class="custom"  >
										    <div class="container-fluid" style="background: url(<?php echo $caseMainImage;?>) 100% 100% no-repeat; background-size: cover; height: 225px; padding: 0px;"></div>
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
	$caseArgs = array(
		'posts_per_page' => -1,
		'orderby' 	 => 'date',
		'post_type'  => 'case',
		'post_status'    => 'publish',
		'meta_query' => array(
			array(
				'key' => 'aiss_case_post_content_type',
				'value' => 'video',
			),
		),
	);

	$caseList = new WP_Query( $caseArgs );

	if ( $caseList->have_posts() ) :?>
      <section id="tz-position-10-wrapper" class="video-cases">
        <div class="container">
          <div class="row" id="position5">
            <div id="tz-position-5" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
              <div class="tz-module module " id="Mod414">
                <div class="module-inner">
                  <div class="module-ct">
                    <div class="custom">
                      <div class="custom">
	                      <?php
		                      $caseVideoTitle = carbon_get_theme_option('aiss_option_case_video_title');

		                      if ( $caseVideoTitle ):?>
                                <h2 class="block-head" style="padding-top: 20px; text-transform: capitalize;"><?php echo $caseVideoTitle;?></h2>
		                      <?php endif;?>
                            <div class="desktop">
                              <div class="row video-list">
                                <?php while ( $caseList->have_posts() ) : $caseList->the_post(); ?>
                                   <div class="col-md-4 col-sm-4 col-xs-12 center ">
                                     <div class="video-item">
                                       <iframe src="https://www.youtube.com/embed/<?php echo carbon_get_post_meta(get_the_ID(), 'aiss_case_post_content_video');?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                     </div>
                                   </div>
                                <?php endwhile;?>
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
	<?php endif; ?>
<?php wp_reset_postdata(); ?>

<?php
	$caseImageArgs = array(
		'posts_per_page' => -1,
		'orderby' 	 => 'date',
		'post_type'  => 'case',
		'post_status'    => 'publish',
		'meta_query' => array(
			array(
				'key' => 'aiss_case_post_content_type',
				'value' => 'image',
			),
		),
	);

	$caseImageList = new WP_Query( $caseImageArgs );

	if ( $caseImageList->have_posts() ) :?>
      <section id="tz-position5-wrapper" class="desktop home-photo-case-wrapper">
        <div class="container">
          <div class="row" id="position5">
            <div id="tz-position-5" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
              <div class="tz-module module " id="Mod414">
                <div class="module-inner">
                  <div class="module-ct">
                    <div class="custom">
	                    <?php
		                    $caseImageTitle = carbon_get_theme_option('aiss_option_case_photo_title');

		                    if ( $caseImageTitle ):?>
                              <h2 class="block-head" style="padding-top: 20px; text-transform: capitalize;"><?php echo $caseImageTitle;?></h2>
		                    <?php endif;?>
                      <div class="popup-gallery">
                        <?php while ( $caseImageList->have_posts() ) : $caseImageList->the_post(); ?>
                          <?php
                          $photoLink = carbon_get_post_meta(get_the_ID(), 'aiss_case_post_content_image');
                          $photoType = carbon_get_post_meta(get_the_ID(), 'aiss_case_post_content_gait_type');
                          ?>
                                      <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6">
                                        <a href="<?php echo $photoLink ;?>" title="<?php the_title();?>" data-fancybox="photo-gallery">
                                          <img src="<?php echo $photoLink ;?>" alt="<?php echo $photoType;?>" title="<?php the_title();?>">
                                          <span class="bg_item"></span>
                                          <span class="h2"><?php the_title();?></span>
                                          <span class="span"><?php echo $photoType;?></span>
                                        </a>
                                      </div>
                        <?php endwhile;?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
	<?php endif; ?>
<?php wp_reset_postdata(); ?>
<?php get_footer();
