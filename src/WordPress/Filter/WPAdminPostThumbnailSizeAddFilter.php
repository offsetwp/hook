<?php
/**
 * WPAdminPostThumbnailSizeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the size used to display the post thumbnail image in the 'Featured image' meta box.
 *
 * @since 4.4.0
 */
abstract class WPAdminPostThumbnailSizeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'admin_post_thumbnail_size';

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
	 * @param string|int[] $size Requested image size. Can be any registered image size name, or an array of width and height values in pixels ( in that order ).
	 * @param int $thumbnail_id Post thumbnail attachment ID.
	 * @param \WP_Post $post The post object associated with the thumbnail.
	 */
	abstract public function execute( $size, $thumbnail_id, $post );
}
