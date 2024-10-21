<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
	?>

<section id="tz-breadcrumbs-wrapper" class="page-title title-3 custom-breadcrumbs">
  <div class="container">
    <div class="row" id="breadcrumbs">
      <div id="tz-breadcrumbs" class="col-lg-12 col-md-12 col-sm-12 col-xs-12  tz container">
        <div class="tz-module module " id="Mod17">
          <div class="module-inner">
            <div class="module-ct">
              <div class="breadcrumbs main-bg fx animated fadeInUp" data-animate="fadeInUp">
                <ul class="breadcrumb">
                  <li class="active">
                    <span class="divider icon-location">

                    </span>
                  </li>
                  <li>
                    <a href="/" class="pathway">Головна</a>
                    <span class="divider"></span>
                  </li>
                    <?php

	                    $termService = get_the_terms( get_the_ID(), 'service_tax' );
	                    $termProduct = get_the_terms( get_the_ID(), 'product_page_tax' );

	                    if( $termService ):

	                      $term = array_shift( $termService );
                          ?>
                        <li>
                          <a href="<?php echo carbon_get_term_meta($term->term_id, 'aiss_service_post_fields_category_link');?>" class="pathway">Сервіс</a>
                          <span class="divider"></span>
                        </li>
                      <?php elseif ( $termProduct ):

	                      global $post;

                        if ( $post->post_parent ):?>

                          <li>
                            <a href="<?php echo get_permalink( $post->post_parent );?>" class="pathway"><?php echo get_the_title( $post->post_parent );?></a>
                            <span class="divider"></span>
                          </li>
                        <?php endif;?>
                    <?php endif;?>
                  <li class="active">
                    <span><?php the_title();?></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
