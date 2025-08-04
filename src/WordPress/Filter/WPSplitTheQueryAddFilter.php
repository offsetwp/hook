<?php
/**
 * WPSplitTheQueryAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to split the query.
 *
 * @since 3.4.0
 * @since 6.6.0 Added the `$old_request` and `$clauses` parameters.
 */
abstract class WPSplitTheQueryAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'split_the_query';

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
	 * @param bool $split_the_query Whether or not to split the query.
	 * @param \WP_Query $query The WP_Query instance.
	 * @param string $old_request The complete SQL query before filtering.
	 * @param array $clauses Associative array of the clauses for the query.
	 */
	abstract public function execute( $split_the_query, $query, $old_request, $clauses );
}
