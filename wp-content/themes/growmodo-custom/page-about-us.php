<?php
/**
 * About Us page.
 *
 * @package Growmodo_Custom
 */

get_header();
?>
<main id="primary" class="site-main site-main--about">
	<?php
	get_template_part( 'template-parts/about/journey' );
	get_template_part( 'template-parts/about/values' );
	get_template_part( 'template-parts/about/achievements' );
	get_template_part( 'template-parts/about/steps' );
	get_template_part( 'template-parts/about/team' );
	get_template_part( 'template-parts/about/clients' );
	?>
</main>
<?php
get_footer();
