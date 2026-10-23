<?php
/**
 * Service category card.
 *
 * @package Growmodo_Custom
 */

$icon  = isset( $args['icon'] ) ? $args['icon'] : '';
$title = isset( $args['title'] ) ? $args['title'] : '';
$text  = isset( $args['text'] ) ? $args['text'] : '';
$fill  = ! empty( $args['fill'] );
?>
<article class="service-card<?php echo $fill ? ' service-card--fill' : ''; ?>">
	<div class="service-card__head">
		<span class="service-card__rings">
			<span class="service-card__ring">
				<?php growmodo_custom_image( $icon, '', 34, 34, array( 'class' => 'service-card__glyph' ) ); ?>
			</span>
		</span>
		<h3><?php echo esc_html( $title ); ?></h3>
	</div>
	<p><?php echo esc_html( $text ); ?></p>
</article>
