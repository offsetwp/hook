<?php
/**
 * WPIsLargeNetworkAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether the network is considered large.
 *
 * @since 3.3.0
 * @since 4.8.0 The `$network_id` parameter has been added.
 */
abstract class WPIsLargeNetworkAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_is_large_network';

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
	 * @param bool $is_large_network Whether the network has more than 10000 users or sites.
	 * @param string $component The component to count. Accepts 'users', or 'sites'.
	 * @param int $count The count of items for the component.
	 * @param int $network_id The ID of the network being checked.
	 */
	abstract public function execute( $is_large_network, $component, $count, $network_id );
}
