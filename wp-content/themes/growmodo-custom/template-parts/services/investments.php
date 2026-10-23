<?php
/**
 * Investment advisory services.
 *
 * @package Growmodo_Custom
 */

$cards = array(
	array(
		'icon'  => 'assets/images/services/valuation.svg',
		'title' => __( 'Market Insight', 'growmodo-custom' ),
		'text'  => __( 'Stay ahead of market trends with our expert Market Analysis. We provide in-depth insights into real estate market conditions', 'growmodo-custom' ),
	),
	array(
		'icon'  => 'assets/images/services/roi.svg',
		'title' => __( 'ROI Assessment', 'growmodo-custom' ),
		'text'  => __( 'Make investment decisions with confidence. Our ROI Assessment services evaluate the potential returns on your investments', 'growmodo-custom' ),
	),
	array(
		'icon'  => 'assets/images/services/strategies.svg',
		'title' => __( 'Customized Strategies', 'growmodo-custom' ),
		'text'  => __( 'Every investor is unique, and so are their goals. We develop Customized Investment Strategies tailored to your specific needs', 'growmodo-custom' ),
	),
	array(
		'icon'  => 'assets/images/home/feature-investments.svg',
		'title' => __( 'Diversification Mastery', 'growmodo-custom' ),
		'text'  => __( 'Diversify your real estate portfolio effectively. Our experts guide you in spreading your investments across various property types and locations', 'growmodo-custom' ),
	),
);
?>
<section class="services-section" id="smart-investments" aria-labelledby="smart-investments-title">
	<div class="wrap services-invest">
		<div class="services-invest__intro">
			<div class="services-heading">
				<?php get_template_part( 'template-parts/sparkles' ); ?>
				<h2 id="smart-investments-title"><?php esc_html_e( 'Smart Investments, Informed Decisions', 'growmodo-custom' ); ?></h2>
				<p><?php esc_html_e( 'Building a real estate portfolio requires a strategic approach. Estatein\'s Investment Advisory Service empowers you to make smart investments and informed decisions.', 'growmodo-custom' ); ?></p>
			</div>
			<article class="service-promo service-promo--side">
				<h3><?php esc_html_e( 'Unlock Your Investment Potential', 'growmodo-custom' ); ?></h3>
				<p><?php esc_html_e( 'Explore our Property Management Service categories and let us handle the complexities while you enjoy the benefits of property ownership.', 'growmodo-custom' ); ?></p>
				<button class="button" type="button"><?php esc_html_e( 'Learn More', 'growmodo-custom' ); ?></button>
			</article>
		</div>
		<div class="services-invest__panel">
			<?php foreach ( $cards as $card ) : ?>
				<?php
				$card['fill'] = true;
				get_template_part( 'template-parts/services/card', null, $card );
				?>
			<?php endforeach; ?>
		</div>
	</div>
</section>
