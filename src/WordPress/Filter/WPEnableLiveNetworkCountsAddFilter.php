<?php
/**
 * WPEnableLiveNetworkCountsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to update network site or user counts when a new site is created.
 *
 * @since 3.7.0
 *
 * @see wp_is_large_network()
 */
abstract class WPEnableLiveNetworkCountsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'enable_live_network_counts';

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
	 * @param bool $small_network Whether the network is considered small.
	 * @param string $context Context. Either 'users' or 'sites'.
	 */
	abstract public function execute( $small_network, $context );
}
