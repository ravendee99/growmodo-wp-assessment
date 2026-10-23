<?php
/**
 * Frequently asked questions.
 *
 * @package Growmodo_Custom
 */

$faqs = array(
	array(
		'question' => __( 'How do I search for properties on Estatein?', 'growmodo-custom' ),
		'answer'   => __( 'Learn how to use our user-friendly search tools to find properties that match your criteria.', 'growmodo-custom' ),
	),
	array(
		'question' => __( 'What documents do I need to sell my property through Estatein?', 'growmodo-custom' ),
		'answer'   => __( 'Find out about the necessary documentation for listing your property with us.', 'growmodo-custom' ),
	),
	array(
		'question' => __( 'How can I contact an Estatein agent?', 'growmodo-custom' ),
		'answer'   => __( 'Discover the different ways you can get in touch with our experienced agents.', 'growmodo-custom' ),
	),
);
?>
<section class="home-section" id="faq" aria-labelledby="faq-title">
	<div class="wrap">
		<div class="section-heading">
			<div class="section-heading__text">
				<div class="sparkles" aria-hidden="true">
					<span class="sparkles__lg"><?php growmodo_custom_image( 'assets/images/home/sparkle.svg', '', 60, 60 ); ?></span>
					<span class="sparkles__md"><?php growmodo_custom_image( 'assets/images/home/sparkle-md.svg', '', 36, 36 ); ?></span>
					<span class="sparkles__sm"><?php growmodo_custom_image( 'assets/images/home/sparkle-sm.svg', '', 17, 17 ); ?></span>
				</div>
				<h2 id="faq-title"><?php esc_html_e( 'Frequently Asked Questions', 'growmodo-custom' ); ?></h2>
				<p><?php esc_html_e( "Find answers to common questions about Estatein's services, property listings, and the real estate process. We're here to provide clarity and assist you every step of the way.", 'growmodo-custom' ); ?></p>
			</div>
			<a class="button" href="<?php echo esc_url( home_url( '/#faq' ) ); ?>"><?php esc_html_e( "View All FAQ's", 'growmodo-custom' ); ?></a>
		</div>

		<div class="carousel" data-carousel>
			<div class="faq-list carousel__track">
				<?php foreach ( $faqs as $faq ) : ?>
					<article class="faq-card">
						<h3><?php echo esc_html( $faq['question'] ); ?></h3>
						<p><?php echo esc_html( $faq['answer'] ); ?></p>
						<button class="button" type="button"><?php esc_html_e( 'Read More', 'growmodo-custom' ); ?></button>
					</article>
				<?php endforeach; ?>
			</div>
			<div class="carousel__bar">
				<a class="button carousel__more" href="<?php echo esc_url( home_url( '/#faq' ) ); ?>"><?php esc_html_e( "View All FAQ's", 'growmodo-custom' ); ?></a>
				<p class="carousel__status"><span>01</span> <?php esc_html_e( 'of 10', 'growmodo-custom' ); ?></p>
				<div class="carousel__nav">
					<button class="icon-button" type="button" data-carousel-prev>
						<span class="screen-reader-text"><?php esc_html_e( 'Previous questions', 'growmodo-custom' ); ?></span>
						<?php growmodo_custom_icon( 'arrow-left', array( 'width' => 30, 'height' => 30 ) ); ?>
					</button>
					<button class="icon-button" type="button" data-carousel-next>
						<span class="screen-reader-text"><?php esc_html_e( 'Next questions', 'growmodo-custom' ); ?></span>
						<?php growmodo_custom_icon( 'arrow-right', array( 'width' => 30, 'height' => 30 ) ); ?>
					</button>
				</div>
			</div>
		</div>
	</div>
</section>
