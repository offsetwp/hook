<?php
/**
 * WPShowAdvancedPluginsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to display the advanced plugins list table.
 *
 * @since 3.0.0
 */
abstract class WPShowAdvancedPluginsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'show_advanced_plugins';

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
	 * @param bool $show Whether to show the advanced plugins for the specified plugin type. Default true.
	 * @param string $type The plugin type. Accepts 'mustuse', 'dropins'.
	 */
	abstract public function execute( $show, $type );
}
