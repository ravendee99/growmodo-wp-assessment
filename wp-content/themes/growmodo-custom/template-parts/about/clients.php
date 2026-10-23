<?php
/**
 * About page clients.
 *
 * @package Growmodo_Custom
 */

$clients = array(
	array(
		'since'    => __( 'Since 2019', 'growmodo-custom' ),
		'name'     => __( 'ABC Corporation', 'growmodo-custom' ),
		'domain'   => __( 'Commercial Real Estate', 'growmodo-custom' ),
		'category' => __( 'Luxury Home Development', 'growmodo-custom' ),
		'quote'    => __( "Estatein's expertise in finding the perfect office space for our expanding operations was invaluable. They truly understand our business needs.", 'growmodo-custom' ),
	),
	array(
		'since'    => __( 'Since 2018', 'growmodo-custom' ),
		'name'     => __( 'GreenTech Enterprises', 'growmodo-custom' ),
		'domain'   => __( 'Commercial Real Estate', 'growmodo-custom' ),
		'category' => __( 'Retail Space', 'growmodo-custom' ),
		'quote'    => __( "Estatein's ability to identify prime retail locations helped us expand our brand presence. They are a trusted partner in our growth.", 'growmodo-custom' ),
	),
);
?>
<section class="about-section" id="our-clients" aria-labelledby="clients-title">
	<div class="wrap">
		<div class="about-heading about-heading--wide">
			<?php get_template_part( 'template-parts/sparkles' ); ?>
			<h2 id="clients-title"><?php esc_html_e( 'Our Valued Clients', 'growmodo-custom' ); ?></h2>
			<p><?php esc_html_e( "At Estatein, we have had the privilege of working with a diverse range of clients across various industries. Here are some of the clients we've had the pleasure of serving", 'growmodo-custom' ); ?></p>
		</div>
		<div class="carousel" data-carousel>
			<div class="carousel__track client-grid">
				<?php foreach ( $clients as $client ) : ?>
					<article class="client-card">
						<div class="client-card__head">
							<div>
								<p><?php echo esc_html( $client['since'] ); ?></p>
								<h3><?php echo esc_html( $client['name'] ); ?></h3>
							</div>
							<a class="button" href="#"><?php esc_html_e( 'Visit Website', 'growmodo-custom' ); ?></a>
						</div>
						<div class="client-card__meta">
							<div>
								<p>
									<?php growmodo_custom_icon( 'domain', array( 'width' => 24, 'height' => 24 ) ); ?>
									<span><?php esc_html_e( 'Domain', 'growmodo-custom' ); ?></span>
								</p>
								<strong><?php echo esc_html( $client['domain'] ); ?></strong>
							</div>
							<span class="client-card__rule" aria-hidden="true"></span>
							<div>
								<p>
									<?php growmodo_custom_icon( 'category', array( 'width' => 24, 'height' => 24 ) ); ?>
									<span><?php esc_html_e( 'Category', 'growmodo-custom' ); ?></span>
								</p>
								<strong><?php echo esc_html( $client['category'] ); ?></strong>
							</div>
						</div>
						<blockquote>
							<p><?php esc_html_e( 'What They Said 🤗', 'growmodo-custom' ); ?></p>
							<p><?php echo esc_html( $client['quote'] ); ?></p>
						</blockquote>
					</article>
				<?php endforeach; ?>
			</div>
			<div class="carousel__bar">
				<p class="carousel__status"><span>01</span> <?php esc_html_e( 'of 10', 'growmodo-custom' ); ?></p>
				<div class="carousel__nav">
					<button class="icon-button" type="button" data-carousel-prev>
						<span class="screen-reader-text"><?php esc_html_e( 'Previous clients', 'growmodo-custom' ); ?></span>
						<?php growmodo_custom_icon( 'arrow-left', array( 'width' => 30, 'height' => 30 ) ); ?>
					</button>
					<button class="icon-button" type="button" data-carousel-next>
						<span class="screen-reader-text"><?php esc_html_e( 'Next clients', 'growmodo-custom' ); ?></span>
						<?php growmodo_custom_icon( 'arrow-right', array( 'width' => 30, 'height' => 30 ) ); ?>
					</button>
				</div>
			</div>
		</div>
	</div>
</section>
