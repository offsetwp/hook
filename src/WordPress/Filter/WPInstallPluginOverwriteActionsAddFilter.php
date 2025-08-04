<?php
/**
 * WPInstallPluginOverwriteActionsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the list of action links available following a single plugin installation failure when overwriting is allowed.
 *
 * @since 5.5.0
 */
abstract class WPInstallPluginOverwriteActionsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'install_plugin_overwrite_actions';

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
	 * @param string[] $install_actions Array of plugin action links.
	 * @param object $api Object containing WordPress.org API plugin data.
	 * @param array $new_plugin_data Array with uploaded plugin data.
	 */
	abstract public function execute( $install_actions, $api, $new_plugin_data );
}
