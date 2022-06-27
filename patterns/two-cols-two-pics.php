<?php

/**
 * Title: Two columns with two pictures
 * Slug: fsetester/two-cols-two-pics
 * Description: Two columns with two pictures
 * Categories: featured, text, columns
 * Block Types: core/post-content, core/images
 * Inserter: true
 * Viewport Width: 840
 */
  
?>

<!-- wp:columns {"align":"full", "lock":{"move":true,"remove":true}} -->
  <div class="wp-block-columns alignfull">
    <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
          <figure class="wp-block-image  size-full">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/block-pattern-image.jpg' ) ); ?>" 
              alt="" />
            <figcaption> 
              <?php _X( 'Caption text', 'Block pattern preview text', 'textDomain' ); ?>
            </figcaption>
          </figure>
        <!-- /wp:image --></div>
    <!-- /wp:column -->
    <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
          <figure class="wp-block-image  size-full">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/block-pattern-image.jpg' ) ); ?>" 
              alt="" />
            <figcaption>
              <?php _X( 'Caption text', 'Block pattern preview text', 'textDomain' ); ?>
            </figcaption>
          </figure>
        <!-- /wp:image -->
      </div>
    <!-- /wp:column -->
  </div>
 <!-- /wp:columns -->