<?php
/**
 * WPDuplicateCommentIdAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the ID, if any, of the duplicate comment found when creating a new comment.
 *
 * @since 4.4.0
 */
abstract class WPDuplicateCommentIdAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'duplicate_comment_id';

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
	 * @param int $dupe_id ID of the comment identified as a duplicate.
	 * @param array $commentdata Data for the comment being created.
	 */
	abstract public function execute( $dupe_id, $commentdata );
}
