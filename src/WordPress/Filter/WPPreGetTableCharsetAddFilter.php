<?php
/**
 * WPPreGetTableCharsetAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the table charset value before the DB is checked.
 *
 * @since 4.2.0
 */
abstract class WPPreGetTableCharsetAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_get_table_charset';

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
	 * @param string|\WP_Error|null $charset The character set to use, WP_Error object if it couldn't be found. Default null.
	 * @param string $table The name of the table being checked.
	 */
	abstract public function execute( $charset, $table );
}
