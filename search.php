<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wp-site-blocks">
<?php
echo do_blocks( '<!-- wp:template-part {"slug":"header","theme":"fse-tester","tagName":"header","className":"site-header","layout":{"inherit":true}} /-->' );

if ( have_posts() ) {
	echo do_blocks( '
	<!-- wp:group {"tagName":"main","layout":{"inherit":true}} -->
	<main class="wp-block-group">

	<!-- wp:heading {"level":2} --><h2>' .
	/* translators: %s: search query. */
	sprintf( esc_html__( 'Search results for "%s":', 'fse' ), get_search_query() )
	. '</h2><!-- /wp:heading -->

	<!-- wp:query -->
	<div class="wp-block-query">
		<!-- wp:post-template -->
			<!-- wp:post-featured-image /-->
			<!-- wp:post-title {"isLink":true} /-->
			<!-- wp:post-author {"showAvatar":false} /-->
			<!-- wp:post-date /-->
			<!-- wp:post-hierarchical-terms {"term":"category"} /-->
			<!-- wp:post-excerpt /-->
		<!-- /wp:post-template -->
		<!-- wp:query-pagination -->
		<div class="wp-block-query-pagination">
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-next /-->
		</div>
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:query -->
	</main>
	<!-- /wp:group -->'
	);
} else {
	echo do_blocks( '
	<!-- wp:group {"tagName":"main","layout":{"inherit":true}} -->
	<main class="wp-block-group">
	<!-- wp:heading {"level":2} --><h2>' .
	/* translators: %s: search query. */
	sprintf( __( 'No results found for "%s"', 'fse' ), get_search_query() ) .
	'</h2><!-- /wp:heading -->

	<!-- wp:paragraph --><p>' .
	esc_html__( 'Sorry, but nothing matched your search terms. Please try again with some different keywords', 'fse' ) .
	'</p><!-- /wp:paragraph -->

	<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /-->

	</main>
	<!-- /wp:group -->
	' );
}

echo do_blocks('<!-- wp:template-part {"slug":"footer","theme":"fse-tester","tagName":"footer","className":"site-footer","layout":{"inherit":true}} /-->');

?>
</div>
<?php wp_footer(); ?>
</body>
</html>