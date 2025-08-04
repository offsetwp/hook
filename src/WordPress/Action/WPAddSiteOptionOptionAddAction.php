<?php
/**
 * WPAddSiteOptionOptionAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after a specific network option has been successfully added.
 *
 * @since 2.9.0 As "add_site<em>option</em>{$key}"
 * @since 3.0.0
 * @since 4.7.0 The `$network_id` parameter was added.
 */
abstract class WPAddSiteOptionOptionAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'add_site_option_{$option}';

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
	 * @param string $option Name of the network option.
	 * @param mixed $value Value of the network option.
	 * @param int $network_id ID of the network.
	 */
	abstract public function execute( $option, $value, $network_id );
}
