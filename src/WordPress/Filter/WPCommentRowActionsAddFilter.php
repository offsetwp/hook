<?php
/**
 * WPCommentRowActionsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the action links displayed for each comment in the Comments list table.
 *
 * @since 2.6.0
 */
abstract class WPCommentRowActionsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'comment_row_actions';

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
	public int $hook_accepted_args = 2;


	/**
	 * The hook execution method
	 *
	 * @param string[] $actions An array of comment actions. Default actions include: 'Approve', 'Unapprove', 'Edit', 'Reply', 'Spam', 'Delete', and 'Trash'.
	 * @param \WP_Comment $comment The comment object.
	 */
	abstract public function execute( $actions, $comment );
}
