<?php
/**
 * WPListTablePrimaryColumnAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the name of the primary column for the current list table.
 *
 * @since 4.3.0
 */
abstract class WPListTablePrimaryColumnAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'list_table_primary_column';

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
	 * @param string $default Column name default for the specific list table, e.g. 'name'.
	 * @param string $context Screen ID for specific list table, e.g. 'plugins'.
	 */
	abstract public function execute( $default, $context );
}
