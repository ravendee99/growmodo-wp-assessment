<?php
/**
 * Contact page.
 *
 * @package Growmodo_Custom
 */

get_header();
?>
<main id="primary" class="site-main site-main--contact">
	<?php
	get_template_part( 'template-parts/contact/hero' );
	get_template_part( 'template-parts/contact/form' );
	get_template_part( 'template-parts/contact/offices' );
	get_template_part( 'template-parts/contact/gallery' );
	?>
</main>
<?php
get_footer();
