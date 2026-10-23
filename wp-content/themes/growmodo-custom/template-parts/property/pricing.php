<?php
/**
 * Property pricing breakdown.
 *
 * @package Growmodo_Custom
 */

$groups = array(
	array(
		'title' => __( 'Additional Fees', 'growmodo-custom' ),
		'rows'  => array(
			array(
				array(
					'label' => __( 'Property Transfer Tax', 'growmodo-custom' ),
					'value' => '$25,000',
					'note'  => __( 'Based on the sale price and local regulations', 'growmodo-custom' ),
				),
				array(
					'label' => __( 'Legal Fees', 'growmodo-custom' ),
					'value' => '$3,000',
					'note'  => __( 'Approximate cost for legal services, including title transfer', 'growmodo-custom' ),
				),
			),
			array(
				array(
					'label' => __( 'Home Inspection', 'growmodo-custom' ),
					'value' => '$500',
					'note'  => __( 'Recommended for due diligence', 'growmodo-custom' ),
				),
				array(
					'label' => __( 'Property Insurance', 'growmodo-custom' ),
					'value' => '$1,200',
					'note'  => __( 'Annual cost for comprehensive property insurance', 'growmodo-custom' ),
				),
			),
			array(
				array(
					'label' => __( 'Mortgage Fees', 'growmodo-custom' ),
					'value' => __( 'Varies', 'growmodo-custom' ),
					'note'  => __( 'If applicable, consult with your lender for specific details', 'growmodo-custom' ),
				),
			),
		),
	),
	array(
		'title' => __( 'Monthly Costs', 'growmodo-custom' ),
		'rows'  => array(
			array(
				array(
					'label' => __( 'Property Taxes', 'growmodo-custom' ),
					'value' => '$1,250',
					'note'  => __( 'Approximate monthly property tax based on the sale price and local rates', 'growmodo-custom' ),
				),
			),
			array(
				array(
					'label' => __( "Homeowners' Association Fee", 'growmodo-custom' ),
					'value' => '$300',
					'note'  => __( 'Monthly fee for common area maintenance and security', 'growmodo-custom' ),
				),
			),
		),
	),
	array(
		'title' => __( 'Total Initial Costs', 'growmodo-custom' ),
		'rows'  => array(
			array(
				array(
					'label' => __( 'Listing Price', 'growmodo-custom' ),
					'value' => '$1,250,000',
				),
				array(
					'label' => __( 'Additional Fees', 'growmodo-custom' ),
					'value' => '$29,700',
					'note'  => __( 'Property transfer tax, legal fees, inspection, insurance', 'growmodo-custom' ),
				),
			),
			array(
				array(
					'label' => __( 'Down Payment', 'growmodo-custom' ),
					'value' => '$250,000',
					'note'  => '20%',
				),
				array(
					'label' => __( 'Mortgage Amount', 'growmodo-custom' ),
					'value' => '$1,000,000',
					'note'  => __( 'If applicable', 'growmodo-custom' ),
				),
			),
		),
	),
	array(
		'title' => __( 'Monthly Expenses', 'growmodo-custom' ),
		'rows'  => array(
			array(
				array(
					'label' => __( 'Property Taxes', 'growmodo-custom' ),
					'value' => '$1,250',
				),
				array(
					'label' => __( "Homeowners' Association Fee", 'growmodo-custom' ),
					'value' => '$300',
				),
			),
			array(
				array(
					'label' => __( 'Mortgage Payment', 'growmodo-custom' ),
					'value' => __( 'Varies based on terms and interest rate', 'growmodo-custom' ),
					'note'  => __( 'If applicable', 'growmodo-custom' ),
					'plain' => true,
				),
				array(
					'label' => __( 'Property Insurance', 'growmodo-custom' ),
					'value' => '$100',
					'note'  => __( 'Approximate monthly cost', 'growmodo-custom' ),
				),
			),
		),
	),
);
?>
<section class="detail-section" id="comprehensive-pricing" aria-labelledby="pricing-title">
	<div class="wrap">
		<div class="detail-heading">
			<?php get_template_part( 'template-parts/sparkles' ); ?>
			<h2 id="pricing-title"><?php esc_html_e( 'Comprehensive Pricing Details', 'growmodo-custom' ); ?></h2>
			<p><?php esc_html_e( 'At Estatein, transparency is key. We want you to have a clear understanding of all costs associated with your property investment. Below, we break down the pricing for Seaside Serenity Villa to help you make an informed decision', 'growmodo-custom' ); ?></p>
		</div>
		<div class="detail-pricing">
			<p class="detail-note">
				<strong><?php esc_html_e( 'Note', 'growmodo-custom' ); ?></strong>
				<span><?php esc_html_e( 'The figures provided above are estimates and may vary depending on the property, location, and individual circumstances.', 'growmodo-custom' ); ?></span>
			</p>
			<div class="detail-pricing__layout">
				<p class="detail-listing-price">
					<span><?php esc_html_e( 'Listing Price', 'growmodo-custom' ); ?></span>
					<strong>$1,250,000</strong>
				</p>
				<div class="detail-fees">
					<?php foreach ( $groups as $group ) : ?>
						<article class="fee-card">
							<header class="fee-card__head">
								<h3><?php echo esc_html( $group['title'] ); ?></h3>
								<button class="button" type="button"><?php esc_html_e( 'Learn More', 'growmodo-custom' ); ?></button>
							</header>
							<?php foreach ( $group['rows'] as $row ) : ?>
								<div class="fee-card__row<?php echo 1 === count( $row ) ? ' is-single' : ''; ?>">
									<?php foreach ( $row as $item ) : ?>
										<div class="fee-item">
											<p><?php echo esc_html( $item['label'] ); ?></p>
											<div class="fee-item__value">
												<strong<?php echo ! empty( $item['plain'] ) ? ' class="is-plain"' : ''; ?>><?php echo esc_html( $item['value'] ); ?></strong>
												<?php if ( ! empty( $item['note'] ) ) : ?>
													<span><?php echo esc_html( $item['note'] ); ?></span>
												<?php endif; ?>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							<?php endforeach; ?>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>
