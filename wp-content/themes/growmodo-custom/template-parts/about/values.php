<?php
/**
 * About page values.
 *
 * @package Growmodo_Custom
 */

$values = array(
	array(
		'icon'  => 'value-star',
		'title' => __( 'Trust', 'growmodo-custom' ),
		'text'  => __( 'Trust is the cornerstone of every successful real estate transaction.', 'growmodo-custom' ),
	),
	array(
		'icon'  => 'value-excellence',
		'title' => __( 'Excellence', 'growmodo-custom' ),
		'text'  => __( 'We set the bar high for ourselves. From the properties we list to the services we provide.', 'growmodo-custom' ),
	),
	array(
		'icon'  => 'value-clients',
		'title' => __( 'Client-Centric', 'growmodo-custom' ),
		'text'  => __( 'Your dreams and needs are at the center of our universe. We listen, understand.', 'growmodo-custom' ),
	),
	array(
		'icon'  => 'value-star',
		'title' => __( 'Our Commitment', 'growmodo-custom' ),
		'text'  => __( 'We are dedicated to providing you with the highest level of service, professionalism, and support.', 'growmodo-custom' ),
	),
);
?>
<section class="about-section" aria-labelledby="values-title">
	<div class="wrap values">
		<div class="about-heading values__intro">
			<?php get_template_part( 'template-parts/sparkles' ); ?>
			<h2 id="values-title"><?php esc_html_e( 'Our Values', 'growmodo-custom' ); ?></h2>
			<p><?php esc_html_e( 'Our story is one of continuous growth and evolution. We started as a small team with big dreams, determined to create a real estate platform that transcended the ordinary.', 'growmodo-custom' ); ?></p>
		</div>
		<div class="values__panel">
			<?php foreach ( $values as $index => $value ) : ?>
				<?php if ( 1 === $index % 2 ) : ?>
					<span class="values__rule values__rule--v" aria-hidden="true"></span>
				<?php endif; ?>
				<?php if ( 2 === $index ) : ?>
					<span class="values__rule values__rule--h" aria-hidden="true"></span>
				<?php endif; ?>
				<article class="values__item">
					<div class="values__title">
						<span class="values__mark">
							<?php growmodo_custom_icon( $value['icon'], array( 'class' => 'icon value-icon', 'width' => 34, 'height' => 34 ) ); ?>
						</span>
						<h3><?php echo esc_html( $value['title'] ); ?></h3>
					</div>
					<p><?php echo esc_html( $value['text'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
