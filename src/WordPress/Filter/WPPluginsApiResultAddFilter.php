<?php
/**
 * WPPluginsApiResultAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the Plugin Installation API response results.
 *
 * @since 2.7.0
 */
abstract class WPPluginsApiResultAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'plugins_api_result';

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
	 * @param object|\WP_Error $res Response object or WP_Error.
	 * @param string $action The type of information being requested from the Plugin Installation API.
	 * @param object $args Plugin API arguments.
	 */
	abstract public function execute( $res, $action, $args );
}
