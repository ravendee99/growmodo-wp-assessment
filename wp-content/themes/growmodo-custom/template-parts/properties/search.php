<?php
/**
 * Properties search hero.
 *
 * @package Growmodo_Custom
 */

$filters = array(
	array(
		'label' => __( 'Location', 'growmodo-custom' ),
		'icon'  => 'pin',
	),
	array(
		'label' => __( 'Property Type', 'growmodo-custom' ),
		'icon'  => 'filter-home',
	),
	array(
		'label' => __( 'Pricing Range', 'growmodo-custom' ),
		'icon'  => 'filter-price',
	),
	array(
		'label' => __( 'Property Size', 'growmodo-custom' ),
		'icon'  => 'filter-size',
	),
	array(
		'label' => __( 'Build Year', 'growmodo-custom' ),
		'icon'  => 'filter-calendar',
	),
);
?>
<section class="properties-hero" aria-labelledby="properties-title">
	<div class="properties-hero__intro">
		<div class="wrap properties-hero__copy">
			<h1 id="properties-title"><?php esc_html_e( 'Find Your Dream Property', 'growmodo-custom' ); ?></h1>
			<p><?php esc_html_e( 'Welcome to Estatein, where your dream property awaits in every corner of our beautiful world. Explore our curated selection of properties, each offering a unique story and a chance to redefine your life. With categories to suit every dreamer, your journey', 'growmodo-custom' ); ?></p>
		</div>
	</div>
	<div class="wrap properties-hero__panel">
		<form class="property-search" role="search" action="<?php echo esc_url( get_permalink() ); ?>" method="get">
			<label class="screen-reader-text" for="property-query"><?php esc_html_e( 'Search For A Property', 'growmodo-custom' ); ?></label>
			<input id="property-query" type="search" name="q" placeholder="<?php esc_attr_e( 'Search For A Property', 'growmodo-custom' ); ?>">
			<button class="button button--primary" type="submit">
				<?php growmodo_custom_icon( 'search', array( 'width' => 24, 'height' => 24 ) ); ?>
				<?php esc_html_e( 'Find Property', 'growmodo-custom' ); ?>
			</button>
		</form>
		<div class="property-filters">
			<?php foreach ( $filters as $filter ) : ?>
				<button class="filter-chip" type="button">
					<span class="filter-chip__label">
						<?php growmodo_custom_icon( $filter['icon'], array( 'width' => 24, 'height' => 24 ) ); ?>
						<span class="filter-chip__rule" aria-hidden="true"></span>
						<?php echo esc_html( $filter['label'] ); ?>
					</span>
					<span class="filter-chip__toggle" aria-hidden="true">
						<?php growmodo_custom_icon( 'chevron-down', array( 'width' => 24, 'height' => 24 ) ); ?>
					</span>
				</button>
			<?php endforeach; ?>
		</div>
	</div>
</section>
