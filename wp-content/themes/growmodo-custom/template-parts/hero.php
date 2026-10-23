<?php
/**
 * Home hero.
 *
 * @package Growmodo_Custom
 */

$features = array(
	array(
		'image' => 'assets/images/home/feature-dream-home.svg',
		'label' => __( 'Find Your Dream Home', 'growmodo-custom' ),
	),
	array(
		'image' => 'assets/images/home/feature-property-value.svg',
		'label' => __( 'Unlock Property Value', 'growmodo-custom' ),
	),
	array(
		'image' => 'assets/images/home/feature-management.svg',
		'label' => __( 'Effortless Property Management', 'growmodo-custom' ),
	),
	array(
		'image' => 'assets/images/home/feature-investments.svg',
		'label' => __( 'Smart Investments, Informed Decisions', 'growmodo-custom' ),
	),
);

$stats = array(
	array( '200+', __( 'Happy Customers', 'growmodo-custom' ) ),
	array( '10k+', __( 'Properties For Clients', 'growmodo-custom' ) ),
	array( '16+', __( 'Years of Experience', 'growmodo-custom' ) ),
);
?>
<section class="hero" id="hero" aria-labelledby="hero-title">
	<div class="hero__top">
		<div class="hero__copy">
			<div class="hero__heading">
				<h1 id="hero-title"><?php esc_html_e( 'Discover Your Dream Property with Estatein', 'growmodo-custom' ); ?></h1>
				<a class="hero-orbit" href="<?php echo esc_url( home_url( '/#featured-properties' ) ); ?>">
					<?php
					growmodo_custom_image(
						'assets/images/home/banner_ring.svg',
						'',
						175,
						175,
						array(
							'class'   => 'hero-orbit__ring',
							'loading' => 'eager',
						)
					);
					?>
					<span class="screen-reader-text"><?php esc_html_e( 'Discover your dream property', 'growmodo-custom' ); ?></span>
				</a>
				<p class="hero__lede"><?php esc_html_e( 'Your journey to finding the perfect property begins here. Explore our listings to find the home that matches your dreams.', 'growmodo-custom' ); ?></p>
			</div>
			<div class="hero__actions">
				<a class="button" href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'Learn More', 'growmodo-custom' ); ?></a>
				<a class="button button--primary" href="<?php echo esc_url( home_url( '/#featured-properties' ) ); ?>"><?php esc_html_e( 'Browse Properties', 'growmodo-custom' ); ?></a>
			</div>
			<ul class="stats">
				<?php foreach ( $stats as $stat ) : ?>
					<li>
						<p class="stats__value"><?php echo esc_html( $stat[0] ); ?></p>
						<p class="stats__label"><?php echo esc_html( $stat[1] ); ?></p>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>

		<div class="hero__media">
			<div class="hero__frame">
				<?php
				growmodo_custom_image(
					'assets/images/home/abstract-hero.svg',
					'',
					1923,
					1284,
					array(
						'class'   => 'hero__abstract',
						'loading' => 'eager',
					)
				);
				growmodo_custom_image(
					'assets/images/home/hero-towers.png',
					__( 'Blue glass towers', 'growmodo-custom' ),
					920,
					814,
					array(
						'class'         => 'hero__photo',
						'loading'       => 'eager',
						'fetchpriority' => 'high',
					)
				);
				?>
			</div>
		</div>
	</div>

	<div class="hero__features" id="services">
		<ul>
			<?php foreach ( $features as $feature ) : ?>
				<li>
					<a class="feature-card" href="<?php echo esc_url( home_url( '/#featured-properties' ) ); ?>">
						<?php growmodo_custom_icon( 'arrow-up-right', array( 'class' => 'feature-card__arrow icon', 'width' => 34, 'height' => 34 ) ); ?>
						<span class="feature-card__rings">
							<span class="feature-card__ring">
								<?php
								growmodo_custom_image(
									$feature['image'],
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
						<span class="feature-card__label"><?php echo esc_html( $feature['label'] ); ?></span>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>
