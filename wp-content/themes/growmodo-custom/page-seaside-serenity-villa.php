<?php
/**
 * Seaside Serenity Villa details page.
 *
 * @package Growmodo_Custom
 */

get_header();
?>
<main id="primary" class="site-main site-main--detail">
	<?php
	get_template_part( 'template-parts/property/gallery' );
	get_template_part( 'template-parts/property/inquiry' );
	get_template_part( 'template-parts/property/pricing' );
	get_template_part( 'template-parts/property/faq' );
	?>
</main>
<?php
get_footer();
