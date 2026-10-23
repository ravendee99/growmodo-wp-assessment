<?php
/**
 * Estatein home page.
 *
 * @package Growmodo_Custom
 */

get_header();
?>
<main id="primary" class="site-main site-main--home">
	<?php
	get_template_part( 'template-parts/hero' );
	get_template_part( 'template-parts/featured-properties' );
	get_template_part( 'template-parts/testimonials' );
	get_template_part( 'template-parts/faq' );
	?>
</main>
<?php
get_footer();
