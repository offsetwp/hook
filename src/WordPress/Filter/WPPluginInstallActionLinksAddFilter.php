<?php
/**
 * WPPluginInstallActionLinksAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the install action links for a plugin.
 *
 * @since 2.7.0
 */
abstract class WPPluginInstallActionLinksAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'plugin_install_action_links';

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
	 * @param string[] $action_links An array of plugin action links. Defaults are links to Details and Install Now.
	 * @param array $plugin An array of plugin data. See {@see \plugins_api()} for the list of possible values.
	 */
	abstract public function execute( $action_links, $plugin );
}
