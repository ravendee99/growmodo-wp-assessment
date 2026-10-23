<?php
/**
 * Properties listing.
 *
 * @package Growmodo_Custom
 */

$properties = array(
	array(
		'category' => __( 'Coastal Escapes - Where Waves Beckon', 'growmodo-custom' ),
		'title'    => __( 'Seaside Serenity Villa', 'growmodo-custom' ),
		'excerpt'  => __( 'Wake up to the soothing melody of waves. This beachfront villa offers...', 'growmodo-custom' ),
		'price'    => '$1,250,000',
		'image'    => 'assets/images/properties/seaside.png',
		'alt'      => __( 'Seaside villa with a pool and palm trees', 'growmodo-custom' ),
		'width'    => 1060,
		'height'   => 706,
		'url'      => growmodo_custom_destination( 'seaside-serenity-villa', '#inquiry' ),
	),
	array(
		'category' => __( 'Urban Oasis - Life in the Heart of the City', 'growmodo-custom' ),
		'title'    => __( 'Metropolitan Haven', 'growmodo-custom' ),
		'excerpt'  => __( 'Immerse yourself in the energy of the city. This modern apartment in the heart...', 'growmodo-custom' ),
		'price'    => '$650,000',
		'image'    => 'assets/images/properties/metropolitan.png',
		'alt'      => __( 'City plaza surrounded by glass towers', 'growmodo-custom' ),
		'width'    => 626,
		'height'   => 504,
	),
	array(
		'category' => __( "Countryside Charm - Escape to Nature's Embrace", 'growmodo-custom' ),
		'title'    => __( 'Rustic Retreat Cottage', 'growmodo-custom' ),
		'excerpt'  => __( 'Find tranquility in the countryside. This charming cottage is nestled amidst rolling hills...', 'growmodo-custom' ),
		'price'    => '$350,000',
		'image'    => 'assets/images/properties/cottage.png',
		'alt'      => __( 'Glass tower illuminated at night', 'growmodo-custom' ),
		'width'    => 740,
		'height'   => 688,
	),
);
?>
<section class="properties-section" id="property-listings" aria-labelledby="listings-title">
	<div class="wrap">
		<div class="properties-heading">
			<?php get_template_part( 'template-parts/sparkles' ); ?>
			<h2 id="listings-title"><?php esc_html_e( 'Discover a World of Possibilities', 'growmodo-custom' ); ?></h2>
			<p><?php esc_html_e( 'Our portfolio of properties is as diverse as your dreams. Explore the following categories to find the perfect property that resonates with your vision of home', 'growmodo-custom' ); ?></p>
		</div>

		<div class="carousel" data-carousel data-label="<?php esc_attr_e( 'Property listings', 'growmodo-custom' ); ?>">
			<div class="carousel__track">
				<?php foreach ( $properties as $property ) : ?>
					<article class="listing-card">
						<div class="listing-card__media">
							<?php
							growmodo_custom_image(
								$property['image'],
								$property['alt'],
								$property['width'],
								$property['height']
							);
							?>
						</div>
						<div class="listing-card__body">
							<div class="listing-card__text">
								<p class="listing-card__category"><?php echo esc_html( $property['category'] ); ?></p>
								<h3><?php echo esc_html( $property['title'] ); ?></h3>
								<p class="listing-card__excerpt">
									<?php echo esc_html( $property['excerpt'] ); ?>
									<span class="listing-card__more"><?php esc_html_e( 'Read More', 'growmodo-custom' ); ?></span>
								</p>
							</div>
							<div class="listing-card__footer">
								<p class="listing-card__price">
									<span><?php esc_html_e( 'Price', 'growmodo-custom' ); ?></span>
									<strong><?php echo esc_html( $property['price'] ); ?></strong>
								</p>
								<a class="button button--primary" href="<?php echo esc_url( isset( $property['url'] ) ? $property['url'] : '#inquiry' ); ?>"><?php esc_html_e( 'View Property Details', 'growmodo-custom' ); ?></a>
							</div>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
			<div class="carousel__bar">
				<p class="carousel__status"><span>01</span> <?php esc_html_e( 'of 10', 'growmodo-custom' ); ?></p>
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
