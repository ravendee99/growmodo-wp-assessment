<?php
/**
 * Property gallery, description, and key features.
 *
 * @package Growmodo_Custom
 */

$slides = array(
	array(
		'image'  => 'assets/images/property/thumb-villa.png',
		'alt'    => __( 'Modern villa with a turquoise pool', 'growmodo-custom' ),
		'width'  => 1060,
		'height' => 706,
		'thumb'  => true,
	),
	array(
		'image'  => 'assets/images/property/hero-interior.png',
		'alt'    => __( 'Open living and dining room with pendant lights', 'growmodo-custom' ),
		'width'  => 1060,
		'height' => 706,
	),
	array(
		'image'  => 'assets/images/property/thumb-dusk.png',
		'alt'    => __( 'Villa exterior at dusk', 'growmodo-custom' ),
		'width'  => 1060,
		'height' => 706,
		'thumb'  => true,
	),
	array(
		'image'  => 'assets/images/property/thumb-front.png',
		'alt'    => __( 'Front view of the villa', 'growmodo-custom' ),
		'width'  => 1060,
		'height' => 707,
		'thumb'  => true,
	),
	array(
		'image'  => 'assets/images/property/thumb-lounge.png',
		'alt'    => __( 'Lounge beside the pool', 'growmodo-custom' ),
		'width'  => 1060,
		'height' => 706,
		'thumb'  => true,
	),
	array(
		'image'  => 'assets/images/property/thumb-living.png',
		'alt'    => __( 'Living room seating', 'growmodo-custom' ),
		'width'  => 626,
		'height' => 417,
		'thumb'  => true,
	),
	array(
		'image'  => 'assets/images/property/thumb-seating.png',
		'alt'    => __( 'Second living area', 'growmodo-custom' ),
		'width'  => 626,
		'height' => 417,
		'thumb'  => true,
	),
	array(
		'image'  => 'assets/images/property/thumb-dining.png',
		'alt'    => __( 'Dining area', 'growmodo-custom' ),
		'width'  => 626,
		'height' => 417,
		'thumb'  => true,
	),
	array(
		'image'  => 'assets/images/property/thumb-kitchen.png',
		'alt'    => __( 'Kitchen and dining space', 'growmodo-custom' ),
		'width'  => 626,
		'height' => 417,
		'thumb'  => true,
	),
	array(
		'image'  => 'assets/images/property/thumb-bedroom.png',
		'alt'    => __( 'Bedroom', 'growmodo-custom' ),
		'width'  => 626,
		'height' => 521,
		'thumb'  => true,
	),
);

$slide_data = array();

foreach ( $slides as $slide ) {
	$slide_data[] = array(
		'src' => get_theme_file_uri( $slide['image'] ),
		'alt' => $slide['alt'],
	);
}

$features = array(
	__( 'Expansive oceanfront terrace for outdoor entertaining', 'growmodo-custom' ),
	__( 'Gourmet kitchen with top-of-the-line appliances', 'growmodo-custom' ),
	__( 'Private beach access for morning strolls and sunset views', 'growmodo-custom' ),
	__( 'Master suite with a spa-inspired bathroom and ocean-facing balcony', 'growmodo-custom' ),
	__( 'Private garage and ample storage space', 'growmodo-custom' ),
);
?>
<section class="detail-section detail-hero" aria-labelledby="property-title">
	<div class="wrap detail-hero__stack">
		<div class="detail-intro">
			<div class="detail-titlebar">
				<div class="detail-titlebar__main">
					<h1 id="property-title"><?php esc_html_e( 'Seaside Serenity Villa', 'growmodo-custom' ); ?></h1>
					<p class="detail-location">
						<?php growmodo_custom_icon( 'detail-pin', array( 'width' => 24, 'height' => 24 ) ); ?>
						<?php esc_html_e( 'Malibu, California', 'growmodo-custom' ); ?>
					</p>
				</div>
				<p class="detail-price">
					<span><?php esc_html_e( 'Price', 'growmodo-custom' ); ?></span>
					<strong>$1,250,000</strong>
				</p>
			</div>

			<div class="detail-gallery" data-slideshow data-slides="<?php echo esc_attr( wp_json_encode( $slide_data ) ); ?>">
				<div class="detail-thumbs carousel__track">
					<?php foreach ( $slides as $index => $slide ) : ?>
						<?php if ( empty( $slide['thumb'] ) ) { continue; } ?>
						<button class="detail-thumb<?php echo 0 === $index ? ' is-active' : ''; ?>" type="button" data-slide="<?php echo esc_attr( (string) $index ); ?>" aria-current="<?php echo 0 === $index ? 'true' : 'false'; ?>">
							<?php growmodo_custom_image( $slide['image'], $slide['alt'], $slide['width'], $slide['height'] ); ?>
						</button>
					<?php endforeach; ?>
				</div>
				<div class="detail-photos">
					<figure class="detail-photo">
						<?php growmodo_custom_image( $slides[0]['image'], $slides[0]['alt'], $slides[0]['width'], $slides[0]['height'] ); ?>
					</figure>
					<figure class="detail-photo">
						<?php growmodo_custom_image( $slides[1]['image'], $slides[1]['alt'], $slides[1]['width'], $slides[1]['height'] ); ?>
					</figure>
				</div>
				<div class="detail-pager">
					<button class="icon-button" type="button" data-slideshow-prev>
						<span class="screen-reader-text"><?php esc_html_e( 'Previous photos', 'growmodo-custom' ); ?></span>
						<?php growmodo_custom_icon( 'arrow-left', array( 'width' => 30, 'height' => 30 ) ); ?>
					</button>
					<div class="detail-dots" data-slideshow-dots></div>
					<button class="icon-button" type="button" data-slideshow-next>
						<span class="screen-reader-text"><?php esc_html_e( 'Next photos', 'growmodo-custom' ); ?></span>
						<?php growmodo_custom_icon( 'arrow-right', array( 'width' => 30, 'height' => 30 ) ); ?>
					</button>
				</div>
			</div>
		</div>

		<div class="detail-split">
			<article class="detail-panel">
				<div class="detail-panel__copy">
					<h2><?php esc_html_e( 'Description', 'growmodo-custom' ); ?></h2>
					<p><?php esc_html_e( 'Discover your own piece of paradise with the Seaside Serenity Villa. T With an open floor plan, breathtaking ocean views from every room, and direct access to a pristine sandy beach, this property is the epitome of coastal living.', 'growmodo-custom' ); ?></p>
				</div>
				<ul class="detail-stats">
					<li>
						<p>
							<span class="detail-stat__icon"><?php growmodo_custom_icon( 'detail-bed', array( 'width' => 22, 'height' => 17 ) ); ?></span>
							<?php esc_html_e( 'Bedrooms', 'growmodo-custom' ); ?>
						</p>
						<strong>04</strong>
					</li>
					<li>
						<p>
							<span class="detail-stat__icon"><?php growmodo_custom_icon( 'detail-bath', array( 'width' => 21, 'height' => 21 ) ); ?></span>
							<?php esc_html_e( 'Bathrooms', 'growmodo-custom' ); ?>
						</p>
						<strong>03</strong>
					</li>
					<li>
						<p>
							<span class="detail-stat__icon"><?php growmodo_custom_icon( 'detail-area', array( 'width' => 21, 'height' => 21 ) ); ?></span>
							<?php esc_html_e( 'Area', 'growmodo-custom' ); ?>
						</p>
						<strong><?php esc_html_e( '2,500 Square Feet', 'growmodo-custom' ); ?></strong>
					</li>
				</ul>
			</article>
			<article class="detail-panel">
				<h2><?php esc_html_e( 'Key Features and Amenities', 'growmodo-custom' ); ?></h2>
				<ul class="detail-features">
					<?php foreach ( $features as $feature ) : ?>
						<li>
							<?php growmodo_custom_icon( 'detail-bolt', array( 'width' => 24, 'height' => 24 ) ); ?>
							<span><?php echo esc_html( $feature ); ?></span>
						</li>
					<?php endforeach; ?>
				</ul>
			</article>
		</div>
	</div>
</section>
