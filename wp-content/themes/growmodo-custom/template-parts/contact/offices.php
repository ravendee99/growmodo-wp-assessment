<?php
/**
 * Office locations.
 *
 * @package Growmodo_Custom
 */

$offices = array(
	array(
		'group'    => 'headquarters',
		'eyebrow'  => __( 'Main Headquarters', 'growmodo-custom' ),
		'title'    => __( '123 Estatein Plaza, City Center, Metropolis', 'growmodo-custom' ),
		'text'     => __( 'Our main headquarters serve as the heart of Estatein. Located in the bustling city center, this is where our core team of experts operates, driving the excellence and innovation that define us.', 'growmodo-custom' ),
		'email'    => 'info@estatein.com',
		'phone'    => '+1 (123) 456-7890',
		'tel'      => '+11234567890',
		'location' => __( 'Metropolis', 'growmodo-custom' ),
	),
	array(
		'group'    => 'regional',
		'eyebrow'  => __( 'Regional Offices', 'growmodo-custom' ),
		'title'    => __( '456 Urban Avenue, Downtown District, Metropolis', 'growmodo-custom' ),
		'text'     => __( "Estatein's presence extends to multiple regions, each with its own dynamic real estate landscape. Discover our regional offices, staffed by local experts who understand the nuances of their respective markets.", 'growmodo-custom' ),
		'email'    => 'info@restatein.com',
		'phone'    => '+1 (123) 628-7890',
		'tel'      => '+11236287890',
		'location' => __( 'Metropolis', 'growmodo-custom' ),
	),
);

$tabs = array(
	'all'           => __( 'All', 'growmodo-custom' ),
	'regional'      => __( 'Regional', 'growmodo-custom' ),
	'international' => __( 'International', 'growmodo-custom' ),
);
?>
<section class="contact-section" id="offices" aria-labelledby="offices-title">
	<div class="wrap">
		<div class="contact-heading contact-heading--wide">
			<?php get_template_part( 'template-parts/sparkles' ); ?>
			<h2 id="offices-title"><?php esc_html_e( 'Discover Our Office Locations', 'growmodo-custom' ); ?></h2>
			<p><?php esc_html_e( "Estatein is here to serve you across multiple locations. Whether you're looking to meet our team, discuss real estate opportunities, or simply drop by for a chat, we have offices conveniently located to serve your needs. Explore the categories below to find the Estatein office nearest to you", 'growmodo-custom' ); ?></p>
		</div>

		<div class="contact-offices">
			<div class="office-tabs" role="tablist" aria-label="<?php esc_attr_e( 'Office locations', 'growmodo-custom' ); ?>" data-office-tabs>
				<?php foreach ( $tabs as $filter => $label ) : ?>
					<button type="button" role="tab" data-office-filter="<?php echo esc_attr( $filter ); ?>" aria-selected="<?php echo 'all' === $filter ? 'true' : 'false'; ?>">
						<?php echo esc_html( $label ); ?>
					</button>
				<?php endforeach; ?>
			</div>

			<div class="office-grid">
				<?php foreach ( $offices as $office ) : ?>
					<article class="office-card" data-office="<?php echo esc_attr( $office['group'] ); ?>">
						<div class="office-card__copy">
							<p class="office-card__eyebrow"><?php echo esc_html( $office['eyebrow'] ); ?></p>
							<h3><?php echo esc_html( $office['title'] ); ?></h3>
							<p><?php echo esc_html( $office['text'] ); ?></p>
						</div>
						<div class="office-card__pills">
							<a class="office-pill" href="<?php echo esc_url( 'mailto:' . $office['email'] ); ?>">
								<?php growmodo_custom_icon( 'envelope', array( 'width' => 24, 'height' => 24 ) ); ?>
								<span><?php echo esc_html( $office['email'] ); ?></span>
							</a>
							<a class="office-pill" href="<?php echo esc_url( 'tel:' . $office['tel'] ); ?>">
								<?php growmodo_custom_icon( 'phone', array( 'width' => 24, 'height' => 24 ) ); ?>
								<span><?php echo esc_html( $office['phone'] ); ?></span>
							</a>
							<span class="office-pill">
								<?php growmodo_custom_icon( 'pin', array( 'width' => 24, 'height' => 24 ) ); ?>
								<span><?php echo esc_html( $office['location'] ); ?></span>
							</span>
						</div>
						<button class="button button--primary office-card__direction" type="button"><?php esc_html_e( 'Get Direction', 'growmodo-custom' ); ?></button>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
