<?php
/**
 * Property management services.
 *
 * @package Growmodo_Custom
 */

$cards = array(
	array(
		'icon'  => 'assets/images/services/tenant.svg',
		'title' => __( 'Tenant Harmony', 'growmodo-custom' ),
		'text'  => __( 'Our Tenant Management services ensure that your tenants have a smooth and reducing vacancies.', 'growmodo-custom' ),
	),
	array(
		'icon'  => 'assets/images/services/maintenance.svg',
		'title' => __( 'Maintenance Ease', 'growmodo-custom' ),
		'text'  => __( 'Say goodbye to property maintenance headaches. We handle all aspects of property upkeep.', 'growmodo-custom' ),
	),
	array(
		'icon'  => 'assets/images/services/financial.svg',
		'title' => __( 'Financial Peace of Mind', 'growmodo-custom' ),
		'text'  => __( 'Managing property finances can be complex. Our financial experts take care of rent collection', 'growmodo-custom' ),
	),
	array(
		'icon'  => 'assets/images/home/feature-investments.svg',
		'title' => __( 'Legal Guardian', 'growmodo-custom' ),
		'text'  => __( 'Stay compliant with property laws and regulations effortlessly.', 'growmodo-custom' ),
	),
);
?>
<section class="services-section" id="effortless-property-management" aria-labelledby="property-management-title">
	<div class="wrap">
		<div class="services-heading services-heading--wide">
			<?php get_template_part( 'template-parts/sparkles' ); ?>
			<h2 id="property-management-title"><?php esc_html_e( 'Effortless Property Management', 'growmodo-custom' ); ?></h2>
			<p><?php esc_html_e( 'Owning a property should be a pleasure, not a hassle. Estatein\'s Property Management Service takes the stress out of property ownership, offering comprehensive solutions tailored to your needs. Explore the categories below to see how we can make property management effortless for you', 'growmodo-custom' ); ?></p>
		</div>
		<div class="service-grid">
			<?php foreach ( $cards as $card ) : ?>
				<?php get_template_part( 'template-parts/services/card', null, $card ); ?>
			<?php endforeach; ?>
			<article class="service-promo">
				<div class="service-promo__row">
					<h3><?php esc_html_e( 'Experience Effortless Property Management', 'growmodo-custom' ); ?></h3>
					<button class="button" type="button"><?php esc_html_e( 'Learn More', 'growmodo-custom' ); ?></button>
				</div>
				<p><?php esc_html_e( 'Ready to experience hassle-free property management? Explore our Property Management Service categories and let us handle the complexities while you enjoy the benefits of property ownership.', 'growmodo-custom' ); ?></p>
			</article>
		</div>
	</div>
</section>
