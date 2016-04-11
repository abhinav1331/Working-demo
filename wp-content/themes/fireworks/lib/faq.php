<?php 
function my_custom_post_FAQ() {
  $labels = array(
    'name'               => _x( 'FAQ', 'post type general name' ),
    'singular_name'      => _x( 'FAQ', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New FAQ' ),
    'edit_item'          => __( 'Edit FAQ' ),
    'new_item'           => __( 'New FAQ' ),
    'all_items'          => __( 'All FAQ' ),
    'view_item'          => __( 'View FAQ' ),
    'search_items'       => __( 'Search FAQ' ),
    'not_found'          => __( 'No FAQ found' ),
    'not_found_in_trash' => __( 'No FAQ found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'FAQ'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our FAQ and FAQ specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'faq', $args ); 
}
add_action( 'init', 'my_custom_post_FAQ' );


?>