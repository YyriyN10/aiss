<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон сторінки продукції
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package aiss
	 *
	 */

	get_header();?>
<?php

	$productCat = get_categories( array(
		'taxonomy'     => 'products_tax',
		'type'         => 'products',
		'child_of'     => false,
		'parent'       => '',
		'orderby'      => 'name',
		'order'        => 'ASC',
		'hide_empty'   => 0,
		'hierarchical' => false,
		'number'       => 0,
		'pad_counts'   => false,
	) );


	$boilersCat = get_categories( array(
		'taxonomy'     => 'boilers_tax',
		'type'         => 'boilers',
		'child_of'     => false,
		'parent'       => '',
		'orderby'      => 'name',
		'order'        => 'ASC',
		'hide_empty'   => 0,
		'hierarchical' => false,
		'number'       => 0,
		'pad_counts'   => false,
	) );

	$serviceCat = get_categories( array(
		'taxonomy'     => 'service_tax',
		'type'         => 'service',
		'child_of'     => false,
		'parent'       => '',
		'orderby'      => 'name',
		'order'        => 'ASC',
		'hide_empty'   => 0,
		'hierarchical' => false,
		'number'       => 0,
		'pad_counts'   => false,
	) );

	if ( $productCat || $boilersCat || $serviceCat):?>
      <section id="tz-position9-wrapper" class="gry-bg ">
        <div class="container">
          <div class="row" id="position9">
            <div id="tz-position-9" class="col-lg-12 col-md-12 col-sm-12 col-xs-12  tz container">
              <div class="tz-module module " id="Mod334">
                <div class="module-inner">
                  <div class="module-ct">

                    <div class="custom"  >
                      <div class="" style="padding: 40px 15px 0;">
                        <p class="block-head" style="text-transform: uppercase;">Продукція</p>
                      </div>
                      <div class="row product-list-wrapper">
						  <?php foreach( $productCat as $catItem ):?>
                            <div class="cil-main-item col-md-4 col-sm-4 col-xs-12">
                              <div class="product-block">
                                <div class="img-holders">

									<?php
										$pageLink = carbon_get_term_meta($catItem->term_id, 'aiss_product_post_fields_category_link');
									?>
                                  <a href="<?php echo esc_url( $pageLink );?>">
                                    <img src="<?php echo carbon_get_term_meta( $catItem->term_id, 'aiss_product_post_fields_category_image');?>">
                                    <div class="main-bg-holder"></div>
                                  </a>
                                  <div class="main-name-holder">
                                    <a href="<?php echo esc_url( $pageLink );?>" class="project-namess" style="color: #fff"><?php echo $catItem->name;?></a>
                                  </div>
                                </div>
								  <?php
									  $productArgs = array(
										  'tax_query' => array(
											  array(
												  'taxonomy' => 'products_tax',
												  'field' => 'id',
												  'lang' => false,
												  'suppress_filters' => false,
												  'terms' => $catItem->term_id
											  )
										  ),
										  'posts_per_page' => -1,
										  'orderby' 	 => 'date',
										  'post_type'  => 'products',
										  'post_status'    => 'publish'
									  );

									  $productList = new WP_Query( $productArgs );

									  if ( $productList->have_posts() ) :?>
                                        <div class="main-item-bug-768">
											<?php while ( $productList->have_posts() ) : $productList->the_post(); ?>
                                              <div class="main-item-bug">
                                                <a href="<?php the_permalink();?>" class="project-names">
                                                  <i class="fa" aria-hidden="true"></i> <?php echo the_title();?>
                                                </a>
                                              </div>
											<?php endwhile;?>
                                        </div>
									  <?php endif; ?>
								  <?php wp_reset_postdata(); ?>
                              </div>
                            </div>
						  <?php endforeach;?>

						  <?php foreach( $serviceCat as $catItem ):?>
                            <div class="cil-main-item col-md-4 col-sm-4 col-xs-12">
                              <div class="product-block">
                                <div class="img-holders">

									<?php
										$pageLink = carbon_get_term_meta($catItem->term_id, 'aiss_service_post_fields_category_link');
									?>
                                  <a href="<?php echo esc_url( $pageLink );?>">
                                    <img src="<?php echo carbon_get_term_meta( $catItem->term_id, 'aiss_service_post_fields_category_image');?>">
                                    <div class="main-bg-holder"></div>
                                  </a>
                                  <div class="main-name-holder">
                                    <a href="<?php echo esc_url( $pageLink );?>" class="project-namess" style="color: #fff"><?php echo $catItem->name;?></a>
                                  </div>
                                </div>
								  <?php
									  $serviceArgs = array(
										  'tax_query' => array(
											  array(
												  'taxonomy' => 'service_tax',
												  'field' => 'id',
												  'lang' => false,
												  'suppress_filters' => false,
												  'terms' => $catItem->term_id
											  )
										  ),
										  'posts_per_page' => -1,
										  'orderby' 	 => 'date',
										  'post_type'  => 'service',
										  'post_status'    => 'publish'
									  );

									  $serviceList = new WP_Query( $serviceArgs );

									  if ( $serviceList->have_posts() ) :?>
                                        <div class="main-item-bug-768">
											<?php while ( $serviceList->have_posts() ) : $serviceList->the_post(); ?>
                                              <div class="main-item-bug">
                                                <a href="<?php the_permalink();?>" class="project-names">
                                                  <i class="fa" aria-hidden="true"></i> <?php echo the_title();?>
                                                </a>
                                              </div>
											<?php endwhile;?>
                                        </div>
									  <?php endif; ?>
								  <?php wp_reset_postdata(); ?>
                              </div>
                            </div>
						  <?php endforeach;?>

						  <?php foreach( $boilersCat as $catItem ):?>
                            <div class="cil-main-item col-md-4 col-sm-4 col-xs-12">
                              <div class="product-block">
                                <div class="img-holders">

									<?php
										$pageLink = carbon_get_term_meta($catItem->term_id, 'aiss_boilers_post_fields_category_link');
									?>
                                  <a href="<?php echo esc_url( $pageLink );?>">
                                    <img src="<?php echo carbon_get_term_meta( $catItem->term_id, 'aiss_boilers_post_fields_category_image');?>">
                                    <div class="main-bg-holder"></div>
                                  </a>
                                  <div class="main-name-holder">
                                    <a href="<?php echo esc_url( $pageLink );?>" class="project-namess" style="color: #fff"><?php echo $catItem->name;?></a>
                                  </div>
                                </div>
								  <?php
									  $boilersArgs = array(
										  'tax_query' => array(
											  array(
												  'taxonomy' => 'boilers_tax',
												  'field' => 'id',
												  'lang' => false,
												  'suppress_filters' => false,
												  'terms' => $catItem->term_id
											  )
										  ),
										  'posts_per_page' => -1,
										  'orderby' 	 => 'date',
										  'post_type'  => 'boilers',
										  'post_status'    => 'publish'
									  );

									  $boilersList = new WP_Query( $boilersArgs );

									  if ( $boilersList->have_posts() ) :?>
                                        <div class="main-item-bug-768">
											<?php while ( $boilersList->have_posts() ) : $boilersList->the_post(); ?>
                                              <div class="main-item-bug">
                                                <a href="<?php the_permalink();?>" class="project-names">
                                                  <i class="fa" aria-hidden="true"></i> <?php echo the_title();?>
                                                </a>
                                              </div>
											<?php endwhile;?>
                                        </div>
									  <?php endif; ?>
								  <?php wp_reset_postdata(); ?>
                              </div>
                            </div>
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

<?php get_footer();