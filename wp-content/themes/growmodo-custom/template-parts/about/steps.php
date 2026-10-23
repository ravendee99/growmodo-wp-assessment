<?php
/**
 * About page process steps.
 *
 * @package Growmodo_Custom
 */

$steps = array(
	array(
		'label' => __( 'Step 01', 'growmodo-custom' ),
		'title' => __( 'Discover a World of Possibilities', 'growmodo-custom' ),
		'text'  => __( 'Your journey begins with exploring our carefully curated property listings. Use our intuitive search tools to filter properties based on your preferences, including location, type, size, and budget.', 'growmodo-custom' ),
	),
	array(
		'label' => __( 'Step 02', 'growmodo-custom' ),
		'title' => __( 'Narrowing Down Your Choices', 'growmodo-custom' ),
		'text'  => __( "Once you've found properties that catch your eye, save them to your account or make a shortlist. This allows you to compare and revisit your favorites as you make your decision.", 'growmodo-custom' ),
	),
	array(
		'label' => __( 'Step 03', 'growmodo-custom' ),
		'title' => __( 'Personalized Guidance', 'growmodo-custom' ),
		'text'  => __( 'Have questions about a property or need more information? Our dedicated team of real estate experts is just a call or message away.', 'growmodo-custom' ),
	),
	array(
		'label' => __( 'Step 04', 'growmodo-custom' ),
		'title' => __( 'See It for Yourself', 'growmodo-custom' ),
		'text'  => __( "Arrange viewings of the properties you're interested in. We'll coordinate with the property owners and accompany you to ensure you get a firsthand look at your potential new home.", 'growmodo-custom' ),
	),
	array(
		'label' => __( 'Step 05', 'growmodo-custom' ),
		'title' => __( 'Making Informed Decisions', 'growmodo-custom' ),
		'text'  => __( 'Before making an offer, our team will assist you with due diligence, including property inspections, legal checks, and market analysis. We want you to be fully informed and confident in your choice.', 'growmodo-custom' ),
	),
	array(
		'label' => __( 'Step 06', 'growmodo-custom' ),
		'title' => __( 'Getting the Best Deal', 'growmodo-custom' ),
		'text'  => __( "We'll help you negotiate the best terms and prepare your offer. Our goal is to secure the property at the right price and on favorable terms.", 'growmodo-custom' ),
	),
);
?>
<section class="about-section" id="how-it-works" aria-labelledby="steps-title">
	<div class="wrap">
		<div class="about-heading about-heading--wide">
			<?php get_template_part( 'template-parts/sparkles' ); ?>
			<h2 id="steps-title"><?php esc_html_e( 'Navigating the Estatein Experience', 'growmodo-custom' ); ?></h2>
			<p><?php esc_html_e( "At Estatein, we've designed a straightforward process to help you find and purchase your dream property with ease. Here's a step-by-step guide to how it all works.", 'growmodo-custom' ); ?></p>
		</div>
		<div class="step-grid">
			<?php foreach ( $steps as $step ) : ?>
				<article class="step">
					<p class="step__label"><?php echo esc_html( $step['label'] ); ?></p>
					<div class="step__body">
						<h3><?php echo esc_html( $step['title'] ); ?></h3>
						<p><?php echo esc_html( $step['text'] ); ?></p>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
