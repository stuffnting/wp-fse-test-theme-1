<?php

add_action( 'init', 'fsetester_two_cols_two_pics' );

function fsetester_two_cols_two_pics() {
  register_block_pattern(
    'fsetester/two-cols-two-pics',
    array(
      'title'         => "Two columns with two pictures",
      'viewportWidth' => 1400,
      'categories'    => ['gallery', 'columns'],
      'description'   => "Two columns with two pictures",
      'keywords'      => ['pictures', 'columns'],
      'blockTypes'    => ['core/column', 'core/columns', 'core/image'],
      'inserter'      => false,
      'content'       => '<!-- wp:columns {"align":"full", "lock":{"move":true,"remove":true}} -->
      <div class="wp-block-columns alignfull"><!-- wp:column -->
      <div class="wp-block-column"><!-- wp:image {"id":235,"sizeSlug":"large","linkDestination":"none"} -->
      <figure class="wp-block-image size-large"><img src="' .
      esc_url( get_theme_file_uri( 'assets/block-pattern-image.jpg' ) ) . 
      '" alt="" class="wp-image-235"/><figcaption>' 
      . _X( 'Caption text', 'Block pattern preview text', 'textDomain' ) . 
      '</figcaption></figure>
      <!-- /wp:image --></div>
      <!-- /wp:column -->
      
      <!-- wp:column -->
      <div class="wp-block-column"><!-- wp:image {"id":235,"sizeSlug":"large","linkDestination":"none"} -->
      <figure class="wp-block-image size-large"><img src="' .
      esc_url( get_theme_file_uri( 'assets/block-pattern-image.jpg' ) ) . 
      '" alt="" class="wp-image-235"/><figcaption>' 
      . _X( 'Caption text', 'Block pattern preview text', 'textDomain' ) . 
      '</figcaption></figure>
      <!-- /wp:image --></div>
      <!-- /wp:column --></div>
      <!-- /wp:columns -->',
    )
  );
}
 