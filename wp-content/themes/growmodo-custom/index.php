<?php
/**
 * Fallback template for archives, search, and singular views.
 *
 * @package Growmodo_Custom
 */

get_header();
?>
<main id="primary" class="site-main">
	<?php if ( have_posts() ) : ?>

		<?php if ( is_home() && ! is_front_page() ) : ?>
			<header class="page-header">
				<h1 class="page-title"><?php single_post_title(); ?></h1>
			</header>
		<?php elseif ( is_archive() ) : ?>
			<header class="page-header">
				<h1 class="page-title"><?php the_archive_title(); ?></h1>
				<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
			</header>
		<?php elseif ( is_search() ) : ?>
			<header class="page-header">
				<h1 class="page-title">
					<?php
					printf(
						/* translators: %s: search query. */
						esc_html__( 'Search results for "%s"', 'growmodo-custom' ),
						esc_html( get_search_query() )
					);
					?>
				</h1>
			</header>
		<?php endif; ?>

		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php if ( is_singular() ) : ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php else : ?>
						<h2 class="entry-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
					<?php endif; ?>

					<?php if ( 'post' === get_post_type() ) : ?>
						<p class="entry-meta">
							<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
								<?php echo esc_html( get_the_date() ); ?>
							</time>
						</p>
					<?php endif; ?>
				</header>

				<?php if ( has_post_thumbnail() ) : ?>
					<?php if ( is_singular() ) : ?>
						<div class="post-thumbnail">
							<?php the_post_thumbnail( 'large' ); ?>
						</div>
					<?php else : ?>
						<a class="post-thumbnail" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
							<?php the_post_thumbnail( 'large' ); ?>
						</a>
					<?php endif; ?>
				<?php endif; ?>

				<div class="entry-content">
					<?php
					if ( is_singular() ) {
						the_content();

						wp_link_pages(
							array(
								'before' => '<nav class="page-links" aria-label="' . esc_attr__( 'Pages', 'growmodo-custom' ) . '">',
								'after'  => '</nav>',
							)
						);
					} else {
						the_excerpt();
					}
					?>
				</div>
			</article>
			<?php
		endwhile;

		the_posts_pagination(
			array(
				'mid_size'  => 1,
				'prev_text' => __( 'Previous', 'growmodo-custom' ),
				'next_text' => __( 'Next', 'growmodo-custom' ),
			)
		);

		if ( is_singular() ) {
			comments_template();
		}
		?>

	<?php else : ?>
		<section class="no-results">
			<h1 class="page-title"><?php esc_html_e( 'Nothing found', 'growmodo-custom' ); ?></h1>
			<p>
				<?php
				if ( is_search() ) {
					esc_html_e( 'No results matched your search. Try a different term.', 'growmodo-custom' );
				} else {
					esc_html_e( 'No content is available yet.', 'growmodo-custom' );
				}
				?>
			</p>
		</section>
	<?php endif; ?>
</main>
<?php
get_footer();
