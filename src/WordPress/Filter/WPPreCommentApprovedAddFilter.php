<?php
/**
 * WPPreCommentApprovedAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters a comment's approval status before it is set.
 *
 * @since 2.1.0
 * @since 4.9.0 Returning a WP_Error value from the filter will short-circuit comment insertion and allow skipping further processing.
 */
abstract class WPPreCommentApprovedAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_comment_approved';

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
	 * @param int|string|\WP_Error $approved The approval status. Accepts 1, 0, 'spam', 'trash', or WP_Error.
	 * @param array $commentdata Comment data.
	 */
	abstract public function execute( $approved, $commentdata );
}
