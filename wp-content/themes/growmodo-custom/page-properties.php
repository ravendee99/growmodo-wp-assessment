<?php
/**
 * Properties page.
 *
 * @package Growmodo_Custom
 */

get_header();
?>
<main id="primary" class="site-main site-main--properties">
	<?php
	get_template_part( 'template-parts/properties/search' );
	get_template_part( 'template-parts/properties/listing' );
	get_template_part( 'template-parts/properties/inquiry' );
	?>
</main>
<?php
get_footer();
