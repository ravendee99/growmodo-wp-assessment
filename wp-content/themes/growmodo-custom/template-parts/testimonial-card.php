<?php
/**
 * Testimonial card.
 *
 * @package Growmodo_Custom
 *
 * @var array<string, mixed> $args
 */

$testimonial = isset( $args['testimonial'] ) ? $args['testimonial'] : array();

if ( ! $testimonial ) {
	return;
}
?>
<article class="testimonial-card">
	<div class="stars" role="img" aria-label="<?php esc_attr_e( 'Rated 5 out of 5 stars', 'growmodo-custom' ); ?>">
		<?php for ( $star = 0; $star < 5; $star++ ) : ?>
			<?php growmodo_custom_icon( 'star', array( 'class' => 'stars__icon icon', 'width' => 44, 'height' => 44 ) ); ?>
		<?php endfor; ?>
	</div>
	<div class="testimonial-card__text">
		<h3><?php echo esc_html( $testimonial['title'] ); ?></h3>
		<p class="testimonial-card__quote"><?php echo esc_html( $testimonial['quote'] ); ?></p>
	</div>
	<div class="testimonial-card__person">
		<?php
		growmodo_custom_image(
			$testimonial['image'],
			'',
			$testimonial['width'],
			$testimonial['height'],
			array( 'class' => 'testimonial-card__photo' )
		);
		?>
		<p>
			<strong><?php echo esc_html( $testimonial['name'] ); ?></strong>
			<span><?php echo esc_html( $testimonial['location'] ); ?></span>
		</p>
	</div>
</article>
