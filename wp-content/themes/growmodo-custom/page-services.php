<?php
/**
 * Services page.
 *
 * @package Growmodo_Custom
 */

get_header();
?>
<main id="primary" class="site-main site-main--services">
	<?php
	get_template_part( 'template-parts/services/hero' );
	get_template_part( 'template-parts/services/value' );
	get_template_part( 'template-parts/services/management' );
	get_template_part( 'template-parts/services/investments' );
	?>
</main>
<?php
get_footer();
