<?php
/**
 * WPUpgraderClearDestinationAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether the upgrader cleared the destination.
 *
 * @since 2.8.0
 */
abstract class WPUpgraderClearDestinationAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'upgrader_clear_destination';

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
	 * @param true|\WP_Error $removed Whether the destination was cleared. True upon success, WP_Error on failure.
	 * @param string $local_destination The local package destination.
	 * @param string $remote_destination The remote package destination.
	 * @param array $hook_extra Extra arguments passed to hooked filters.
	 */
	abstract public function execute( $removed, $local_destination, $remote_destination, $hook_extra );
}
