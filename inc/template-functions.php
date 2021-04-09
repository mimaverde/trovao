<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package BasicSASSWordpressTheme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function bswt_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'bswt_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function bswt_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'bswt_pingback_header' );



/**
 * Register a post type named 'Podcast'
 *
 * @see register_post_type() for registering post types.
 */
function trv_register_podcast_post_type() {
	// Set various pieces of text, $labels is used inside the $args array
	$labels = array(
		'name' => __( 'Podcasts', 'bswt' ),
		'singular_name' => __( 'Podcast', 'bswt' )
	);

	// Set various pieces of information about the post type
	$args = array(
		'labels' => $labels,
		'description' => 'Podcast que possuem vários episódios',
		'public' => true,
		'show_in_rest' => true,
		'menu_icon' => 'dashicons-format-audio'
	);

	// Register the movie post type with all the information contained in the $arguments array
	register_post_type('podcast', $args);

	add_post_type_support('podcast', array('title', 'thumbnail', 'editor'));
}
add_action( 'init', 'trv_register_podcast_post_type' );









// add_action('init', 'gp_register_taxonomy_for_object_type');
// function gp_register_taxonomy_for_object_type()
// {
// 	register_taxonomy_for_object_type('post_tag', 'podcast');
// };
add_action('init', 'create_tag_taxonomies', 0);

//create two taxonomies, genres and tags for the post type "tag"
function create_tag_taxonomies()
{
	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name' => _x('Tags', 'taxonomy general name'),
		'singular_name' => _x('Tag', 'taxonomy singular name'),
		'search_items' =>  __('Search Tags'),
		'popular_items' => __('Popular Tags'),
		'all_items' => __('All Tags'),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __('Edit Tag'),
		'update_item' => __('Update Tag'),
		'add_new_item' => __('Add New Tag'),
		'new_item_name' => __('New Tag Name'),
		'separate_items_with_commas' => __('Separate tags with commas'),
		'add_or_remove_items' => __('Add or remove tags'),
		'choose_from_most_used' => __('Choose from the most used tags'),
		'menu_name' => __('Tags'),
	);

	register_taxonomy('tag', 'podcast', array(
		'hierarchical' => false,
		'labels' => $labels,
		'show_ui' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'show_tagcloud' => true,
	));
}

flush_rewrite_rules( false );
//
// Removing Default Post Type
//
function remove_default_post_type() {
    remove_menu_page( 'edit.php' );
}
add_action( 'admin_menu', 'remove_default_post_type' );
function remove_default_post_type_menu_bar( $wp_admin_bar ) {
    $wp_admin_bar->remove_node( 'new-post' );
}
add_action( 'admin_bar_menu', 'remove_default_post_type_menu_bar', 999 );
function remove_draft_widget(){
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
}
add_action( 'wp_dashboard_setup', 'remove_draft_widget', 999 );