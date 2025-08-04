<?php
/**
 * WPPluginsUrlAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the URL to the plugins directory.
 *
 * @since 2.8.0
 */
abstract class WPPluginsUrlAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'plugins_url';

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
	 * @param string $url The complete URL to the plugins directory including scheme and path.
	 * @param string $path Path relative to the URL to the plugins directory. Blank string if no path is specified.
	 * @param string $plugin The plugin file path to be relative to. Blank string if no plugin is specified.
	 */
	abstract public function execute( $url, $path, $plugin );
}
