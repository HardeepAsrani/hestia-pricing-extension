<?php
/*
Plugin Name: Hestia Pro Pricing Table Extension
Plugin URI: http://www.hardeepasrani.com/
Description: A lightweight plugin to add a third pricing table to Hestia Pro.
Author: Hardeep Asrani
Author URI: http://www.hardeepasrani.com/
Version: 1.1
*/

if ( ! function_exists( 'hestia_pricing' ) ) :
	/**
	 * Pricing section content.
	 *
	 * @since Hestia 1.0
	 */
	function hestia_pricing() {
		$hide_section = get_theme_mod( 'hestia_pricing_hide', true );
		if ( (bool) $hide_section === true ) {
			return;
		}
		$hestia_pricing_title           = get_theme_mod( 'hestia_pricing_title', esc_html__( 'Choose a plan for your next project', 'hestia-pro' ) );
		$hestia_pricing_subtitle        = get_theme_mod( 'hestia_pricing_subtitle', esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'hestia-pro' ) );
		$hestia_pricing_table_one_title = get_theme_mod( 'hestia_pricing_table_one_title', esc_html__( 'Basic Package', 'hestia-pro' ) );
		$hestia_pricing_table_one_price = get_theme_mod( 'hestia_pricing_table_one_price', '<small>$</small>0' );

		$default                           = sprintf( '<b>%1$s</b> %2$s', esc_html__( '1', 'hestia-pro' ), esc_html__( 'Domain', 'hestia-pro' ) ) .
											 sprintf( '\n<b>%1$s</b> %2$s', esc_html__( '1GB', 'hestia-pro' ), esc_html__( 'Storage', 'hestia-pro' ) ) .
											 sprintf( '\n<b>%1$s</b> %2$s', esc_html__( '100GB', 'hestia-pro' ), esc_html__( 'Bandwidth', 'hestia-pro' ) ) .
											 sprintf( '\n<b>%1$s</b> %2$s', esc_html__( '2', 'hestia-pro' ), esc_html__( 'Databases', 'hestia-pro' ) );
		$hestia_pricing_table_one_features = get_theme_mod( 'hestia_pricing_table_one_features', $default );
		if ( ! is_array( $hestia_pricing_table_one_features ) ) {
			$hestia_pricing_table_one_features = explode( '\n', str_replace( '\r', '', wp_kses_post( force_balance_tags( $hestia_pricing_table_one_features ) ) ) );
		}

		$hestia_pricing_table_one_link  = get_theme_mod( 'hestia_pricing_table_one_link', esc_url( '#' ) );
		$hestia_pricing_table_one_text  = get_theme_mod( 'hestia_pricing_table_one_text', esc_html__( 'Free Download', 'hestia-pro' ) );
		$hestia_pricing_table_two_title = get_theme_mod( 'hestia_pricing_table_two_title', esc_html__( 'Premium Package', 'hestia-pro' ) );
		$hestia_pricing_table_two_price = get_theme_mod( 'hestia_pricing_table_two_price', '<small>$</small>49' );

		$default                           = sprintf( '<b>%1$s</b> %2$s', esc_html__( '5', 'hestia-pro' ), esc_html__( 'Domain', 'hestia-pro' ) ) .
											 sprintf( ' \n<b>%1$s</b> %2$s', esc_html__( 'Unlimited', 'hestia-pro' ), esc_html__( 'Storage', 'hestia-pro' ) ) .
											 sprintf( ' \n<b>%1$s</b> %2$s', esc_html__( 'Unlimited', 'hestia-pro' ), esc_html__( 'Bandwidth', 'hestia-pro' ) ) .
											 sprintf( ' \n<b>%1$s</b> %2$s', esc_html__( 'Unlimited', 'hestia-pro' ), esc_html__( 'Databases', 'hestia-pro' ) );
		$hestia_pricing_table_two_features = get_theme_mod( 'hestia_pricing_table_two_features', $default );
		if ( ! is_array( $hestia_pricing_table_two_features ) ) {
			$hestia_pricing_table_two_features = explode( '\n', str_replace( '\r', '', wp_kses_post( force_balance_tags( $hestia_pricing_table_two_features ) ) ) );
		}
		$hestia_pricing_table_two_link = get_theme_mod( 'hestia_pricing_table_two_link', esc_url( '#' ) );
		$hestia_pricing_table_two_text = get_theme_mod( 'hestia_pricing_table_two_text', esc_html__( 'Order Now', 'hestia-pro' ) );
		$hestia_pricing_table_three_title = get_theme_mod( 'hestia_pricing_table_three_title', esc_html__( 'Premium Package', 'hestia-pro' ) );
		$hestia_pricing_table_three_price = get_theme_mod( 'hestia_pricing_table_three_price', '<small>$</small>49' );

		$default                           = sprintf( '<b>%1$s</b> %2$s', esc_html__( '5', 'hestia-pro' ), esc_html__( 'Domain', 'hestia-pro' ) ) .
											 sprintf( ' \n<b>%1$s</b> %2$s', esc_html__( 'Unlimited', 'hestia-pro' ), esc_html__( 'Storage', 'hestia-pro' ) ) .
											 sprintf( ' \n<b>%1$s</b> %2$s', esc_html__( 'Unlimited', 'hestia-pro' ), esc_html__( 'Bandwidth', 'hestia-pro' ) ) .
											 sprintf( ' \n<b>%1$s</b> %2$s', esc_html__( 'Unlimited', 'hestia-pro' ), esc_html__( 'Databases', 'hestia-pro' ) );
		$hestia_pricing_table_three_features = get_theme_mod( 'hestia_pricing_table_three_features', $default );
		if ( ! is_array( $hestia_pricing_table_three_features ) ) {
			$hestia_pricing_table_three_features = explode( '\n', str_replace( '\r', '', wp_kses_post( force_balance_tags( $hestia_pricing_table_three_features ) ) ) );
		}
		$hestia_pricing_table_three_link = get_theme_mod( 'hestia_pricing_table_three_link', esc_url( '#' ) );
		$hestia_pricing_table_three_text = get_theme_mod( 'hestia_pricing_table_three_text', esc_html__( 'Order Now', 'hestia-pro' ) );
		?>
		<section class="pricing section-gray" id="pricing" data-sorder="hestia_pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<?php if ( ! empty( $hestia_pricing_title ) || is_customize_preview() ) : ?>
							<h2 class="title"><?php echo esc_html( $hestia_pricing_title ); ?></h2>
						<?php endif; ?>
						<?php if ( ! empty( $hestia_pricing_subtitle ) || is_customize_preview() ) : ?>
							<p class="text-gray"><?php echo esc_html( $hestia_pricing_subtitle ); ?></p>
						<?php endif; ?>
					</div>
					<div class="col-md-7 col-md-offset-1">
						<div class="col-md-4">
							<div class="card card-pricing card-raised">
								<div class="content">
									<?php if ( ! empty( $hestia_pricing_table_one_title ) || is_customize_preview() ) : ?>
										<h6 class="category"><?php echo esc_html( $hestia_pricing_table_one_title ); ?></h6>
									<?php endif; ?>
									<?php if ( ! empty( $hestia_pricing_table_one_price ) || is_customize_preview() ) : ?>
										<h3 class="card-title"><?php echo wp_kses_post( $hestia_pricing_table_one_price ); ?></h3>
									<?php endif; ?>

									<?php if ( ! empty( $hestia_pricing_table_one_features ) ) : ?>
										<ul>
											<?php foreach ( $hestia_pricing_table_one_features as $feature ) : ?>
												<li><?php echo wp_kses_post( $feature ); ?></li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>

									<?php if ( ( ! empty( $hestia_pricing_table_one_link ) && ! empty( $hestia_pricing_table_one_text ) ) || is_customize_preview() ) : ?>
										<a href="<?php echo esc_url( $hestia_pricing_table_one_link ); ?>" class="btn btn-primary btn-round"><?php echo esc_html( $hestia_pricing_table_one_text ); ?></a>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-pricing card-plain">
								<div class="content">
									<?php if ( ! empty( $hestia_pricing_table_two_title ) || is_customize_preview() ) : ?>
										<h6 class="category"><?php echo esc_html( $hestia_pricing_table_two_title ); ?></h6>
									<?php endif; ?>
									<?php if ( ! empty( $hestia_pricing_table_two_price ) || is_customize_preview() ) : ?>
										<h3 class="card-title"><?php echo wp_kses_post( $hestia_pricing_table_two_price ); ?></h3>
									<?php endif; ?>
									<?php if ( ! empty( $hestia_pricing_table_two_features ) ) : ?>
										<ul>
											<?php foreach ( $hestia_pricing_table_two_features as $feature ) : ?>
												<li><?php echo wp_kses_post( $feature ); ?></li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>
									<?php if ( ( ! empty( $hestia_pricing_table_two_link ) && ! empty( $hestia_pricing_table_two_text ) ) || is_customize_preview() ) : ?>
										<a href="<?php echo esc_url( $hestia_pricing_table_two_link ); ?>" class="btn btn-primary btn-round"><?php echo esc_html( $hestia_pricing_table_two_text ); ?></a>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-pricing card-plain">
								<div class="content">
									<?php if ( ! empty( $hestia_pricing_table_three_title ) || is_customize_preview() ) : ?>
										<h6 class="category"><?php echo esc_html( $hestia_pricing_table_three_title ); ?></h6>
									<?php endif; ?>
									<?php if ( ! empty( $hestia_pricing_table_three_price ) || is_customize_preview() ) : ?>
										<h3 class="card-title"><?php echo wp_kses_post( $hestia_pricing_table_three_price ); ?></h3>
									<?php endif; ?>
									<?php if ( ! empty( $hestia_pricing_table_three_features ) ) : ?>
										<ul>
											<?php foreach ( $hestia_pricing_table_three_features as $feature ) : ?>
												<li><?php echo wp_kses_post( $feature ); ?></li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>
									<?php if ( ( ! empty( $hestia_pricing_table_three_link ) && ! empty( $hestia_pricing_table_three_text ) ) || is_customize_preview() ) : ?>
										<a href="<?php echo esc_url( $hestia_pricing_table_three_link ); ?>" class="btn btn-primary btn-round"><?php echo esc_html( $hestia_pricing_table_three_text ); ?></a>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
	}
endif;

/**
 * Hook controls for Pricing section to Customizer.
 *
 * @since Hestia 1.0
 */
function hestia_pricing_customize_register_three( $wp_customize ) {

	$wp_customize->get_control('hestia_pricing_tabs')->tabs=array(
		'general' => array(
			'nicename' => esc_html__( 'General', 'hestia-pro' ),
			'icon'     => 'cogs',
			'controls' => array(
				'hestia_pricing_hide',
				'hestia_pricing_title',
				'hestia_pricing_subtitle',
			),
		),
		'first'   => array(
			'nicename' => esc_html__( 'First', 'hestia-pro' ),
			'icon'     => 'table',
			'controls' => array(
				'hestia_pricing_table_one_title',
				'hestia_pricing_table_one_price',
				'hestia_pricing_table_one_features',
				'hestia_pricing_table_one_link',
				'hestia_pricing_table_one_text',
			),
		),
		'second'  => array(
			'nicename' => esc_html__( 'Second', 'hestia-pro' ),
			'icon'     => 'table',
			'controls' => array(
				'hestia_pricing_table_two_title',
				'hestia_pricing_table_two_price',
				'hestia_pricing_table_two_features',
				'hestia_pricing_table_two_link',
				'hestia_pricing_table_two_text',
			),
		),
		'third'  => array(
			'nicename' => esc_html__( 'Third', 'hestia-pro' ),
			'icon'     => 'table',
			'controls' => array(
				'hestia_pricing_table_three_title',
				'hestia_pricing_table_three_price',
				'hestia_pricing_table_three_features',
				'hestia_pricing_table_three_link',
				'hestia_pricing_table_three_text',
			),
		)
	);

	$wp_customize->add_setting( 'hestia_pricing_table_three_title', array(
		'default' => esc_html__( 'Premium Package', 'hestia-pro' ),
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control( 'hestia_pricing_table_three_title', array(
		'label' => esc_html__( 'Pricing Table Three: Title', 'hestia-pro' ),
		'section' => 'hestia_pricing',
		'priority' => 65,
	));

	$wp_customize->add_setting( 'hestia_pricing_table_three_price', array(
		'default' => '<small>$</small>49',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control( 'hestia_pricing_table_three_price', array(
		'label' => esc_html__( 'Pricing Table Three: Price', 'hestia-pro' ),
		'section' => 'hestia_pricing',
		'priority' => 70,
	));

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'hestia_pricing_table_three_price', array(
			'selector' => '.pricing .col-md-6:nth-child(3) .card-pricing .card-title',
			'settings' => 'hestia_pricing_table_three_price',
			'render_callback' => 'hestia_selective_refresh_table_three_price_render_callback',
		));
	} else {
		$wp_customize->get_setting( 'hestia_pricing_table_three_price' )->transport = 'refresh';
	}

	$default = sprintf( '<b>%1$s</b> %2$s',esc_html__( '5','hestia-pro' ),esc_html__( 'Domain', 'hestia-pro' ) ) .
			   sprintf( '\n<b>%1$s</b> %2$s',esc_html__( 'Unlimited','hestia-pro' ),esc_html__( 'Storage', 'hestia-pro' ) ) .
			   sprintf( '\n<b>%1$s</b> %2$s',esc_html__( 'Unlimited','hestia-pro' ),esc_html__( 'Bandwidth', 'hestia-pro' ) ) .
			   sprintf( '\n<b>%1$s</b> %2$s',esc_html__( 'Unlimited','hestia-pro' ),esc_html__( 'Databases', 'hestia-pro' ) );
	$wp_customize->add_setting( 'hestia_pricing_table_three_features', array(
		'default' => $default,
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control( 'hestia_pricing_table_three_features', array(
		'label' => esc_html__( 'Pricing Table Three: Features', 'hestia-pro' ),
		'description' => esc_html__( 'Seperate your features by adding \n between lines.', 'hestia-pro' ),
		'section' => 'hestia_pricing',
		'priority' => 75,
		'type' => 'textarea',
	));

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'hestia_pricing_table_three_features', array(
			'selector' => '.pricing .col-md-6:nth-child(3) .card-pricing ul',
			'settings' => 'hestia_pricing_table_three_features',
			'render_callback' => 'hestia_selective_refresh_table_three_features_render_callback',
		));
	} else {
		$wp_customize->get_setting( 'hestia_pricing_table_three_features' )->transport = 'refresh';
	}

	$wp_customize->add_setting( 'hestia_pricing_table_three_link', array(
		'default' => esc_url( '#' ),
		'sanitize_callback' => 'esc_url',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control( 'hestia_pricing_table_three_link', array(
		'label' => esc_html__( 'Pricing Table Three: Link', 'hestia-pro' ),
		'section' => 'hestia_pricing',
		'priority' => 80,
	));

	$wp_customize->add_setting( 'hestia_pricing_table_three_text', array(
		'default' => esc_html__( 'Order Now', 'hestia-pro' ),
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control( 'hestia_pricing_table_three_text', array(
		'label' => esc_html__( 'Pricing Table Three: Text', 'hestia-pro' ),
		'section' => 'hestia_pricing',
		'priority' => 85,
	));

}

add_action( 'customize_register', 'hestia_pricing_customize_register_three', 99 );

/**
 * Render callback for pricing section third table price selective refresh
 *
 * @return mixed
 */
function hestia_selective_refresh_table_three_price_render_callback() {
	return get_theme_mod( 'hestia_pricing_table_three_price' );
}


/**
 * Render callback for pricing section third table features selective refresh
 */
function hestia_selective_refresh_table_three_features_render_callback() {
	$hestia_pricing_table_three_features = get_theme_mod( 'hestia_pricing_table_three_features' );
	if ( ! is_array( $hestia_pricing_table_three_features ) ) {
		$hestia_pricing_table_three_features = explode( '\n', str_replace( '\r', '', wp_kses_post( force_balance_tags( $hestia_pricing_table_three_features ) ) ) );
	}
	foreach ( $hestia_pricing_table_three_features as $feature ) : ?>
		<li><?php echo wp_kses_post( $feature );?></li>
		<?php
	endforeach;
}
