<?php
/**
 * WPGetPostGalleryAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the first-found post gallery.
 *
 * @since 3.6.0
 */
abstract class WPGetPostGalleryAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_post_gallery';

	/**
	 * The callback to be run when the action is called.
	 *
	 * @var string
	 */
	public int $hook_priority = 10;

	/**
	 * Optional. Used to specify the order in which the functions associated with a particular action are executed. Lower numbers correspond with earlier execution, and functions with the same priority are executed in the order in which they were added to the action. Default 10.
	 *
	 * @var string
	 */
	public int $hook_accepted_args = 3;


	/**
	 * The hook execution method
	 *
	 * @param array $gallery The first-found post gallery.
	 * @param int|\WP_Post $post Post ID or object.
	 * @param array $galleries Associative array of all found post galleries.
	 */
	abstract public function execute( $gallery, $post, $galleries );
}
