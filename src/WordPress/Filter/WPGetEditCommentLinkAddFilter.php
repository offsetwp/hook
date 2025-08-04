<?php
/**
 * WPGetEditCommentLinkAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the comment edit link.
 *
 * @since 2.3.0
 * @since 6.7.0 The $comment_id and $context parameters are now being passed to the filter.
 */
abstract class WPGetEditCommentLinkAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_edit_comment_link';

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
	 * @param string $location The edit link.
	 * @param int $comment_id Unique ID of the comment to generate an edit link.
	 * @param string $context Context to include HTML entities in link. Default 'display'.
	 */
	abstract public function execute( $location, $comment_id, $context );
}
