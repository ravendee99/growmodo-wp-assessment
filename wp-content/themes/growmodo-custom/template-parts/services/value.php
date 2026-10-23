<?php
/**
 * Property selling services.
 *
 * @package Growmodo_Custom
 */

$cards = array(
	array(
		'icon'  => 'assets/images/services/valuation.svg',
		'title' => __( 'Valuation Mastery', 'growmodo-custom' ),
		'text'  => __( 'Discover the true worth of your property with our expert valuation services.', 'growmodo-custom' ),
	),
	array(
		'icon'  => 'assets/images/services/marketing.svg',
		'title' => __( 'Strategic Marketing', 'growmodo-custom' ),
		'text'  => __( 'Selling a property requires more than just a listing; it demands a strategic marketing approach.', 'growmodo-custom' ),
	),
	array(
		'icon'  => 'assets/images/services/negotiation.svg',
		'title' => __( 'Negotiation Wizardry', 'growmodo-custom' ),
		'text'  => __( 'Negotiating the best deal is an art, and our negotiation experts are masters of it.', 'growmodo-custom' ),
	),
	array(
		'icon'  => 'assets/images/services/closing.svg',
		'title' => __( 'Closing Success', 'growmodo-custom' ),
		'text'  => __( 'A successful sale is not complete until the closing. We guide you through the intricate closing process.', 'growmodo-custom' ),
	),
);
?>
<section class="services-section" id="unlock-property-value" aria-labelledby="unlock-property-value-title">
	<div class="wrap">
		<div class="services-heading services-heading--wide">
			<?php get_template_part( 'template-parts/sparkles' ); ?>
			<h2 id="unlock-property-value-title"><?php esc_html_e( 'Unlock Property Value', 'growmodo-custom' ); ?></h2>
			<p><?php esc_html_e( 'Selling your property should be a rewarding experience, and at Estatein, we make sure it is. Our Property Selling Service is designed to maximize the value of your property, ensuring you get the best deal possible. Explore the categories below to see how we can help you at every step of your selling journey', 'growmodo-custom' ); ?></p>
		</div>
		<div class="service-grid">
			<?php foreach ( $cards as $card ) : ?>
				<?php get_template_part( 'template-parts/services/card', null, $card ); ?>
			<?php endforeach; ?>
			<article class="service-promo">
				<div class="service-promo__row">
					<h3><?php esc_html_e( 'Unlock the Value of Your Property Today', 'growmodo-custom' ); ?></h3>
					<button class="button" type="button"><?php esc_html_e( 'Learn More', 'growmodo-custom' ); ?></button>
				</div>
				<p><?php esc_html_e( 'Ready to unlock the true value of your property? Explore our Property Selling Service categories and let us help you achieve the best deal possible for your valuable asset.', 'growmodo-custom' ); ?></p>
			</article>
		</div>
	</div>
</section>
