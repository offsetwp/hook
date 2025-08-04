<?php
/**
 * WPGetAdjacentPostSortAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the ORDER BY clause in the SQL for an adjacent post query.
 *
 * @since 2.5.0
 * @since 4.4.0 Added the `$post` parameter.
 * @since 4.9.0 Added the `$order` parameter.
 */
abstract class WPGetAdjacentPostSortAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_{$adjacent}_post_sort';

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
	 * @param string $order_by The <code>ORDER BY</code> clause in the SQL.
	 * @param \WP_Post $post WP_Post object.
	 * @param string $order Sort order. 'DESC' for previous post, 'ASC' for next.
	 */
	abstract public function execute( $order_by, $post, $order );
}
