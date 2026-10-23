<?php
/**
 * Property inquiry form.
 *
 * @package Growmodo_Custom
 */

$quad_rows = array(
	array(
		array(
			'id'          => 'inquiry-first-name',
			'label'       => __( 'First Name', 'growmodo-custom' ),
			'name'        => 'first_name',
			'type'        => 'text',
			'placeholder' => __( 'Enter First Name', 'growmodo-custom' ),
			'required'    => true,
		),
		array(
			'id'          => 'inquiry-last-name',
			'label'       => __( 'Last Name', 'growmodo-custom' ),
			'name'        => 'last_name',
			'type'        => 'text',
			'placeholder' => __( 'Enter Last Name', 'growmodo-custom' ),
			'required'    => true,
		),
		array(
			'id'          => 'inquiry-email',
			'label'       => __( 'Email', 'growmodo-custom' ),
			'name'        => 'email',
			'type'        => 'email',
			'placeholder' => __( 'Enter your Email', 'growmodo-custom' ),
			'required'    => true,
		),
		array(
			'id'          => 'inquiry-phone',
			'label'       => __( 'Phone', 'growmodo-custom' ),
			'name'        => 'phone',
			'type'        => 'tel',
			'placeholder' => __( 'Enter Phone Number', 'growmodo-custom' ),
			'required'    => true,
		),
	),
	array(
		array(
			'id'          => 'inquiry-location',
			'label'       => __( 'Preferred Location', 'growmodo-custom' ),
			'name'        => 'location',
			'type'        => 'select',
			'placeholder' => __( 'Select Location', 'growmodo-custom' ),
		),
		array(
			'id'          => 'inquiry-type',
			'label'       => __( 'Property Type', 'growmodo-custom' ),
			'name'        => 'property_type',
			'type'        => 'select',
			'placeholder' => __( 'Select Property Type', 'growmodo-custom' ),
		),
		array(
			'id'          => 'inquiry-bathrooms',
			'label'       => __( 'No. of Bathrooms', 'growmodo-custom' ),
			'name'        => 'bathrooms',
			'type'        => 'select',
			'placeholder' => __( 'Select no. of Bedrooms', 'growmodo-custom' ),
		),
		array(
			'id'          => 'inquiry-bedrooms',
			'label'       => __( 'No. of Bedrooms', 'growmodo-custom' ),
			'name'        => 'bedrooms',
			'type'        => 'select',
			'placeholder' => __( 'Select no. of Bedrooms', 'growmodo-custom' ),
		),
	),
);
?>
<section class="properties-section" id="inquiry" aria-labelledby="inquiry-title">
	<div class="wrap">
		<div class="properties-heading properties-heading--form">
			<?php get_template_part( 'template-parts/sparkles' ); ?>
			<h2 id="inquiry-title"><?php esc_html_e( "Let's Make it Happen", 'growmodo-custom' ); ?></h2>
			<p><?php esc_html_e( "Ready to take the first step toward your dream property? Fill out the form below, and our real estate wizards will work their magic to find your perfect match. Don't wait; let's embark on this exciting journey together.", 'growmodo-custom' ); ?></p>
		</div>

		<form class="inquiry" action="#inquiry" method="post" data-status="<?php esc_attr_e( 'Thanks. This preview does not send your message yet.', 'growmodo-custom' ); ?>">
			<div class="inquiry__fields">
				<?php foreach ( $quad_rows as $row ) : ?>
					<div class="inquiry__row inquiry__row--quad">
						<?php foreach ( $row as $field ) : ?>
							<div class="field">
								<label for="<?php echo esc_attr( $field['id'] ); ?>"><?php echo esc_html( $field['label'] ); ?></label>
								<?php if ( 'select' === $field['type'] ) : ?>
									<div class="field__control">
										<select id="<?php echo esc_attr( $field['id'] ); ?>" name="<?php echo esc_attr( $field['name'] ); ?>">
											<option value="" selected><?php echo esc_html( $field['placeholder'] ); ?></option>
										</select>
										<?php growmodo_custom_icon( 'chevron-down', array( 'width' => 24, 'height' => 24 ) ); ?>
									</div>
								<?php else : ?>
									<input id="<?php echo esc_attr( $field['id'] ); ?>" name="<?php echo esc_attr( $field['name'] ); ?>" type="<?php echo esc_attr( $field['type'] ); ?>" placeholder="<?php echo esc_attr( $field['placeholder'] ); ?>" <?php echo ! empty( $field['required'] ) ? 'required' : ''; ?>>
								<?php endif; ?>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endforeach; ?>

				<div class="inquiry__row inquiry__row--split">
					<div class="field">
						<label for="inquiry-budget"><?php esc_html_e( 'Budget', 'growmodo-custom' ); ?></label>
						<div class="field__control">
							<select id="inquiry-budget" name="budget">
								<option value="" selected><?php esc_html_e( 'Select Budget', 'growmodo-custom' ); ?></option>
							</select>
							<?php growmodo_custom_icon( 'chevron-down', array( 'width' => 24, 'height' => 24 ) ); ?>
						</div>
					</div>
					<fieldset class="field">
						<legend><?php esc_html_e( 'Preferred Contact Method', 'growmodo-custom' ); ?></legend>
						<div class="contact-methods">
							<label class="contact-option">
								<input type="radio" name="contact_method" value="phone" checked>
								<?php growmodo_custom_icon( 'phone', array( 'width' => 24, 'height' => 24 ) ); ?>
								<span><?php esc_html_e( 'Enter Your Number', 'growmodo-custom' ); ?></span>
								<span class="contact-option__mark" aria-hidden="true"></span>
							</label>
							<label class="contact-option">
								<input type="radio" name="contact_method" value="email">
								<?php growmodo_custom_icon( 'envelope', array( 'width' => 24, 'height' => 24 ) ); ?>
								<span><?php esc_html_e( 'Enter Your Email', 'growmodo-custom' ); ?></span>
								<span class="contact-option__mark" aria-hidden="true"></span>
							</label>
						</div>
					</fieldset>
				</div>

				<div class="field">
					<label for="inquiry-message"><?php esc_html_e( 'Message', 'growmodo-custom' ); ?></label>
					<textarea id="inquiry-message" name="message" rows="4" required placeholder="<?php esc_attr_e( 'Enter your Message here..', 'growmodo-custom' ); ?>"></textarea>
				</div>
			</div>

			<div class="inquiry__actions">
				<label class="inquiry__terms">
					<input type="checkbox" name="terms" required>
					<span>
						<?php esc_html_e( 'I agree with', 'growmodo-custom' ); ?>
						<a href="#inquiry"><?php esc_html_e( 'Terms of Use', 'growmodo-custom' ); ?></a>
						<?php esc_html_e( 'and', 'growmodo-custom' ); ?>
						<a href="#inquiry"><?php esc_html_e( 'Privacy Policy', 'growmodo-custom' ); ?></a>
					</span>
				</label>
				<button class="button button--primary" type="submit"><?php esc_html_e( 'Send Your Message', 'growmodo-custom' ); ?></button>
			</div>
			<p class="inquiry__status" role="status" hidden></p>
		</form>
	</div>
</section>
