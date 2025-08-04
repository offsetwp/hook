<?php
/**
 * WPPostThumbnailUrlAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the post thumbnail URL.
 *
 * @since 5.9.0
 */
abstract class WPPostThumbnailUrlAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'post_thumbnail_url';

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
	 * @param string|false $thumbnail_url Post thumbnail URL or false if the post does not exist.
	 * @param int|\WP_Post|null $post Post ID or WP_Post object. Default is global <code>$post</code>.
	 * @param string|int[] $size Registered image size to retrieve the source for or a flat array of height and width dimensions. Default 'post-thumbnail'.
	 */
	abstract public function execute( $thumbnail_url, $post, $size );
}
