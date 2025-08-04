<?php
/**
 * WPGetPageOfCommentAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the calculated page on which a comment appears.
 *
 * @since 4.4.0
 * @since 4.7.0 Introduced the `$comment_id` parameter.
 */
abstract class WPGetPageOfCommentAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_page_of_comment';

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
	public int $hook_accepted_args = 4;


	/**
	 * The hook execution method
	 *
	 * @param int $page Comment page.
	 * @param array $args Arguments used to calculate pagination. These include arguments auto-detected by the function, based on query vars, system settings, etc. For pristine arguments passed to the function, see <code>$original_args</code>.
	 * @param array $original_args Array of arguments passed to the function. Some or all of these may not be set.
	 * @param int $comment_id ID of the comment.
	 */
	abstract public function execute( $page, $args, $original_args, $comment_id );
}
