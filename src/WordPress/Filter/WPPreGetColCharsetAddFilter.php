<?php
/**
 * WPPreGetColCharsetAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the column charset value before the DB is checked.
 *
 * @since 4.2.0
 */
abstract class WPPreGetColCharsetAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_get_col_charset';

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
	 * @param string|null|false|\WP_Error $charset The character set to use. Default null.
	 * @param string $table The name of the table being checked.
	 * @param string $column The name of the column being checked.
	 */
	abstract public function execute( $charset, $table, $column );
}
