<?php
/**
 * Featured properties section.
 *
 * @package Growmodo_Custom
 */

$properties = array(
	array(
		'title'       => __( 'Seaside Serenity Villa', 'growmodo-custom' ),
		'excerpt'     => __( 'A stunning 4-bedroom, 3-bathroom villa in a peaceful suburban neighborhood...', 'growmodo-custom' ),
		'description' => __( 'A stunning 4-bedroom, 3-bathroom villa in a peaceful suburban neighborhood with ocean views, a private garden, and a swimming pool.', 'growmodo-custom' ),
		'beds'        => __( '4-Bedroom', 'growmodo-custom' ),
		'baths'       => __( '3-Bathroom', 'growmodo-custom' ),
		'type'        => __( 'Villa', 'growmodo-custom' ),
		'price'       => '$550,000',
		'image'       => 'assets/images/home/property-seaside-villa.png',
		'alt'         => __( 'Seaside Serenity Villa with a pool and palm trees', 'growmodo-custom' ),
		'width'       => 1060,
		'height'      => 706,
	),
	array(
		'title'       => __( 'Metropolitan Haven', 'growmodo-custom' ),
		'excerpt'     => __( 'A chic and fully-furnished 2-bedroom apartment with panoramic city views...', 'growmodo-custom' ),
		'description' => __( 'A chic and fully-furnished 2-bedroom apartment in a prime urban location with panoramic city views and contemporary finishes.', 'growmodo-custom' ),
		'beds'        => __( '2-Bedroom', 'growmodo-custom' ),
		'baths'       => __( '2-Bathroom', 'growmodo-custom' ),
		'type'        => __( 'Villa', 'growmodo-custom' ),
		'price'       => '$550,000',
		'image'       => 'assets/images/home/property-city-plaza.png',
		'alt'         => __( 'City plaza surrounded by glass towers', 'growmodo-custom' ),
		'width'       => 626,
		'height'      => 504,
	),
	array(
		'title'       => __( 'Rustic Retreat Cottage', 'growmodo-custom' ),
		'excerpt'     => __( 'An elegant 3-bedroom, 2.5-bathroom townhouse in a gated community...', 'growmodo-custom' ),
		'description' => __( 'An elegant 3-bedroom, 2.5-bathroom townhouse in a gated community.', 'growmodo-custom' ),
		'beds'        => __( '3-Bedroom', 'growmodo-custom' ),
		'baths'       => __( '3-Bathroom', 'growmodo-custom' ),
		'type'        => __( 'Villa', 'growmodo-custom' ),
		'price'       => '$550,000',
		'image'       => 'assets/images/home/property-night-tower.png',
		'alt'         => __( 'Glass tower illuminated at night', 'growmodo-custom' ),
		'width'       => 740,
		'height'      => 688,
	),
);
?>
<section class="home-section" id="featured-properties" aria-labelledby="featured-title">
	<div class="wrap">
		<div class="section-heading">
			<div class="section-heading__text">
				<div class="sparkles" aria-hidden="true">
					<span class="sparkles__lg"><?php growmodo_custom_image( 'assets/images/home/sparkle.svg', '', 60, 60 ); ?></span>
					<span class="sparkles__md"><?php growmodo_custom_image( 'assets/images/home/sparkle-md.svg', '', 36, 36 ); ?></span>
					<span class="sparkles__sm"><?php growmodo_custom_image( 'assets/images/home/sparkle-sm.svg', '', 17, 17 ); ?></span>
				</div>
				<h2 id="featured-title"><?php esc_html_e( 'Featured Properties', 'growmodo-custom' ); ?></h2>
				<p>
					<?php esc_html_e( 'Explore our handpicked selection of featured properties. Each listing offers a glimpse into exceptional homes and investments available through Estatein.', 'growmodo-custom' ); ?>
					<span class="section-heading__extra"><?php esc_html_e( 'Click "View Details" for more information.', 'growmodo-custom' ); ?></span>
				</p>
			</div>
			<a class="button" href="<?php echo esc_url( growmodo_custom_destination( 'properties', home_url( '/#featured-properties' ) ) ); ?>"><?php esc_html_e( 'View All Properties', 'growmodo-custom' ); ?></a>
		</div>

		<div class="carousel" data-carousel data-label="<?php esc_attr_e( 'Featured properties', 'growmodo-custom' ); ?>">
			<div class="carousel__track">
				<?php foreach ( $properties as $property ) : ?>
					<?php get_template_part( 'template-parts/property-card', null, array( 'property' => $property ) ); ?>
				<?php endforeach; ?>
			</div>
			<div class="carousel__bar">
				<a class="button carousel__more" href="<?php echo esc_url( growmodo_custom_destination( 'properties', home_url( '/#featured-properties' ) ) ); ?>"><?php esc_html_e( 'View All Properties', 'growmodo-custom' ); ?></a>
				<p class="carousel__status"><span>01</span> <?php esc_html_e( 'of 60', 'growmodo-custom' ); ?></p>
				<div class="carousel__nav">
					<button class="icon-button" type="button" data-carousel-prev>
						<span class="screen-reader-text"><?php esc_html_e( 'Previous properties', 'growmodo-custom' ); ?></span>
						<?php growmodo_custom_icon( 'arrow-left', array( 'width' => 30, 'height' => 30 ) ); ?>
					</button>
					<button class="icon-button" type="button" data-carousel-next>
						<span class="screen-reader-text"><?php esc_html_e( 'Next properties', 'growmodo-custom' ); ?></span>
						<?php growmodo_custom_icon( 'arrow-right', array( 'width' => 30, 'height' => 30 ) ); ?>
					</button>
				</div>
			</div>
		</div>
	</div>
</section>
