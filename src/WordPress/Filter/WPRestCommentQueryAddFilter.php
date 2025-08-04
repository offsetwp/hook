<?php
/**
 * WPRestCommentQueryAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters WP_Comment_Query arguments when querying comments via the REST API.
 *
 * @since 4.7.0
 *
 * @link  https://developer.wordpress.org/reference/classes/wp_comment_query/
 */
abstract class WPRestCommentQueryAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_comment_query';

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
	 * @param array $prepared_args Array of arguments for WP_Comment_Query.
	 * @param \WP_REST_Request $request The REST API request.
	 */
	abstract public function execute( $prepared_args, $request );
}
