<?php
/**
 * WPIsLargeUserCountAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether the site is considered large, based on its number of users.
 *
 * @since 6.0.0
 */
abstract class WPIsLargeUserCountAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_is_large_user_count';

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
	 * @param bool $is_large_user_count Whether the site has a large number of users.
	 * @param int $count The total number of users.
	 * @param int|null $network_id ID of the network. <code>null</code> represents the current network.
	 */
	abstract public function execute( $is_large_user_count, $count, $network_id );
}
