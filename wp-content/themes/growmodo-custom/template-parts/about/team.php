<?php
/**
 * About page team.
 *
 * @package Growmodo_Custom
 */

$team = array(
	array(
		'name'   => __( 'Max Mitchell', 'growmodo-custom' ),
		'role'   => __( 'Founder', 'growmodo-custom' ),
		'image'  => 'assets/images/about/team-max.png',
		'width'  => 1060,
		'height' => 706,
	),
	array(
		'name'   => __( 'Sarah Johnson', 'growmodo-custom' ),
		'role'   => __( 'Chief Real Estate Officer', 'growmodo-custom' ),
		'image'  => 'assets/images/about/team-sarah.png',
		'width'  => 635,
		'height' => 506,
	),
	array(
		'name'   => __( 'David Brown', 'growmodo-custom' ),
		'role'   => __( 'Head of Property Management', 'growmodo-custom' ),
		'image'  => 'assets/images/about/team-david.png',
		'width'  => 626,
		'height' => 482,
	),
	array(
		'name'   => __( 'Michael Turner', 'growmodo-custom' ),
		'role'   => __( 'Legal Counsel', 'growmodo-custom' ),
		'image'  => 'assets/images/about/team-michael.png',
		'width'  => 634,
		'height' => 506,
	),
);

$hello = growmodo_custom_destination( 'contact-us', home_url( '/#contact' ) );
?>
<section class="about-section" id="our-team" aria-labelledby="team-title">
	<div class="wrap">
		<div class="about-heading about-heading--wide">
			<?php get_template_part( 'template-parts/sparkles' ); ?>
			<h2 id="team-title"><?php esc_html_e( 'Meet the Estatein Team', 'growmodo-custom' ); ?></h2>
			<p><?php esc_html_e( 'At Estatein, our success is driven by the dedication and expertise of our team. Get to know the people behind our mission to make your real estate dreams a reality.', 'growmodo-custom' ); ?></p>
		</div>
		<div class="team-grid">
			<?php foreach ( $team as $member ) : ?>
				<article class="team-card">
					<div class="team-card__photo">
						<?php growmodo_custom_image( $member['image'], '', $member['width'], $member['height'] ); ?>
						<a class="team-card__social" href="#" aria-label="<?php echo esc_attr( sprintf( /* translators: %s: team member name. */ __( '%s on Twitter', 'growmodo-custom' ), $member['name'] ) ); ?>">
							<?php growmodo_custom_icon( 'twitter-mark', array( 'width' => 24, 'height' => 24 ) ); ?>
						</a>
					</div>
					<div class="team-card__body">
						<h3><?php echo esc_html( $member['name'] ); ?></h3>
						<p class="team-card__role"><?php echo esc_html( $member['role'] ); ?></p>
						<a class="team-card__hello" href="<?php echo esc_url( $hello ); ?>">
							<span><?php esc_html_e( 'Say Hello 👋', 'growmodo-custom' ); ?></span>
							<span class="team-card__send" aria-hidden="true">
								<?php growmodo_custom_icon( 'send', array( 'class' => 'icon team-card__send-icon', 'width' => 25, 'height' => 25 ) ); ?>
							</span>
						</a>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
