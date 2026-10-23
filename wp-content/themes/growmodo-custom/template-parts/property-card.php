<?php
/**
 * Featured property card.
 *
 * @package Growmodo_Custom
 *
 * @var array<string, mixed> $args
 */

$property = isset( $args['property'] ) ? $args['property'] : array();

if ( ! $property ) {
	return;
}

$text_id = wp_unique_id( 'property-text-' );
?>
<article class="property-card">
	<?php
	growmodo_custom_image(
		$property['image'],
		$property['alt'],
		$property['width'],
		$property['height'],
		array( 'class' => 'property-card__image' )
	);
	?>
	<div class="property-card__body">
		<div class="property-card__text">
			<h3><?php echo esc_html( $property['title'] ); ?></h3>
			<p class="property-card__description">
				<span id="<?php echo esc_attr( $text_id ); ?>" data-short="<?php echo esc_attr( $property['excerpt'] ); ?>" data-full="<?php echo esc_attr( $property['description'] ); ?>"><?php echo esc_html( $property['excerpt'] ); ?></span>
				<button class="text-button" type="button" aria-expanded="false" aria-controls="<?php echo esc_attr( $text_id ); ?>" data-expand data-label-more="<?php esc_attr_e( 'Read More', 'growmodo-custom' ); ?>" data-label-less="<?php esc_attr_e( 'Read Less', 'growmodo-custom' ); ?>"><?php esc_html_e( 'Read More', 'growmodo-custom' ); ?></button>
			</p>
		</div>
		<ul class="meta-list">
			<li>
				<span class="meta-list__glyph"><?php growmodo_custom_icon( 'bed', array( 'width' => 22, 'height' => 17 ) ); ?></span>
				<?php echo esc_html( $property['beds'] ); ?>
			</li>
			<li>
				<span class="meta-list__glyph"><?php growmodo_custom_icon( 'bath', array( 'width' => 21, 'height' => 21 ) ); ?></span>
				<?php echo esc_html( $property['baths'] ); ?>
			</li>
			<li>
				<span class="meta-list__glyph"><?php growmodo_custom_icon( 'villa', array( 'width' => 24, 'height' => 24 ) ); ?></span>
				<?php echo esc_html( $property['type'] ); ?>
			</li>
		</ul>
		<div class="property-card__footer">
			<p class="property-card__price">
				<span><?php esc_html_e( 'Price', 'growmodo-custom' ); ?></span>
				<strong><?php echo esc_html( $property['price'] ); ?></strong>
			</p>
			<a class="button button--primary" href="<?php echo esc_url( growmodo_custom_destination( 'properties', home_url( '/#featured-properties' ) ) ); ?>"><?php esc_html_e( 'View Property Details', 'growmodo-custom' ); ?></a>
		</div>
	</div>
</article>
