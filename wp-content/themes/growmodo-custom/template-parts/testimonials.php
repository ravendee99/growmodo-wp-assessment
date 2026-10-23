<?php
/**
 * Testimonials section.
 *
 * @package Growmodo_Custom
 */

$testimonials = array(
	array(
		'title'    => __( 'Exceptional Service!', 'growmodo-custom' ),
		'quote'    => __( "Our experience with Estatein was outstanding. Their team's dedication and professionalism made finding our dream home a breeze. Highly recommended!", 'growmodo-custom' ),
		'name'     => __( 'Wade Warren', 'growmodo-custom' ),
		'location' => __( 'USA, California', 'growmodo-custom' ),
		'image'    => 'assets/images/home/client-01.png',
		'width'    => 120,
		'height'   => 120,
	),
	array(
		'title'    => __( 'Efficient and Reliable', 'growmodo-custom' ),
		'quote'    => __( "Estatein provided us with top-notch service. They helped us sell our property quickly and at a great price. We couldn't be happier with the results.", 'growmodo-custom' ),
		'name'     => __( 'Emelie Thomson', 'growmodo-custom' ),
		'location' => __( 'USA, Florida', 'growmodo-custom' ),
		'image'    => 'assets/images/home/client-02.png',
		'width'    => 120,
		'height'   => 120,
	),
	array(
		'title'    => __( 'Trusted Advisors', 'growmodo-custom' ),
		'quote'    => __( 'The Estatein team guided us through the entire buying process. Their knowledge and commitment to our needs were impressive. Thank you for your support!', 'growmodo-custom' ),
		'name'     => __( 'John Mans', 'growmodo-custom' ),
		'location' => __( 'USA, Nevada', 'growmodo-custom' ),
		'image'    => 'assets/images/home/client-03.png',
		'width'    => 120,
		'height'   => 120,
	),
);
?>
<section class="home-section" id="testimonials" aria-labelledby="testimonials-title">
	<div class="wrap">
		<div class="section-heading">
			<div class="section-heading__text">
				<div class="sparkles" aria-hidden="true">
					<span class="sparkles__lg"><?php growmodo_custom_image( 'assets/images/home/sparkle.svg', '', 60, 60 ); ?></span>
					<span class="sparkles__md"><?php growmodo_custom_image( 'assets/images/home/sparkle-md.svg', '', 36, 36 ); ?></span>
					<span class="sparkles__sm"><?php growmodo_custom_image( 'assets/images/home/sparkle-sm.svg', '', 17, 17 ); ?></span>
				</div>
				<h2 id="testimonials-title"><?php esc_html_e( 'What Our Clients Say', 'growmodo-custom' ); ?></h2>
				<p><?php esc_html_e( 'Read the success stories and heartfelt testimonials from our valued clients. Discover why they chose Estatein for their real estate needs.', 'growmodo-custom' ); ?></p>
			</div>
			<a class="button" href="<?php echo esc_url( home_url( '/#testimonials' ) ); ?>"><?php esc_html_e( 'View All Testimonials', 'growmodo-custom' ); ?></a>
		</div>

		<div class="carousel" data-carousel>
			<div class="carousel__track">
				<?php foreach ( $testimonials as $testimonial ) : ?>
					<?php get_template_part( 'template-parts/testimonial-card', null, array( 'testimonial' => $testimonial ) ); ?>
				<?php endforeach; ?>
			</div>
			<div class="carousel__bar">
				<a class="button carousel__more" href="<?php echo esc_url( home_url( '/#testimonials' ) ); ?>"><?php esc_html_e( 'View All Testimonials', 'growmodo-custom' ); ?></a>
				<p class="carousel__status"><span>01</span> <?php esc_html_e( 'of 10', 'growmodo-custom' ); ?></p>
				<div class="carousel__nav">
					<button class="icon-button" type="button" data-carousel-prev>
						<span class="screen-reader-text"><?php esc_html_e( 'Previous testimonials', 'growmodo-custom' ); ?></span>
						<?php growmodo_custom_icon( 'arrow-left', array( 'width' => 30, 'height' => 30 ) ); ?>
					</button>
					<button class="icon-button" type="button" data-carousel-next>
						<span class="screen-reader-text"><?php esc_html_e( 'Next testimonials', 'growmodo-custom' ); ?></span>
						<?php growmodo_custom_icon( 'arrow-right', array( 'width' => 30, 'height' => 30 ) ); ?>
					</button>
				</div>
			</div>
		</div>
	</div>
</section>
