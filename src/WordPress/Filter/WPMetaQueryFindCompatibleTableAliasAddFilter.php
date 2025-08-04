<?php
/**
 * WPMetaQueryFindCompatibleTableAliasAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the table alias identified as compatible with the current clause.
 *
 * @since 4.1.0
 */
abstract class WPMetaQueryFindCompatibleTableAliasAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'meta_query_find_compatible_table_alias';

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
	 * @param string|false $alias Table alias, or false if none was found.
	 * @param array $clause First-order query clause.
	 * @param array $parent_query Parent of $clause.
	 * @param \WP_Meta_Query $query WP_Meta_Query object.
	 */
	abstract public function execute( $alias, $clause, $parent_query, $query );
}
