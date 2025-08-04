<?php
/**
 * WPWidgetArchivesDropdownArgsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the arguments for the Archives widget drop-down.
 *
 * @since 2.8.0
 * @since 4.9.0 Added the `$instance` parameter.
 *
 * @see wp_get_archives()
 */
abstract class WPWidgetArchivesDropdownArgsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'widget_archives_dropdown_args';

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
	 * @param array $args An array of Archives widget drop-down arguments.
	 * @param array $instance Settings for the current Archives widget instance.
	 */
	abstract public function execute( $args, $instance );
}
