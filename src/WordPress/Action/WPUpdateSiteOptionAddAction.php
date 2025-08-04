<?php
/**
 * WPUpdateSiteOptionAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after the value of a network option has been successfully updated.
 *
 * @since 3.0.0
 * @since 4.7.0 The `$network_id` parameter was added.
 */
abstract class WPUpdateSiteOptionAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'update_site_option';

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
	public int $hook_accepted_args = 4;


	/**
	 * The hook execution method
	 *
	 * @param string $option Name of the network option.
	 * @param mixed $value Current value of the network option.
	 * @param mixed $old_value Old value of the network option.
	 * @param int $network_id ID of the network.
	 */
	abstract public function execute( $option, $value, $old_value, $network_id );
}
