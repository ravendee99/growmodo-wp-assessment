<?php
/**
 * Site header.
 *
 * @package Growmodo_Custom
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'growmodo-custom' ); ?></a>

<header class="site-header">
	<div class="announcement" data-announcement>
		<?php
		growmodo_custom_image(
			'assets/images/home/abstract-banner.svg',
			'',
			1920,
			63,
			array(
				'class'   => 'announcement__art',
				'loading' => 'eager',
			)
		);
		?>
		<p class="announcement__text">
			<?php esc_html_e( '✨Discover Your Dream Property with Estatein', 'growmodo-custom' ); ?>
			<a href="<?php echo esc_url( home_url( '/#featured-properties' ) ); ?>"><?php esc_html_e( 'Learn More', 'growmodo-custom' ); ?></a>
		</p>
		<button class="icon-button announcement__close" type="button" data-announcement-close>
			<span class="screen-reader-text"><?php esc_html_e( 'Dismiss announcement', 'growmodo-custom' ); ?></span>
			<?php growmodo_custom_icon( 'close', array( 'width' => 24, 'height' => 24 ) ); ?>
		</button>
	</div>

	<div class="nav-bar">
		<div class="nav-bar__inner">
			<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<?php
					growmodo_custom_image(
						'assets/images/logo.svg',
						__( 'Estatein', 'growmodo-custom' ),
						160,
						48,
						array(
							'class'         => 'logo__img',
							'loading'       => 'eager',
							'fetchpriority' => 'high',
						)
					);
					?>
				<?php endif; ?>
			</a>

			<button class="menu-toggle" type="button" aria-controls="site-navigation" aria-expanded="false">
				<span class="menu-toggle__bars" aria-hidden="true"><span></span><span></span><span></span></span>
				<?php growmodo_custom_icon( 'close', array( 'class' => 'menu-toggle__close icon', 'width' => 24, 'height' => 24 ) ); ?>
				<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'growmodo-custom' ); ?></span>
			</button>

			<nav id="site-navigation" class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary', 'growmodo-custom' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'primary-menu',
						'container'      => false,
						'fallback_cb'    => 'growmodo_custom_primary_menu_fallback',
					)
				);
				?>
				<a class="button nav-contact" href="<?php echo esc_url( growmodo_custom_destination( 'contact-us', home_url( '/#contact' ) ) ); ?>"<?php echo is_page( 'contact-us' ) ? ' aria-current="page"' : ''; ?>>
					<?php esc_html_e( 'Contact Us', 'growmodo-custom' ); ?>
				</a>
			</nav>
		</div>
	</div>
</header>
