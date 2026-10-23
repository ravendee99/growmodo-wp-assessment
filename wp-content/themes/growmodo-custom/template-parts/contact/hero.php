<?php
/**
 * Contact hero and direct contact shortcuts.
 *
 * @package Growmodo_Custom
 */

$shortcuts = array(
	array(
		'image' => 'assets/images/contact/mail.svg',
		'label' => __( 'info@estatein.com', 'growmodo-custom' ),
		'url'   => 'mailto:info@estatein.com',
	),
	array(
		'image' => 'assets/images/contact/phone.svg',
		'label' => __( '+1 (123) 456-7890', 'growmodo-custom' ),
		'url'   => 'tel:+11234567890',
	),
	array(
		'image' => 'assets/images/contact/pin.svg',
		'label' => __( 'Main Headquarters', 'growmodo-custom' ),
		'url'   => '#offices',
	),
);

$socials = array(
	array( __( 'Instagram', 'growmodo-custom' ), '#' ),
	array( __( 'LinkedIn', 'growmodo-custom' ), '#' ),
	array( __( 'Facebook', 'growmodo-custom' ), '#' ),
);
?>
<section class="contact-hero" aria-labelledby="contact-title">
	<div class="contact-hero__intro">
		<div class="wrap contact-hero__copy">
			<h1 id="contact-title"><?php esc_html_e( 'Get in Touch with Estatein', 'growmodo-custom' ); ?></h1>
			<p><?php esc_html_e( "Welcome to Estatein's Contact Us page. We're here to assist you with any inquiries, requests, or feedback you may have. Whether you're looking to buy or sell a property, explore investment opportunities, or simply want to connect, we're just a message away. Reach out to us, and let's start a conversation.", 'growmodo-custom' ); ?></p>
		</div>
	</div>
	<div class="hero__features contact-hero__bar">
		<ul>
			<?php foreach ( $shortcuts as $shortcut ) : ?>
				<li>
					<a class="feature-card" href="<?php echo esc_url( $shortcut['url'] ); ?>">
						<?php growmodo_custom_icon( 'arrow-up-right', array( 'class' => 'feature-card__arrow icon', 'width' => 34, 'height' => 34 ) ); ?>
						<span class="feature-card__rings">
							<span class="feature-card__ring">
								<?php
								growmodo_custom_image(
									$shortcut['image'],
									'',
									34,
									34,
									array(
										'class' => 'feature-card__glyph',
									)
								);
								?>
							</span>
						</span>
						<span class="feature-card__label"><?php echo esc_html( $shortcut['label'] ); ?></span>
					</a>
				</li>
			<?php endforeach; ?>
			<li>
				<div class="feature-card">
					<?php growmodo_custom_icon( 'arrow-up-right', array( 'class' => 'feature-card__arrow icon', 'width' => 34, 'height' => 34 ) ); ?>
					<span class="feature-card__rings">
						<span class="feature-card__ring">
							<span class="feature-card__glyph feature-card__glyph--mark">
								<?php
								growmodo_custom_image(
									'assets/images/contact/social.svg',
									'',
									28,
									28,
									array(
										'class' => 'feature-card__mark',
									)
								);
								?>
							</span>
						</span>
					</span>
					<span class="feature-card__links">
						<?php foreach ( $socials as $social ) : ?>
							<a href="<?php echo esc_url( $social[1] ); ?>"><?php echo esc_html( $social[0] ); ?></a>
						<?php endforeach; ?>
					</span>
				</div>
			</li>
		</ul>
	</div>
</section>
