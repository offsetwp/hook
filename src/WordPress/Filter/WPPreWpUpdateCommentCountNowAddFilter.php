<?php
/**
 * WPPreWpUpdateCommentCountNowAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters a post's comment count before it is updated in the database.
 *
 * @since 4.5.0
 */
abstract class WPPreWpUpdateCommentCountNowAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_wp_update_comment_count_now';

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
	 * @param int|null $new The new comment count. Default null.
	 * @param int $old The old comment count.
	 * @param int $post_id Post ID.
	 */
	abstract public function execute( $new, $old, $post_id );
}
