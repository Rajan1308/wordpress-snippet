<?php

/**
 * Gutenberg
 * Add in the Functions.php
 */

//  Disabling for all post types

add_filter( 'use_block_editor_for_post', '__return_false'  );

// Disabling for specific post types
function maybe_load_gutenberg_for_post_type( $can_edit, $post ) {
  $enable_for_post_types = [ 'page' ];
  if ( in_array( $post->post_type, $enable_for_post_types, true ) ) {
          return true;
  }
  return false;
}
add_filter( 'use_block_editor_for_post', 'maybe_load_gutenberg_for_post_type', 15, 2 );


// Enabling or disabling for specific post IDs
function maybe_load_gutenberg_for_post_id( $can_edit, $post ) {
  $enable_for_post_ids = array( 114, 285, 352 );

  if ( in_array( $post->ID, $enable_for_post_ids, true ) ) {
       return true;
  }

  return false;
}

add_filter( 'use_block_editor_for_post', 'maybe_load_gutenberg_for_post_id', 20, 2 );