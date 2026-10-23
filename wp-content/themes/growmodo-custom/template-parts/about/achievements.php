<?php
/**
 * About page achievements.
 *
 * @package Growmodo_Custom
 */

$achievements = array(
	array(
		'title' => __( '3+ Years of Excellence', 'growmodo-custom' ),
		'text'  => __( "With over 3 years in the industry, we've amassed a wealth of knowledge and experience, becoming a go-to resource for all things real estate.", 'growmodo-custom' ),
	),
	array(
		'title' => __( 'Happy Clients', 'growmodo-custom' ),
		'text'  => __( 'Our greatest achievement is the satisfaction of our clients. Their success stories fuel our passion for what we do.', 'growmodo-custom' ),
	),
	array(
		'title' => __( 'Industry Recognition', 'growmodo-custom' ),
		'text'  => __( "We've earned the respect of our peers and industry leaders, with accolades and awards that reflect our commitment to excellence.", 'growmodo-custom' ),
	),
);
?>
<section class="about-section" id="our-works" aria-labelledby="achievements-title">
	<div class="wrap">
		<div class="about-heading about-heading--wide">
			<?php get_template_part( 'template-parts/sparkles' ); ?>
			<h2 id="achievements-title"><?php esc_html_e( 'Our Achievements', 'growmodo-custom' ); ?></h2>
			<p><?php esc_html_e( 'Our story is one of continuous growth and evolution. We started as a small team with big dreams, determined to create a real estate platform that transcended the ordinary.', 'growmodo-custom' ); ?></p>
		</div>
		<div class="achievement-grid">
			<?php foreach ( $achievements as $achievement ) : ?>
				<article class="achievement-card">
					<h3><?php echo esc_html( $achievement['title'] ); ?></h3>
					<p><?php echo esc_html( $achievement['text'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
