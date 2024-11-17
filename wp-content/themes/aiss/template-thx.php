<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон сторінки подяки
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package aiss
	 *
	 */

	get_header();?>
<?php
    $thxTitle = carbon_get_post_meta(get_the_ID(), 'aiss_thx_main_screen_title');
	  $thxRedText = carbon_get_post_meta(get_the_ID(), 'aiss_thx_main_screen_red_text');
	  $thxSocialCall = carbon_get_post_meta(get_the_ID(), 'aiss_thx_main_screen_social_text');
	  $thxImage = carbon_get_post_meta(get_the_ID(), 'aiss_thx_main_screen_image');

?>
	<section id="tz----------1-wrapper" class=" ">
		<div class="container">
			<div class="row" id="---------1">
				<div id="tz-block-2" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<div class="tz-module module " id="Mod515">
						<div class="module-inner">
							<div class="module-ct">
								<div class="custom">
									<div class="row row-main-bener">
										<div class="col-sm-12 col-main-bener" style="background-image: url(<?php echo $thxImage;?>)">
											<div class="border">
												<div class="obertca">
													<span class="span-h1"><?php the_title();?></span>
                          <?php if( $thxTitle ):?>
                            <span class="span-h2"><?php echo $thxTitle;?></span>
                          <?php endif;?>
                          <?php if( $thxRedText ):?>
                            <span class="span-info"><?php echo $thxRedText;?></span>
                          <?php endif;?>

                            <?php
                              $thxYouLink = carbon_get_theme_option('aiss_option_social_youtube_link');
	                            $thxInstLink = carbon_get_theme_option('aiss_option_social_instagram_link');
	                            $thxFbLink = carbon_get_theme_option('aiss_option_social_facebook_link');

	                            if ( $thxInstLink || $thxYouLink || $thxFbLink ):?>
                              <div class="botom-bl">
                                <?php if( $thxSocialCall ):?>
                                  <span class="span-info-botom"><?php echo $thxSocialCall;?></span>
                                <?php endif;?>

                                <div class="botom-bl-img">
                                  <?php if( $thxYouLink ):?>
                                    <a href="<?php echo $thxYouLink;?>">
                                      <img src="<?php echo THEME_PATH;?>/assets/img/ytube.png" alt="youtube">
                                    </a>
                                  <?php endif;?>

                                  <?php if( $thxInstLink ):?>
                                    <a href="<?php echo $thxInstLink;?>">
                                      <img src="<?php echo THEME_PATH;?>/assets/img/instagram.png" alt="Инстаграмм">
                                    </a>
                                  <?php endif;?>

                                  <?php if( $thxFbLink ):?>
                                    <a href="<?php echo $thxFbLink;?>">
                                      <img src="<?php echo THEME_PATH;?>/assets/img/facebook.png" alt="Facebook">
                                    </a>
                                  <?php endif;?>
                                </div>
                              </div>
                          <?php endif;?>
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
		</div>
	</section>
<?php get_footer();
