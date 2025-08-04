<?php
/**
 * WPHttpAllowedSafePortsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Controls the list of ports considered safe in HTTP API.
 *
 * @since 5.9.0
 */
abstract class WPHttpAllowedSafePortsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'http_allowed_safe_ports';

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
	 * @param int[] $allowed_ports Array of integers for valid ports.
	 * @param string $host Host name of the requested URL.
	 * @param string $url Requested URL.
	 */
	abstract public function execute( $allowed_ports, $host, $url );
}
