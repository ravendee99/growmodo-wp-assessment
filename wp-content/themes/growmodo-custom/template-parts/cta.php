<?php
/**
 * Shared call to action.
 *
 * @package Growmodo_Custom
 */
?>
<section class="cta" aria-labelledby="cta-title">
	<?php
	growmodo_custom_image(
		'assets/images/home/abstract-footer.svg',
		'',
		566,
		308,
		array( 'class' => 'cta__art cta__art--left' )
	);
	growmodo_custom_image(
		'assets/images/home/abstract-cta.svg',
		'',
		725,
		394,
		array( 'class' => 'cta__art cta__art--right' )
	);
	?>
	<div class="cta__inner wrap">
		<div>
			<h2 id="cta-title"><?php esc_html_e( 'Start Your Real Estate Journey Today', 'growmodo-custom' ); ?></h2>
			<p><?php esc_html_e( "Your dream property is just a click away. Whether you're looking for a new home, a strategic investment, or expert real estate advice, Estatein is here to assist you every step of the way. Take the first step towards your real estate goals and explore our available properties or get in touch with our team for personalized assistance.", 'growmodo-custom' ); ?></p>
		</div>
		<a class="button button--primary" href="<?php echo esc_url( home_url( '/#featured-properties' ) ); ?>"><?php esc_html_e( 'Explore Properties', 'growmodo-custom' ); ?></a>
	</div>
</section>
