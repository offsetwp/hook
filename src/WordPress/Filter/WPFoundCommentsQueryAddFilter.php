<?php
/**
 * WPFoundCommentsQueryAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the query used to retrieve found comment count.
 *
 * @since 4.4.0
 */
abstract class WPFoundCommentsQueryAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'found_comments_query';

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
	 * @param string $found_comments_query SQL query. Default 'SELECT FOUND_ROWS()'.
	 * @param \WP_Comment_Query $comment_query The <code>WP_Comment_Query</code> instance.
	 */
	abstract public function execute( $found_comments_query, $comment_query );
}
