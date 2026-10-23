<?php
/**
 * Services hero and service shortcuts.
 *
 * @package Growmodo_Custom
 */

$shortcuts = array(
	array(
		'image' => 'assets/images/home/feature-dream-home.svg',
		'label' => __( 'Find Your Dream Home', 'growmodo-custom' ),
		'url'   => growmodo_custom_destination( 'properties', home_url( '/#featured-properties' ) ),
	),
	array(
		'image' => 'assets/images/home/feature-property-value.svg',
		'label' => __( 'Unlock Property Value', 'growmodo-custom' ),
		'url'   => '#unlock-property-value',
	),
	array(
		'image' => 'assets/images/home/feature-management.svg',
		'label' => __( 'Effortless Property Management', 'growmodo-custom' ),
		'url'   => '#effortless-property-management',
	),
	array(
		'image' => 'assets/images/home/feature-investments.svg',
		'label' => __( 'Smart Investments, Informed Decisions', 'growmodo-custom' ),
		'url'   => '#smart-investments',
	),
);
?>
<section class="services-hero" aria-labelledby="services-title">
	<div class="services-hero__intro">
		<div class="wrap services-hero__copy">
			<h1 id="services-title"><?php esc_html_e( 'Elevate Your Real Estate Experience', 'growmodo-custom' ); ?></h1>
			<p><?php esc_html_e( 'Welcome to Estatein, where your real estate aspirations meet expert guidance. Explore our comprehensive range of services, each designed to cater to your unique needs and dreams.', 'growmodo-custom' ); ?></p>
		</div>
	</div>
	<div class="hero__features services-hero__bar">
		<ul>
			<?php foreach ( $shortcuts as $shortcut ) : ?>
				<li>
					<a class="feature-card" href="<?php echo esc_url( $shortcut['url'] ); ?>">
						<?php growmodo_custom_icon( 'arrow-up-right', array( 'class' => 'feature-card__arrow icon', 'width' => 34, 'height' => 34 ) ); ?>
						<span class="feature-card__rings">
							<span class="feature-card__ring">
								<?php
								growmodo_custom_image(
									$shortcut['image'],
									'',
									34,
									34,
									array(
										'class' => 'feature-card__glyph',
									)
								);
								?>
							</span>
						</span>
						<span class="feature-card__label"><?php echo esc_html( $shortcut['label'] ); ?></span>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>
