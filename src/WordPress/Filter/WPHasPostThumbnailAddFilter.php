<?php
/**
 * WPHasPostThumbnailAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether a post has a post thumbnail.
 *
 * @since 5.1.0
 */
abstract class WPHasPostThumbnailAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'has_post_thumbnail';

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
	 * @param bool $has_thumbnail true if the post has a post thumbnail, otherwise false.
	 * @param int|\WP_Post|null $post Post ID or WP_Post object. Default is global <code>$post</code>.
	 * @param int|false $thumbnail_id Post thumbnail ID or false if the post does not exist.
	 */
	abstract public function execute( $has_thumbnail, $post, $thumbnail_id );
}
