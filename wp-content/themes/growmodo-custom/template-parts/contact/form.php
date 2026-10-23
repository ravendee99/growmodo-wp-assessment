<?php
/**
 * Contact form.
 *
 * @package Growmodo_Custom
 */

$rows = array(
	array(
		array(
			'id'          => 'contact-first-name',
			'label'       => __( 'First Name', 'growmodo-custom' ),
			'name'        => 'first_name',
			'type'        => 'text',
			'placeholder' => __( 'Enter First Name', 'growmodo-custom' ),
			'required'    => true,
		),
		array(
			'id'          => 'contact-last-name',
			'label'       => __( 'Last Name', 'growmodo-custom' ),
			'name'        => 'last_name',
			'type'        => 'text',
			'placeholder' => __( 'Enter Last Name', 'growmodo-custom' ),
			'required'    => true,
		),
		array(
			'id'          => 'contact-email',
			'label'       => __( 'Email', 'growmodo-custom' ),
			'name'        => 'email',
			'type'        => 'email',
			'placeholder' => __( 'Enter your Email', 'growmodo-custom' ),
			'required'    => true,
		),
	),
	array(
		array(
			'id'          => 'contact-phone',
			'label'       => __( 'Phone', 'growmodo-custom' ),
			'name'        => 'phone',
			'type'        => 'tel',
			'placeholder' => __( 'Enter Phone Number', 'growmodo-custom' ),
			'required'    => true,
		),
		array(
			'id'          => 'contact-inquiry-type',
			'label'       => __( 'Inquiry Type', 'growmodo-custom' ),
			'name'        => 'inquiry_type',
			'type'        => 'select',
			'placeholder' => __( 'Select Inquiry Type', 'growmodo-custom' ),
		),
		array(
			'id'          => 'contact-source',
			'label'       => __( 'How Did You Hear About Us?', 'growmodo-custom' ),
			'name'        => 'source',
			'type'        => 'select',
			'placeholder' => __( 'Select', 'growmodo-custom' ),
		),
	),
);
?>
<section class="contact-section" id="lets-connect" aria-labelledby="contact-form-title">
	<div class="wrap">
		<div class="contact-heading contact-heading--wide">
			<?php get_template_part( 'template-parts/sparkles' ); ?>
			<h2 id="contact-form-title"><?php esc_html_e( "Let's Connect", 'growmodo-custom' ); ?></h2>
			<p><?php esc_html_e( "We're excited to connect with you and learn more about your real estate goals. Use the form below to get in touch with Estatein. Whether you're a prospective client, partner, or simply curious about our services, we're here to answer your questions and provide the assistance you need.", 'growmodo-custom' ); ?></p>
		</div>

		<form class="inquiry" action="#lets-connect" method="post" data-status="<?php esc_attr_e( 'Thanks. This preview does not send your message yet.', 'growmodo-custom' ); ?>">
			<div class="inquiry__fields">
				<?php foreach ( $rows as $row ) : ?>
					<div class="inquiry__row inquiry__row--triple">
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

				<div class="field">
					<label for="contact-message"><?php esc_html_e( 'Message', 'growmodo-custom' ); ?></label>
					<textarea id="contact-message" name="message" rows="4" required placeholder="<?php esc_attr_e( 'Enter your Message here..', 'growmodo-custom' ); ?>"></textarea>
				</div>
			</div>

			<div class="inquiry__actions">
				<label class="inquiry__terms">
					<input type="checkbox" name="terms" required>
					<span>
						<?php esc_html_e( 'I agree with', 'growmodo-custom' ); ?>
						<a href="#lets-connect"><?php esc_html_e( 'Terms of Use', 'growmodo-custom' ); ?></a>
						<?php esc_html_e( 'and', 'growmodo-custom' ); ?>
						<a href="#lets-connect"><?php esc_html_e( 'Privacy Policy', 'growmodo-custom' ); ?></a>
					</span>
				</label>
				<button class="button button--primary" type="submit"><?php esc_html_e( 'Send Your Message', 'growmodo-custom' ); ?></button>
			</div>
			<p class="inquiry__status" role="status" hidden></p>
		</form>
	</div>
</section>
