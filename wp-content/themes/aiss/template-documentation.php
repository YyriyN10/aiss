<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон сторінки документації
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package aiss
	 */
	get_header();
?>
  <section id="tz-position-1-wrapper" class="position1 ">
    <div class="container-fluid">
      <div class="row" id="position-1">
        <div id="tz-position-1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
          <div class="tz-module module " id="Mod387">
            <div class="module-inner">
              <div class="module-ct">
                <div class="custom"  >
                  <div class="desktop" style="background: url(<?php the_post_thumbnail_url();?>) 100% 100% no-repeat; background-size: cover; height: 225px; padding: 0px;">

                  </div>
                  <div class="mobile" style="background: url(<?php the_post_thumbnail_url();?>) 100% 100% no-repeat; background-size: cover; height: 55px; padding: 0px; display: none;">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	<?php get_template_part('template-parts/breadcrumbs');?>
	<section id="tz-position-10-wrapper" class="documentation-list-wrapper">
		<div class="container">
			<div class="row" id="position-10">
				<div id="tz-position-10" class="col-lg-12 col-md-12 col-sm-12 col-xs-12  tz container">
					<div class="tz-module module " id="Mod388">
						<div class="module-inner">
							<div class="module-ct">
								<div class="custom"  >
                    <?php
                      $documentationTitle = carbon_get_post_meta(get_the_ID(), 'aiss_documentation_page_main_title');

                      if ( $documentationTitle ):
                    ?>
									    <h1 class="block-head" style="padding-top: 20px; text-transform: capitalize;"><?php echo $documentationTitle;?></h1>
                    <?php endif;?>
									<div class="row documentation-list">
										 <?php
										 	$documentationArgs = array(
										 		'posts_per_page' => -1,
										 		'orderby' 	 => 'date',
										 		'post_type'  => 'documentation',
										 		'post_status'    => 'publish'
										 	);

										 	$documentationList = new WP_Query( $documentationArgs );

										 		  if ( $documentationList->have_posts() ) :

										 			  while ( $documentationList->have_posts() ) : $documentationList->the_post();
										 		?>
													      <div class="col-md-3 center">
														      <a href="<?php echo carbon_get_post_meta(get_the_ID(), 'aiss_documentation_post_fields_link');?>" target="_blank"">
														      <img src="<?php the_post_thumbnail_url();?>">
														      </a>
														      <p><?php the_title();?></p>
													      </div>

										 		<?php endwhile;?>
										 	<?php endif; ?>
										 <?php wp_reset_postdata(); ?>
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
