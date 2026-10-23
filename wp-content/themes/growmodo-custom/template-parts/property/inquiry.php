<?php
/**
 * Property inquiry form.
 *
 * @package Growmodo_Custom
 */
?>
<section class="detail-section" id="property-inquiry" aria-labelledby="property-inquiry-title">
	<div class="wrap detail-inquiry">
		<div class="detail-inquiry__intro">
			<?php get_template_part( 'template-parts/sparkles' ); ?>
			<h2 id="property-inquiry-title"><?php esc_html_e( 'Inquire About Seaside Serenity Villa', 'growmodo-custom' ); ?></h2>
			<p><?php esc_html_e( 'Interested in this property? Fill out the form below, and our real estate experts will get back to you with more details, including scheduling a viewing and answering any questions you may have.', 'growmodo-custom' ); ?></p>
		</div>
		<form class="detail-form" action="#property-inquiry" method="post" data-status="<?php esc_attr_e( 'Thanks. This preview does not send your message yet.', 'growmodo-custom' ); ?>">
			<div class="detail-form__fields">
				<div class="detail-form__row">
					<div class="detail-field">
						<label for="detail-first-name"><?php esc_html_e( 'First Name', 'growmodo-custom' ); ?></label>
						<input id="detail-first-name" name="first_name" type="text" required placeholder="<?php esc_attr_e( 'Enter First Name', 'growmodo-custom' ); ?>">
					</div>
					<div class="detail-field">
						<label for="detail-last-name"><?php esc_html_e( 'Last Name', 'growmodo-custom' ); ?></label>
						<input id="detail-last-name" name="last_name" type="text" required placeholder="<?php esc_attr_e( 'Enter Last Name', 'growmodo-custom' ); ?>">
					</div>
				</div>
				<div class="detail-form__row">
					<div class="detail-field">
						<label for="detail-email"><?php esc_html_e( 'Email', 'growmodo-custom' ); ?></label>
						<input id="detail-email" name="email" type="email" required placeholder="<?php esc_attr_e( 'Enter your Email', 'growmodo-custom' ); ?>">
					</div>
					<div class="detail-field">
						<label for="detail-phone"><?php esc_html_e( 'Phone', 'growmodo-custom' ); ?></label>
						<input id="detail-phone" name="phone" type="tel" required placeholder="<?php esc_attr_e( 'Enter Phone Number', 'growmodo-custom' ); ?>">
					</div>
				</div>
				<div class="detail-field">
					<label for="detail-property"><?php esc_html_e( 'Selected Property', 'growmodo-custom' ); ?></label>
					<div class="detail-selected">
						<input id="detail-property" name="property" type="text" readonly value="<?php esc_attr_e( 'Seaside Serenity Villa, Malibu, California', 'growmodo-custom' ); ?>">
						<?php growmodo_custom_icon( 'detail-pin-field', array( 'width' => 24, 'height' => 24 ) ); ?>
					</div>
				</div>
				<div class="detail-field">
					<label for="detail-message"><?php esc_html_e( 'Message', 'growmodo-custom' ); ?></label>
					<textarea id="detail-message" name="message" rows="4" required placeholder="<?php esc_attr_e( 'Enter your Message here..', 'growmodo-custom' ); ?>"></textarea>
				</div>
			</div>
			<div class="detail-form__actions">
				<label class="detail-form__terms">
					<input type="checkbox" name="terms" required>
					<span>
						<?php esc_html_e( 'I agree with', 'growmodo-custom' ); ?>
						<a href="#property-inquiry"><?php esc_html_e( 'Terms of Use', 'growmodo-custom' ); ?></a>
						<?php esc_html_e( 'and', 'growmodo-custom' ); ?>
						<a href="#property-inquiry"><?php esc_html_e( 'Privacy Policy', 'growmodo-custom' ); ?></a>
					</span>
				</label>
				<button class="button button--primary" type="submit"><?php esc_html_e( 'Send Your Message', 'growmodo-custom' ); ?></button>
			</div>
			<p class="detail-form__status" role="status" hidden></p>
		</form>
	</div>
</section>
