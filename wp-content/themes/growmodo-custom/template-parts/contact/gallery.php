<?php
/**
 * Contact photo gallery.
 *
 * @package Growmodo_Custom
 */

$photos = array(
	'office'    => array(
		'file' => 'assets/images/contact/office.png',
		'alt'  => __( 'Estatein office with desks and computers', 'growmodo-custom' ),
	),
	'meeting'   => array(
		'file' => 'assets/images/contact/meeting.png',
		'alt'  => __( 'Team working around a table', 'growmodo-custom' ),
	),
	'team'      => array(
		'file' => 'assets/images/contact/team.png',
		'alt'  => __( 'Four Estatein colleagues', 'growmodo-custom' ),
	),
	'group'     => array(
		'file' => 'assets/images/contact/group.png',
		'alt'  => __( 'Estatein team standing together', 'growmodo-custom' ),
	),
	'portrait'  => array(
		'file' => 'assets/images/contact/portrait.png',
		'alt'  => __( 'Three Estatein colleagues', 'growmodo-custom' ),
	),
	'handshake' => array(
		'file' => 'assets/images/contact/handshake.png',
		'alt'  => __( 'Two colleagues shaking hands', 'growmodo-custom' ),
	),
);
?>
<section class="contact-section" aria-labelledby="contact-gallery-title">
	<div class="wrap">
		<div class="contact-gallery">
			<div class="contact-gallery__photos">
				<div class="contact-gallery__col">
					<?php
					growmodo_custom_image( $photos['office']['file'], $photos['office']['alt'], 709, 236 );
					growmodo_custom_image( $photos['meeting']['file'], $photos['meeting']['alt'], 709, 236 );
					?>
				</div>
				<div class="contact-gallery__col">
					<?php growmodo_custom_image( $photos['team']['file'], $photos['team']['alt'], 709, 236 ); ?>
					<div class="contact-gallery__pair">
						<?php
						growmodo_custom_image( $photos['group']['file'], $photos['group']['alt'], 344, 236 );
						growmodo_custom_image( $photos['portrait']['file'], $photos['portrait']['alt'], 344, 236 );
						?>
					</div>
				</div>
			</div>
			<div class="contact-gallery__foot">
				<div class="contact-heading">
					<?php get_template_part( 'template-parts/sparkles' ); ?>
					<h2 id="contact-gallery-title"><?php esc_html_e( "Explore Estatein's World", 'growmodo-custom' ); ?></h2>
					<p><?php esc_html_e( 'Step inside the world of Estatein, where professionalism meets warmth, and expertise meets passion. Our gallery offers a glimpse into our team and workspaces, inviting you to get to know us better.', 'growmodo-custom' ); ?></p>
				</div>
				<?php growmodo_custom_image( $photos['handshake']['file'], $photos['handshake']['alt'], 709, 280, array( 'class' => 'contact-gallery__feature' ) ); ?>
			</div>
		</div>
	</div>
</section>
