<?php
/**
 * WPAdminPostThumbnailHtmlAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the admin post thumbnail HTML markup to return.
 *
 * @since 2.9.0
 * @since 3.5.0 Added the `$post_id` parameter.
 * @since 4.6.0 Added the `$thumbnail_id` parameter.
 */
abstract class WPAdminPostThumbnailHtmlAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'admin_post_thumbnail_html';

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
	 * @param string $content Admin post thumbnail HTML markup.
	 * @param int $post_id Post ID.
	 * @param int|null $thumbnail_id Thumbnail attachment ID, or null if there isn't one.
	 */
	abstract public function execute( $content, $post_id, $thumbnail_id );
}
