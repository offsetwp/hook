<?php
/**
 * WPPluginsApiAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the response for the current WordPress.org Plugin Installation API request.
 *
 * @since 2.7.0
 */
abstract class WPPluginsApiAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'plugins_api';

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
	 * @param false|object|array $result The result object or array. Default false.
	 * @param string $action The type of information being requested from the Plugin Installation API.
	 * @param object $args Plugin API arguments.
	 */
	abstract public function execute( $result, $action, $args );
}
