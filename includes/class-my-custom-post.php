<?php
/**
 * Custom Post Type: My Custom Post
 *
 * @package CustomPlugin
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Registers the My Custom Post post type.
 */
class My_Custom_Post {

	/**
	 * Post type slug.
	 *
	 * @var string
	 */
	const POST_TYPE = 'my-custom-post';

	/**
	 * Initializes the post type registration.
	 */
  public static function init() {
      add_action( 'init', array( __CLASS__, 'register_post_type' ) );
  }

	/**
	 * Registers the my-custom-post post type.
	 */
  public static function register_post_type() {
      $labels = array(
          'name'               => _x( 'My Custom Posts', 'post type general name', 'custom-plugin' ),
          'singular_name'      => _x( 'My Custom Post', 'post type singular name', 'custom-plugin' ),
          'menu_name'          => _x( 'My Custom Post', 'admin menu', 'custom-plugin' ),
          'name_admin_bar'     => _x( 'My Custom Post', 'add new on admin bar', 'custom-plugin' ),
          'add_new'            => _x( 'Add New', 'my-custom-post', 'custom-plugin' ),
          'add_new_item'       => __( 'Add New My Custom Post', 'custom-plugin' ),
          'new_item'           => __( 'New My Custom Post', 'custom-plugin' ),
          'edit_item'          => __( 'Edit My Custom Post', 'custom-plugin' ),
          'view_item'          => __( 'View My Custom Post', 'custom-plugin' ),
          'all_items'          => __( 'All My Custom Posts', 'custom-plugin' ),
          'search_items'       => __( 'Search My Custom Posts', 'custom-plugin' ),
          'parent_item_colon'  => __( 'Parent My Custom Posts:', 'custom-plugin' ),
          'not_found'          => __( 'No my custom posts found.', 'custom-plugin' ),
          'not_found_in_trash' => __( 'No my custom posts found in Trash.', 'custom-plugin' ),
      );

      $args = array(
          'labels'             => $labels,
          'public'             => true,
          'publicly_queryable' => true,
          'show_ui'            => true,
          'show_in_menu'       => true,
          'query_var'          => true,
          'rewrite'            => array( 'slug' => 'my-custom-post' ),
          'capability_type'    => 'post',
          'has_archive'        => true,
          'hierarchical'       => false,
          'menu_position'      => 5,
          'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
      );

      register_post_type( self::POST_TYPE, $args );
  }
}
