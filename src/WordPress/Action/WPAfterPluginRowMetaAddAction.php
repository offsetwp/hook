<?php
/**
 * WPAfterPluginRowMetaAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after plugin row meta.
 *
 * @since 6.5.0
 */
abstract class WPAfterPluginRowMetaAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'after_plugin_row_meta';

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
	 * @param string $plugin_file Refer to {@see 'plugin_row_meta'} filter.
	 * @param array $plugin_data Refer to {@see 'plugin_row_meta'} filter.
	 */
	abstract public function execute( $plugin_file, $plugin_data );
}
