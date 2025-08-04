<?php
/**
 * WPUserSearchColumnsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the columns to search in a WP_User_Query search.
 *
 * @since 3.6.0
 */
abstract class WPUserSearchColumnsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'user_search_columns';

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
	 * @param string[] $search_columns Array of column names to be searched.
	 * @param string $search Text being searched.
	 * @param \WP_User_Query $query The current WP_User_Query instance.
	 */
	abstract public function execute( $search_columns, $search, $query );
}
