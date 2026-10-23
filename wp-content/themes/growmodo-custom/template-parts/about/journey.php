<?php
/**
 * About page journey introduction.
 *
 * @package Growmodo_Custom
 */

$stats = array(
	array(
		'value' => __( '200+', 'growmodo-custom' ),
		'label' => __( 'Happy Customers', 'growmodo-custom' ),
	),
	array(
		'value' => __( '10k+', 'growmodo-custom' ),
		'label' => __( 'Properties For Clients', 'growmodo-custom' ),
	),
	array(
		'value' => __( '16+', 'growmodo-custom' ),
		'label' => __( 'Years of Experience', 'growmodo-custom' ),
	),
);
?>
<section class="about-section" id="our-story" aria-labelledby="journey-title">
	<div class="wrap journey">
		<div class="journey__copy">
			<div class="about-heading">
				<?php get_template_part( 'template-parts/sparkles' ); ?>
				<h2 id="journey-title"><?php esc_html_e( 'Our Journey', 'growmodo-custom' ); ?></h2>
				<p><?php esc_html_e( "Our story is one of continuous growth and evolution. We started as a small team with big dreams, determined to create a real estate platform that transcended the ordinary. Over the years, we've expanded our reach, forged valuable partnerships, and gained the trust of countless clients.", 'growmodo-custom' ); ?></p>
			</div>
			<ul class="journey__stats">
				<?php foreach ( $stats as $stat ) : ?>
					<li>
						<strong><?php echo esc_html( $stat['value'] ); ?></strong>
						<span><?php echo esc_html( $stat['label'] ); ?></span>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="journey__media">
			<?php
			growmodo_custom_image(
				'assets/images/about/journey.png',
				'',
				1570,
				1092,
				array(
					'class'   => 'journey__photo',
					'loading' => 'eager',
				)
			);
			growmodo_custom_image(
				'assets/images/about/journey-waves.svg',
				'',
				1559,
				1041,
				array( 'class' => 'journey__waves' )
			);
			?>
		</div>
	</div>
</section>
