<?php
/**
 * WPPreGetNetworkByPathAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Determines a network by its domain and path.
 *
 * @since 3.9.0
 */
abstract class WPPreGetNetworkByPathAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_get_network_by_path';

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
	public int $hook_accepted_args = 5;


	/**
	 * The hook execution method
	 *
	 * @param null|false|\WP_Network $network Network value to return by path. Default null to continue retrieving the network.
	 * @param string $domain The requested domain.
	 * @param string $path The requested path, in full.
	 * @param int|null $segments The suggested number of paths to consult. Default null, meaning the entire path was to be consulted.
	 * @param string[] $paths Array of paths to search for, based on <code>$path</code> and <code>$segments</code>.
	 */
	abstract public function execute( $network, $domain, $path, $segments, $paths );
}
