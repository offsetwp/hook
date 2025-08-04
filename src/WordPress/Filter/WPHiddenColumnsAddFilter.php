<?php
/**
 * WPHiddenColumnsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the list of hidden columns.
 *
 * @since 4.4.0
 * @since 4.4.1 Added the `use_defaults` parameter.
 */
abstract class WPHiddenColumnsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'hidden_columns';

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
	 * @param string[] $hidden Array of IDs of hidden columns.
	 * @param \WP_Screen $screen WP_Screen object of the current screen.
	 * @param bool $use_defaults Whether to show the default columns.
	 */
	abstract public function execute( $hidden, $screen, $use_defaults );
}
