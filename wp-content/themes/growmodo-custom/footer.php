<?php
/**
 * Shared call to action and site footer.
 *
 * @package Growmodo_Custom
 */

$services_page = growmodo_custom_destination( 'services', home_url( '/#services' ) );
$contact_page  = growmodo_custom_destination( 'contact-us', home_url( '/#contact' ) );
$contact_link  = static function ( $fragment ) use ( $contact_page ) {
	if ( false !== strpos( $contact_page, '#' ) ) {
		return $contact_page;
	}

	return $contact_page . $fragment;
};
$services_link = static function ( $fragment ) use ( $services_page ) {
	if ( false !== strpos( $services_page, '#' ) ) {
		return $services_page;
	}

	return $services_page . $fragment;
};

$footer_columns = array(
	array(
		'heading' => __( 'Home', 'growmodo-custom' ),
		'links'   => array(
			array( __( 'Hero Section', 'growmodo-custom' ), home_url( '/#hero' ) ),
			array( __( 'Features', 'growmodo-custom' ), home_url( '/#services' ) ),
			array( __( 'Properties', 'growmodo-custom' ), home_url( '/#featured-properties' ) ),
			array( __( 'Testimonials', 'growmodo-custom' ), home_url( '/#testimonials' ) ),
			array( __( 'FAQ’s', 'growmodo-custom' ), home_url( '/#faq' ) ),
		),
	),
	array(
		'heading' => __( 'About Us', 'growmodo-custom' ),
		'links'   => array(
			array( __( 'Our Story', 'growmodo-custom' ), growmodo_custom_destination( 'about-us' ) ),
			array( __( 'Our Works', 'growmodo-custom' ), growmodo_custom_destination( 'about-us' ) ),
			array( __( 'How It Works', 'growmodo-custom' ), growmodo_custom_destination( 'about-us' ) ),
			array( __( 'Our Team', 'growmodo-custom' ), growmodo_custom_destination( 'about-us' ) ),
			array( __( 'Our Clients', 'growmodo-custom' ), growmodo_custom_destination( 'about-us' ) ),
		),
	),
	array(
		'heading' => __( 'Properties', 'growmodo-custom' ),
		'links'   => array(
			array( __( 'Portfolio', 'growmodo-custom' ), growmodo_custom_destination( 'properties', home_url( '/#featured-properties' ) ) ),
			array( __( 'Categories', 'growmodo-custom' ), growmodo_custom_destination( 'properties', home_url( '/#featured-properties' ) ) ),
		),
	),
	array(
		'heading' => __( 'Services', 'growmodo-custom' ),
		'links'   => array(
			array( __( 'Valuation Mastery', 'growmodo-custom' ), $services_link( '#unlock-property-value' ) ),
			array( __( 'Strategic Marketing', 'growmodo-custom' ), $services_link( '#unlock-property-value' ) ),
			array( __( 'Negotiation Wizardry', 'growmodo-custom' ), $services_link( '#unlock-property-value' ) ),
			array( __( 'Closing Success', 'growmodo-custom' ), $services_link( '#unlock-property-value' ) ),
			array( __( 'Property Management', 'growmodo-custom' ), $services_link( '#effortless-property-management' ) ),
		),
	),
	array(
		'heading' => __( 'Contact Us', 'growmodo-custom' ),
		'links'   => array(
			array( __( 'Contact Form', 'growmodo-custom' ), $contact_link( '#lets-connect' ) ),
			array( __( 'Our Offices', 'growmodo-custom' ), $contact_link( '#offices' ) ),
		),
	),
);

$social_links = array(
	array( 'facebook', __( 'Estatein on Facebook', 'growmodo-custom' ) ),
	array( 'linkedin', __( 'Estatein on LinkedIn', 'growmodo-custom' ) ),
	array( 'twitter', __( 'Estatein on Twitter', 'growmodo-custom' ) ),
	array( 'youtube', __( 'Estatein on YouTube', 'growmodo-custom' ) ),
);
?>
<?php get_template_part( 'template-parts/cta' ); ?>

<footer id="contact" class="site-footer">
	<div class="site-footer__main wrap">
		<div class="site-footer__brand">
			<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php
				growmodo_custom_image(
					'assets/images/logo.svg',
					__( 'Estatein', 'growmodo-custom' ),
					160,
					48,
					array(
						'class'   => 'logo__img',
						'loading' => 'lazy',
					)
				);
				?>
			</a>

			<form class="subscribe" action="#contact" method="post" data-status="<?php esc_attr_e( 'Thanks. This preview does not send email yet.', 'growmodo-custom' ); ?>">
				<label class="screen-reader-text" for="footer-email"><?php esc_html_e( 'Email address', 'growmodo-custom' ); ?></label>
				<?php growmodo_custom_icon( 'mail', array( 'class' => 'subscribe__mail icon', 'width' => 24, 'height' => 24 ) ); ?>
				<input id="footer-email" type="email" name="email" autocomplete="email" required placeholder="<?php esc_attr_e( 'Enter Your Email', 'growmodo-custom' ); ?>">
				<button class="icon-button subscribe__send" type="submit">
					<span class="screen-reader-text"><?php esc_html_e( 'Subscribe', 'growmodo-custom' ); ?></span>
					<?php growmodo_custom_icon( 'send', array( 'width' => 25, 'height' => 25 ) ); ?>
				</button>
				<p class="subscribe__status" role="status" hidden></p>
			</form>
		</div>

		<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer', 'growmodo-custom' ); ?>">
			<?php foreach ( $footer_columns as $column ) : ?>
				<div class="footer-column">
					<h2><?php echo esc_html( $column['heading'] ); ?></h2>
					<ul>
						<?php foreach ( $column['links'] as $link ) : ?>
							<li><a href="<?php echo esc_url( $link[1] ); ?>"><?php echo esc_html( $link[0] ); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endforeach; ?>
		</nav>
	</div>

	<div class="site-footer__bar">
		<div class="site-footer__bar-inner wrap">
			<ul class="site-footer__legal">
				<li><?php esc_html_e( '@2023 Estatein. All Rights Reserved.', 'growmodo-custom' ); ?></li>
				<li><a href="<?php echo esc_url( growmodo_custom_destination( 'terms-conditions' ) ); ?>"><?php esc_html_e( 'Terms & Conditions', 'growmodo-custom' ); ?></a></li>
			</ul>
			<ul class="social-links">
				<?php foreach ( $social_links as $social ) : ?>
					<li>
						<a class="icon-button" href="#" aria-label="<?php echo esc_attr( $social[1] ); ?>">
							<?php
							growmodo_custom_icon(
								$social[0],
								array(
									'width'  => 24,
									'height' => 24,
								)
							);
							?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
